<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-11-02 09:11:18 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'defunct' in 'where clause' [ SELECT COUNT(*) AS `total` FROM `users_status` WHERE `defunct` = 'N' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-11-02 09:11:18 --- DEBUG: #0 /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/html/judge/application/classes/Model/Base.php(140): Kohana_Database_Query->execute()
#2 /var/www/html/judge/application/classes/Model/Situation.php(178): Model_Base::count(Array)
#3 /var/www/html/judge/application/classes/Controller/Situation.php(81): Model_Situation::number_of_volume()
#4 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_Situation->action_list()
#5 [internal function]: Controller_Base->execute()
#6 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#7 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#10 {main} in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-11-02 10:34:37 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'group_id' cannot be null [ INSERT INTO `invitation` (`id`, `group_id`, `invited_code`, `type`, `num`, `createtime`) VALUES (NULL, NULL, '5b0b2c2acd4d9b23333850b512df61e5', NULL, NULL, '2016-11-02 10:34:37') ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-11-02 10:34:37 --- DEBUG: #0 /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `in...', false, Array)
#1 /var/www/html/judge/application/classes/Model/InvitationCode.php(100): Kohana_Database_Query->execute()
#2 /var/www/html/judge/application/classes/Controller/Admin/Invite.php(53): Model_InvitationCode->save()
#3 /var/www/html/judge/application/classes/Controller/Base.php(266): Controller_Admin_Invite->action_code()
#4 [internal function]: Controller_Base->execute()
#5 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Invite))
#6 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#9 {main} in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-11-02 10:40:10 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'defunct' in 'where clause' [ SELECT COUNT(*) AS `total` FROM `users_status` WHERE `defunct` = 'N' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-11-02 10:40:10 --- DEBUG: #0 /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/html/judge/application/classes/Model/Base.php(140): Kohana_Database_Query->execute()
#2 /var/www/html/judge/application/classes/Model/Situation.php(178): Model_Base::count(Array)
#3 /var/www/html/judge/application/classes/Controller/Situation.php(81): Model_Situation::number_of_volume()
#4 /var/www/html/judge/application/classes/Controller/Base.php(266): Controller_Situation->action_list()
#5 [internal function]: Controller_Base->execute()
#6 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#7 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#10 {main} in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-11-02 10:44:59 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /var/www/html/judge/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2016-11-02 10:44:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-11-02 10:45:04 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /var/www/html/judge/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2016-11-02 10:45:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-11-02 10:45:17 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /var/www/html/judge/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2016-11-02 10:45:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-11-02 10:51:52 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'defunct' in 'where clause' [ SELECT COUNT(*) AS `total` FROM `users_status` WHERE `defunct` = 'N' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-11-02 10:51:52 --- DEBUG: #0 /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/html/judge/application/classes/Model/Base.php(140): Kohana_Database_Query->execute()
#2 /var/www/html/judge/application/classes/Model/Situation.php(178): Model_Base::count(Array)
#3 /var/www/html/judge/application/classes/Controller/Situation.php(81): Model_Situation::number_of_volume()
#4 /var/www/html/judge/application/classes/Controller/Base.php(266): Controller_Situation->action_list()
#5 [internal function]: Controller_Base->execute()
#6 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#7 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#10 {main} in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-11-02 10:53:16 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'defunct' in 'where clause' [ SELECT COUNT(*) AS `total` FROM `users_status` WHERE `defunct` = 'N' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-11-02 10:53:16 --- DEBUG: #0 /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/html/judge/application/classes/Model/Base.php(140): Kohana_Database_Query->execute()
#2 /var/www/html/judge/application/classes/Model/Situation.php(178): Model_Base::count(Array)
#3 /var/www/html/judge/application/classes/Controller/Situation.php(81): Model_Situation::number_of_volume()
#4 /var/www/html/judge/application/classes/Controller/Base.php(266): Controller_Situation->action_list()
#5 [internal function]: Controller_Base->execute()
#6 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#7 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#10 {main} in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-11-02 14:07:30 --- EMERGENCY: View_Exception [ 0 ]: The requested view leader/groups/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/judge/system/classes/Kohana/View.php:145
2016-11-02 14:07:30 --- DEBUG: #0 /var/www/html/judge/system/classes/Kohana/View.php(145): Kohana_View->set_filename('leader/groups/i...')
#1 /var/www/html/judge/system/classes/Kohana/View.php(30): Kohana_View->__construct('leader/groups/i...', Array)
#2 /var/www/html/judge/application/classes/Controller/Base.php(114): Kohana_View::factory('leader/groups/i...', Array)
#3 /var/www/html/judge/application/classes/Controller/Base.php(272): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Leader_Groups))
#6 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#9 {main} in /var/www/html/judge/system/classes/Kohana/View.php:145
2016-11-02 14:34:09 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'defunct' in 'where clause' [ SELECT COUNT(*) AS `total` FROM `users_status` WHERE `defunct` = 'N' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-11-02 14:34:09 --- DEBUG: #0 /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/html/judge/application/classes/Model/Base.php(140): Kohana_Database_Query->execute()
#2 /var/www/html/judge/application/classes/Model/Situation.php(178): Model_Base::count(Array)
#3 /var/www/html/judge/application/classes/Controller/Situation.php(81): Model_Situation::number_of_volume()
#4 /var/www/html/judge/application/classes/Controller/Base.php(266): Controller_Situation->action_list()
#5 [internal function]: Controller_Base->execute()
#6 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#7 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#10 {main} in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-11-02 18:45:50 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in /var/www/html/judge/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2016-11-02 18:45:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-11-02 18:45:56 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in /var/www/html/judge/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2016-11-02 18:45:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-11-02 18:46:21 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in /var/www/html/judge/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2016-11-02 18:46:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-11-02 18:50:43 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'group_id' cannot be null [ INSERT INTO `privilege` (`user_id`, `group_id`, `rightstr`, `defunct`) VALUES ('test5', NULL, '0', 'N') ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-11-02 18:50:43 --- DEBUG: #0 /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `pr...', false, Array)
#1 /var/www/html/judge/application/classes/Model/Save.php(29): Kohana_Database_Query->execute()
#2 /var/www/html/judge/application/classes/Model/User.php(198): Model_Save->save()
#3 /var/www/html/judge/application/classes/Model/User.php(224): Model_User->add_permission('0')
#4 /var/www/html/judge/application/classes/Controller/Leader/User.php(49): Model_User->set_permission(Array)
#5 /var/www/html/judge/application/classes/Controller/Base.php(266): Controller_Leader_User->action_edit()
#6 [internal function]: Controller_Base->execute()
#7 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Leader_User))
#8 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#11 {main} in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251