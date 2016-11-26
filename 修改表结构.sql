CREATE TABLE IF NOT EXISTS `groups` (
  `group_id` varchar(48) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `member` int(11) NOT NULL DEFAULT '0',
  `time_created` datetime DEFAULT NULL,
  `defunct` char(1) CHARACTER SET utf8 NOT NULL DEFAULT 'N',
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `group_config` (
  `group_id` varchar(48) NOT NULL,
  `stage_num` int(2) NOT NULL DEFAULT '5' COMMENT '组阶段数目',
  `stage_level` text,
  `level_score` text,
  `pass_num` text NOT NULL COMMENT '通过阶段需  做题目数量',
  `show_num` text NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='组配置表（group_config）';

CREATE TABLE IF NOT EXISTS `users_problem` (
  `user_id` varchar(48) CHARACTER SET utf8 NOT NULL,
  `problem_id` int(11) NOT NULL,
  `stage` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `users_status` (
  `user_id` varchar(48) CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  `group_id` varchar(48) CHARACTER SET utf8 NOT NULL,
  `submited` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `staged` int(2) NOT NULL,
  `during_time` text CHARACTER SET utf8
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

ALTER TABLE privilege ADD COLUMN group_id varchar(48) AFTER user_id;
ALTER TABLE problem ADD COLUMN level int(2) AFTER problem_id;
ALTER TABLE solution ADD COLUMN group_id varchar(48) AFTER user_id;
ALTER TABLE users ADD group_id varchar(48) NOT null AFTER user_id,ADD stage int(2) NOT null DEFAULT 1 AFTER group_id; 

UPDATE problem SET level=1 WHERE `problem_id` BETWEEN 0 AND 999;
UPDATE problem SET level=2 WHERE `problem_id` BETWEEN 1000 and 9999 LIMIT 22;
UPDATE problem SET level=3 WHERE `problem_id` in (SELECT * FROM (SELECT problem_id FROM problem WHERE `problem_id` BETWEEN 1000 and 9999 LIMIT 22 OFFSET 22) AS t);
UPDATE problem SET level=4 WHERE `problem_id` in (SELECT * FROM (SELECT problem_id FROM problem WHERE `problem_id` BETWEEN 1000 and 9999 LIMIT 30 OFFSET 44) AS t);
UPDATE problem SET level=5 WHERE `problem_id` BETWEEN 10000 AND 99999;

INSERT INTO `groups`(`group_id`, `member`, `time_created`, `defunct`) VALUES ('sjtu',0,'2016-11-24 12:14:29','N');
INSERT INTO `groups`(`group_id`, `member`, `time_created`, `defunct`) VALUES ('hsd',0,'2016-11-24 12:14:29','N');

DELIMITER |
create trigger updategroup_id after update
on users for each row
BEGIN
  UPDATE solution SET solution.group_id = new.group_id WHERE user_id= new.user_id; 
  UPDATE privilege SET privilege.group_id = new.group_id WHERE user_id= new.user_id; 
END|
DELIMITER ;

UPDATE users SET group_id='sjtu' WHERE user_id !='admin';
UPDATE users SET group_id='hsd' WHERE user_id !='admin' LIMIT 60;

UPDATE groups SET groups.member = (SELECT COUNT(*) FROM users WHERE group_id='sjtu') WHERE group_id='sjtu';
UPDATE groups SET groups.member = (SELECT COUNT(*) FROM users WHERE group_id='hsd') WHERE group_id='hsd';

INSERT INTO `group_config`(`group_id`, `stage_num`, `stage_level`, `level_score`, `pass_num`, `show_num`) VALUES ('sjtu',5,'{"1":"1","2":"2","3":"3","4":"4","5":"5"}','{"1":"1","2":"5","3":"10","4":"30","5":"50"}','{"1":"5","2":"5","3":"5","4":"5","5":"5"}','{"1":"10","2":"10","3":"10","4":"10","5":"10"}');

INSERT INTO `group_config`(`group_id`, `stage_num`, `stage_level`, `level_score`, `pass_num`, `show_num`) VALUES ('hsd',5,'{"1":"1","2":"2","3":"3","4":"4","5":"5"}','{"1":"1","2":"5","3":"10","4":"30","5":"50"}','{"1":"5","2":"5","3":"5","4":"5","5":"5"}','{"1":"10","2":"10","3":"10","4":"10","5":"10"}');


