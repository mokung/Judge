<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-09 21:51:12 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.reply' doesn't exist [ INSERT INTO `reply` (`rid`, `author_id`, `time`, `content`, `topic_id`, `status`, `ip`) VALUES (NULL, 'admin', '2016-07-09 21:51:12', 'nothing specific', 1, 0, '211.161.247.219') ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-07-09 21:51:12 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `re...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Base.php(237): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Discuss.php(153): Model_Base->save()
#3 /home/OnlineJudge/application/classes/Controller/Base.php(254): Controller_Discuss->action_new()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Discuss))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-07-09 21:51:20 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.reply' doesn't exist [ INSERT INTO `reply` (`rid`, `author_id`, `time`, `content`, `topic_id`, `status`, `ip`) VALUES (NULL, 'admin', '2016-07-09 21:51:20', 'nothing specific', 2, 0, '211.161.247.219') ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-07-09 21:51:20 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `re...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Base.php(237): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Discuss.php(153): Model_Base->save()
#3 /home/OnlineJudge/application/classes/Controller/Base.php(254): Controller_Discuss->action_new()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Discuss))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-07-09 21:51:29 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.reply' doesn't exist [ INSERT INTO `reply` (`rid`, `author_id`, `time`, `content`, `topic_id`, `status`, `ip`) VALUES (NULL, 'admin', '2016-07-09 21:51:29', 'nothing specific', 3, 0, '211.161.247.219') ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-07-09 21:51:29 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `re...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Base.php(237): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Discuss.php(153): Model_Base->save()
#3 /home/OnlineJudge/application/classes/Controller/Base.php(254): Controller_Discuss->action_new()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Discuss))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
