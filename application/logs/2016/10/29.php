<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-29 09:15:28 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/judge/system/classes/Kohana/Session.php:125
2016-10-29 09:15:28 --- DEBUG: #0 /var/www/html/judge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/judge/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/judge/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/judge/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/judge/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/judge/application/classes/I18n.php(45): Kohana_Auth::instance()
#6 /var/www/html/judge/application/classes/I18n.php(126): I18n::get_user_lang(Array)
#7 /var/www/html/judge/application/classes/Controller/Base.php(18): I18n::setup()
#8 /var/www/html/judge/application/classes/Controller/Base.php(241): Controller_Base->before()
#9 [internal function]: Controller_Base->execute()
#10 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#14 {main} in /var/www/html/judge/system/classes/Kohana/Session.php:125
2016-10-29 09:16:35 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'id' in 'order clause' [ SELECT * FROM `invitation` ORDER BY `id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-10-29 09:16:35 --- DEBUG: #0 /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Invitatio...', Array)
#1 /var/www/html/judge/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /var/www/html/judge/application/classes/Controller/Admin/Invite.php(130): Model_Base::find(Array, 1, 50, Array)
#3 /var/www/html/judge/application/classes/Controller/Admin/Invite.php(119): Controller_Admin_Invite->action_list()
#4 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_Admin_Invite->action_index()
#5 [internal function]: Controller_Base->execute()
#6 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Invite))
#7 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#10 {main} in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-10-29 09:17:54 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'id' in 'order clause' [ SELECT * FROM `invitation` ORDER BY `id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-10-29 09:17:54 --- DEBUG: #0 /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Invitatio...', Array)
#1 /var/www/html/judge/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /var/www/html/judge/application/classes/Controller/Admin/Invite.php(130): Model_Base::find(Array, 1, 50, Array)
#3 /var/www/html/judge/application/classes/Controller/Admin/Invite.php(119): Controller_Admin_Invite->action_list()
#4 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_Admin_Invite->action_index()
#5 [internal function]: Controller_Base->execute()
#6 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Invite))
#7 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#10 {main} in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-10-29 10:24:11 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'defunct' in 'where clause' [ SELECT COUNT(*) AS `total` FROM `users_status` WHERE `defunct` = 'N' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-10-29 10:24:11 --- DEBUG: #0 /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT COUNT(*)...', false, Array)
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
2016-10-29 10:24:20 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'defunct' in 'where clause' [ SELECT COUNT(*) AS `total` FROM `users_status` WHERE `defunct` = 'N' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-10-29 10:24:20 --- DEBUG: #0 /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT COUNT(*)...', false, Array)
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
2016-10-29 10:24:44 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'defunct' in 'where clause' [ SELECT COUNT(*) AS `total` FROM `users_status` WHERE `defunct` = 'N' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-10-29 10:24:44 --- DEBUG: #0 /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT COUNT(*)...', false, Array)
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
2016-10-29 10:39:38 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /var/www/html/judge/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2016-10-29 10:39:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-29 13:08:38 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /var/www/html/judge/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2016-10-29 13:08:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-29 13:14:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: group_id ~ APPPATH/classes/Model/InvitationCode.php [ 63 ] in /var/www/html/judge/application/classes/Model/InvitationCode.php:63
2016-10-29 13:14:52 --- DEBUG: #0 /var/www/html/judge/application/classes/Model/InvitationCode.php(63): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/j...', 63, Array)
#1 /var/www/html/judge/application/classes/Controller/User.php(126): Model_InvitationCode::get_Group_id('690448a6fa38e11...')
#2 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_User->action_register()
#3 [internal function]: Controller_Base->execute()
#4 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#8 {main} in /var/www/html/judge/application/classes/Model/InvitationCode.php:63
2016-10-29 13:15:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: group_id ~ APPPATH/classes/Model/InvitationCode.php [ 63 ] in /var/www/html/judge/application/classes/Model/InvitationCode.php:63
2016-10-29 13:15:24 --- DEBUG: #0 /var/www/html/judge/application/classes/Model/InvitationCode.php(63): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/j...', 63, Array)
#1 /var/www/html/judge/application/classes/Controller/User.php(126): Model_InvitationCode::get_Group_id('690448a6fa38e11...')
#2 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_User->action_register()
#3 [internal function]: Controller_Base->execute()
#4 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#8 {main} in /var/www/html/judge/application/classes/Model/InvitationCode.php:63
2016-10-29 13:22:28 --- EMERGENCY: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/Kohana/Validation.php [ 90 ] in /var/www/html/judge/application/classes/Controller/User.php:128
2016-10-29 13:22:28 --- DEBUG: #0 /var/www/html/judge/application/classes/Controller/User.php(128): Kohana_Validation->offsetUnset('invitation')
#1 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_User->action_register()
#2 [internal function]: Controller_Base->execute()
#3 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#7 {main} in /var/www/html/judge/application/classes/Controller/User.php:128
2016-10-29 13:23:15 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Model_InvitationCode could not be converted to string ~ MODPATH/database/classes/Kohana/Database.php [ 461 ] in /var/www/html/judge/modules/database/classes/Kohana/Database.php:461
2016-10-29 13:23:15 --- DEBUG: #0 /var/www/html/judge/modules/database/classes/Kohana/Database.php(461): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/html/j...', 461, Array)
#1 /var/www/html/judge/modules/database/classes/Kohana/Database/Query/Builder.php(165): Kohana_Database->quote(Object(Model_InvitationCode))
#2 /var/www/html/judge/modules/database/classes/Kohana/Database/Query/Builder/Update.php(98): Kohana_Database_Query_Builder->_compile_set(Object(Database_MySQLi), Array)
#3 /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Update->compile(Object(Database_MySQLi))
#4 /var/www/html/judge/application/classes/Model/User.php(499): Kohana_Database_Query->execute()
#5 /var/www/html/judge/application/classes/Controller/User.php(133): Model_User->save()
#6 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_User->action_register()
#7 [internal function]: Controller_Base->execute()
#8 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#12 {main} in /var/www/html/judge/modules/database/classes/Kohana/Database.php:461
2016-10-29 13:33:07 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Model_InvitationCode could not be converted to string ~ MODPATH/database/classes/Kohana/Database.php [ 461 ] in /var/www/html/judge/modules/database/classes/Kohana/Database.php:461
2016-10-29 13:33:07 --- DEBUG: #0 /var/www/html/judge/modules/database/classes/Kohana/Database.php(461): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/html/j...', 461, Array)
#1 /var/www/html/judge/modules/database/classes/Kohana/Database/Query/Builder/Insert.php(152): Kohana_Database->quote(Object(Model_InvitationCode))
#2 /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Insert->compile(Object(Database_MySQLi))
#3 /var/www/html/judge/application/classes/Model/User.php(507): Kohana_Database_Query->execute()
#4 /var/www/html/judge/application/classes/Controller/User.php(131): Model_User->save(true)
#5 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_User->action_register()
#6 [internal function]: Controller_Base->execute()
#7 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#11 {main} in /var/www/html/judge/modules/database/classes/Kohana/Database.php:461
2016-10-29 14:31:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_User::$Model_InvitationCode ~ APPPATH/classes/Controller/User.php [ 130 ] in /var/www/html/judge/application/classes/Controller/User.php:130
2016-10-29 14:31:07 --- DEBUG: #0 /var/www/html/judge/application/classes/Controller/User.php(130): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/html/j...', 130, Array)
#1 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_User->action_register()
#2 [internal function]: Controller_Base->execute()
#3 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#7 {main} in /var/www/html/judge/application/classes/Controller/User.php:130
2016-10-29 14:31:30 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Model_InvitationCode could not be converted to string ~ MODPATH/database/classes/Kohana/Database.php [ 461 ] in /var/www/html/judge/modules/database/classes/Kohana/Database.php:461
2016-10-29 14:31:30 --- DEBUG: #0 /var/www/html/judge/modules/database/classes/Kohana/Database.php(461): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/html/j...', 461, Array)
#1 /var/www/html/judge/modules/database/classes/Kohana/Database/Query/Builder.php(116): Kohana_Database->quote(Object(Model_InvitationCode))
#2 /var/www/html/judge/modules/database/classes/Kohana/Database/Query/Builder/Delete.php(67): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQLi), Array)
#3 /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Delete->compile(Object(Database_MySQLi))
#4 /var/www/html/judge/application/classes/Model/InvitationCode.php(72): Kohana_Database_Query->execute()
#5 /var/www/html/judge/application/classes/Controller/User.php(130): Model_InvitationCode::invitation_del(Object(Model_InvitationCode))
#6 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_User->action_register()
#7 [internal function]: Controller_Base->execute()
#8 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#12 {main} in /var/www/html/judge/modules/database/classes/Kohana/Database.php:461
2016-10-29 14:32:30 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /var/www/html/judge/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2016-10-29 14:32:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-29 14:34:46 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /var/www/html/judge/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2016-10-29 14:34:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-29 14:57:04 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '2' for key 'PRIMARY' [ INSERT INTO `invitation` (`id`, `group_id`, `invited_code`, `type`, `num`, `createtime`) VALUES ('2', 'stju', '76f4cf6501457ef204a2c0153a7bfd69', '1', 4, '2016-10-29 09:30:13') ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-10-29 14:57:04 --- DEBUG: #0 /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `in...', false, Array)
#1 /var/www/html/judge/application/classes/Model/InvitationCode.php(98): Kohana_Database_Query->execute()
#2 /var/www/html/judge/application/classes/Controller/User.php(132): Model_InvitationCode->save()
#3 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_User->action_register()
#4 [internal function]: Controller_Base->execute()
#5 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#9 {main} in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-10-29 15:02:07 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /var/www/html/judge/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2016-10-29 15:02:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-29 15:03:30 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /var/www/html/judge/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2016-10-29 15:03:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-29 15:03:47 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /var/www/html/judge/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2016-10-29 15:03:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-29 15:03:50 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /var/www/html/judge/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2016-10-29 15:03:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-29 15:05:32 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /var/www/html/judge/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2016-10-29 15:05:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-29 15:07:22 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /var/www/html/judge/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2016-10-29 15:07:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-29 15:12:06 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in /var/www/html/judge/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2016-10-29 15:12:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-29 15:12:24 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /var/www/html/judge/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2016-10-29 15:12:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-29 15:12:27 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /var/www/html/judge/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2016-10-29 15:12:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-29 15:12:39 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/User.php [ 132 ] in /var/www/html/judge/application/classes/Controller/User.php:132
2016-10-29 15:12:39 --- DEBUG: #0 /var/www/html/judge/application/classes/Controller/User.php(132): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/html/j...', 132, Array)
#1 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_User->action_register()
#2 [internal function]: Controller_Base->execute()
#3 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#7 {main} in /var/www/html/judge/application/classes/Controller/User.php:132
2016-10-29 15:13:44 --- EMERGENCY: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in /var/www/html/judge/system/classes/Kohana/Kohana/Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 84 ] in file:line
2016-10-29 15:13:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-29 15:14:20 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '2' for key 'PRIMARY' [ INSERT INTO `invitation` (`id`, `group_id`, `invited_code`, `type`, `num`, `createtime`) VALUES ('2', 'stju', '76f4cf6501457ef204a2c0153a7bfd69', '1', 4, '2016-10-29 09:30:13') ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-10-29 15:14:20 --- DEBUG: #0 /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `in...', false, Array)
#1 /var/www/html/judge/application/classes/Model/InvitationCode.php(98): Kohana_Database_Query->execute()
#2 /var/www/html/judge/application/classes/Controller/User.php(133): Model_InvitationCode->save()
#3 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_User->action_register()
#4 [internal function]: Controller_Base->execute()
#5 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#9 {main} in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-10-29 15:22:11 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '2' for key 'PRIMARY' [ INSERT INTO `invitation` (`id`, `group_id`, `invited_code`, `type`, `num`, `createtime`) VALUES ('2', 'stju', '76f4cf6501457ef204a2c0153a7bfd69', '1', 4, '2016-10-29 09:30:13') ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-10-29 15:22:11 --- DEBUG: #0 /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `in...', false, Array)
#1 /var/www/html/judge/application/classes/Model/InvitationCode.php(98): Kohana_Database_Query->execute()
#2 /var/www/html/judge/application/classes/Controller/User.php(133): Model_InvitationCode->save()
#3 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_User->action_register()
#4 [internal function]: Controller_Base->execute()
#5 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#9 {main} in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-10-29 15:29:37 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/User.php [ 132 ] in /var/www/html/judge/application/classes/Controller/User.php:132
2016-10-29 15:29:37 --- DEBUG: #0 /var/www/html/judge/application/classes/Controller/User.php(132): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/html/j...', 132, Array)
#1 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_User->action_register()
#2 [internal function]: Controller_Base->execute()
#3 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#7 {main} in /var/www/html/judge/application/classes/Controller/User.php:132
2016-10-29 15:32:17 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/User.php [ 133 ] in /var/www/html/judge/application/classes/Controller/User.php:133
2016-10-29 15:32:17 --- DEBUG: #0 /var/www/html/judge/application/classes/Controller/User.php(133): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/html/j...', 133, Array)
#1 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_User->action_register()
#2 [internal function]: Controller_Base->execute()
#3 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#7 {main} in /var/www/html/judge/application/classes/Controller/User.php:133
2016-10-29 15:32:20 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/User.php [ 133 ] in /var/www/html/judge/application/classes/Controller/User.php:133
2016-10-29 15:32:20 --- DEBUG: #0 /var/www/html/judge/application/classes/Controller/User.php(133): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/html/j...', 133, Array)
#1 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_User->action_register()
#2 [internal function]: Controller_Base->execute()
#3 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#7 {main} in /var/www/html/judge/application/classes/Controller/User.php:133
2016-10-29 15:32:45 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/User.php [ 133 ] in /var/www/html/judge/application/classes/Controller/User.php:133
2016-10-29 15:32:45 --- DEBUG: #0 /var/www/html/judge/application/classes/Controller/User.php(133): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/html/j...', 133, Array)
#1 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_User->action_register()
#2 [internal function]: Controller_Base->execute()
#3 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#7 {main} in /var/www/html/judge/application/classes/Controller/User.php:133
2016-10-29 22:25:39 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'stju' for key 'PRIMARY' [ INSERT INTO `groups` (`group_id`, `time_created`, `defunct`) VALUES ('stju', '2016-10-29 22:25:39', 'N') ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-10-29 22:25:39 --- DEBUG: #0 /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `gr...', false, Array)
#1 /var/www/html/judge/application/classes/Model/Groups.php(33): Kohana_Database_Query->execute()
#2 /var/www/html/judge/application/classes/Controller/Admin/Groups.php(15): Model_Groups->save()
#3 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_Admin_Groups->action_create()
#4 [internal function]: Controller_Base->execute()
#5 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Groups))
#6 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#9 {main} in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-10-29 22:42:34 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/groups/create could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/judge/system/classes/Kohana/View.php:145
2016-10-29 22:42:34 --- DEBUG: #0 /var/www/html/judge/system/classes/Kohana/View.php(145): Kohana_View->set_filename('admin/groups/cr...')
#1 /var/www/html/judge/system/classes/Kohana/View.php(30): Kohana_View->__construct('admin/groups/cr...', Array)
#2 /var/www/html/judge/application/classes/Controller/Base.php(101): Kohana_View::factory('admin/groups/cr...', Array)
#3 /var/www/html/judge/application/classes/Controller/Base.php(259): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Groups))
#6 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#9 {main} in /var/www/html/judge/system/classes/Kohana/View.php:145
2016-10-29 22:48:38 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/groups/ could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/judge/system/classes/Kohana/View.php:145
2016-10-29 22:48:38 --- DEBUG: #0 /var/www/html/judge/system/classes/Kohana/View.php(145): Kohana_View->set_filename('admin/groups/')
#1 /var/www/html/judge/system/classes/Kohana/View.php(30): Kohana_View->__construct('admin/groups/', Array)
#2 /var/www/html/judge/application/classes/Controller/Base.php(101): Kohana_View::factory('admin/groups/', Array)
#3 /var/www/html/judge/application/classes/Controller/Base.php(259): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Groups))
#6 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#9 {main} in /var/www/html/judge/system/classes/Kohana/View.php:145