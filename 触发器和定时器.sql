DELIMITER |
create trigger updatescore after update
on solution for each row
begin
  declare lv varchar(48);
  declare lvsc int;
  declare jsonkey varchar(48);
  declare sovlednum int;
  select COUNT(*) into sovlednum from solution where user_id=new.user_id and problem_id=new.problem_id and result=4;
  if new.result=4 and NOT EXISTS(select rightstr from privilege where (rightstr like '%administrator%' or rightstr like '%leader%') and user_id=new.user_id) and sovlednum<2  THEN
  select level into lv from problem where problem_id=new.problem_id;
  SET jsonkey = CONCAT('$."',lv,'"');
  select JSON_EXTRACT(level_score, jsonkey) into lvsc from group_config where group_id= new.group_id;
  UPDATE users SET users.score = users.score+lvsc WHERE user_id = new.user_id; 
  end IF;
end|
DELIMITER ;

create trigger updatemember after insert
on users for each row
  UPDATE groups SET groups.member = groups.member+1 WHERE group_id = new.group_id;

DELIMITER |
create trigger deldefuctproblem after update
on problem for each row
begin
  if new.defunct='Y' and old.defunct='N' THEN
  DELETE FROM `users_problem` WHERE problem_id=new.problem_id;
  end IF;
end|
DELIMITER ;

DELIMITER //
CREATE PROCEDURE Pstatus() 
BEGIN
INSERT INTO users_status(user_id, date,group_id,submited,score,staged,during_time) SELECT user_id,DATE_SUB(curdate(),INTERVAL 1 DAY) AS date,group_id,submit,score,stage,'[]' AS during_time FROM users WHERE user_id NOT IN (SELECT user_id FROM privilege WHERE rightstr='administrator' OR rightstr='leader');

  create temporary table if not exists tmp_user_status(  
           user_id varchar(48) primary key,  
           time text 
         ); 
 
 
INSERT INTO tmp_user_status SELECT user_id, CONCAT('[\"',GROUP_CONCAT(time(in_date) separator '\",\"'),'\"]') FROM solution WHERE user_id IN (SELECT user_id FROM users_status WHERE date=DATE_SUB(curdate(),INTERVAL 1 DAY)) AND DATE(in_date)=DATE_SUB(curdate(),INTERVAL 1 DAY) GROUP BY user_id;

UPDATE users_status, tmp_user_status SET users_status.during_time = tmp_user_status.time WHERE users_status.user_id=tmp_user_status.user_id AND users_status.date=DATE_SUB(curdate(),INTERVAL 1 DAY);

DROP TABLE tmp_user_status;

END//
DELIMITER ;



CREATE EVENT IF NOT EXISTS event_user_status

ON SCHEDULE EVERY 1 DAY STARTS '2016-11-27 00:01:00'

ON COMPLETION PRESERVE

DO CALL Pstatus();
