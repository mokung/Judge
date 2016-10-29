<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-06-16 00:34:58 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Sample::get_post() ~ APPPATH/classes/Controller/Sample.php [ 32 ] in file:line
2016-06-16 00:34:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-16 00:38:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Sample::get_current_user() ~ APPPATH/classes/Controller/Sample.php [ 12 ] in file:line
2016-06-16 00:38:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-16 00:44:07 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in /Users/Desmond/Sites/judge/modules/auth/classes/Kohana/Auth/File.php:40
2016-06-16 00:44:07 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/auth/classes/Kohana/Auth/File.php(40): Kohana_Auth->hash('aaa111')
#1 /Users/Desmond/Sites/judge/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_File->_login('admin', 'aaa111', true)
#2 /Users/Desmond/Sites/judge/application/classes/Controller/User.php(177): Kohana_Auth->login('admin', 'aaa111', true)
#3 /Users/Desmond/Sites/judge/application/classes/Controller/User.php(163): Controller_User->do_login()
#4 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_User->action_login()
#5 [internal function]: Controller_Base->execute()
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#10 {main} in /Users/Desmond/Sites/judge/modules/auth/classes/Kohana/Auth/File.php:40
2016-06-16 01:07:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH/classes/Controller/User.php [ 149 ] in /Users/Desmond/Sites/judge/application/classes/Controller/User.php:149
2016-06-16 01:07:56 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/classes/Controller/User.php(149): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 149, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_User->action_login()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/judge/application/classes/Controller/User.php:149
2016-06-16 01:07:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH/classes/Controller/User.php [ 149 ] in /Users/Desmond/Sites/judge/application/classes/Controller/User.php:149
2016-06-16 01:07:57 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/classes/Controller/User.php(149): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 149, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_User->action_login()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/judge/application/classes/Controller/User.php:149
2016-06-16 01:08:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH/classes/Controller/User.php [ 149 ] in /Users/Desmond/Sites/judge/application/classes/Controller/User.php:149
2016-06-16 01:08:01 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/classes/Controller/User.php(149): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 149, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_User->action_login()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/judge/application/classes/Controller/User.php:149
2016-06-16 01:21:42 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/User.php [ 181 ] in file:line
2016-06-16 01:21:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-16 15:53:02 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /Users/Desmond/Sites/judge/system/classes/Kohana/Session.php:125
2016-06-16 15:53:02 --- DEBUG: #0 /Users/Desmond/Sites/judge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /Users/Desmond/Sites/judge/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(Array, NULL)
#2 /Users/Desmond/Sites/judge/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /Users/Desmond/Sites/judge/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/Desmond/Sites/judge/application/classes/I18n.php(45): Kohana_Auth::instance()
#5 /Users/Desmond/Sites/judge/application/classes/I18n.php(126): I18n::get_user_lang(Array)
#6 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(18): I18n::setup()
#7 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(242): Controller_Base->before()
#8 [internal function]: Controller_Base->execute()
#9 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#13 {main} in /Users/Desmond/Sites/judge/system/classes/Kohana/Session.php:125
2016-06-16 15:53:12 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /Users/Desmond/Sites/judge/system/classes/Kohana/Session.php:125
2016-06-16 15:53:12 --- DEBUG: #0 /Users/Desmond/Sites/judge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /Users/Desmond/Sites/judge/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(Array, NULL)
#2 /Users/Desmond/Sites/judge/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /Users/Desmond/Sites/judge/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/Desmond/Sites/judge/application/classes/I18n.php(45): Kohana_Auth::instance()
#5 /Users/Desmond/Sites/judge/application/classes/I18n.php(126): I18n::get_user_lang(Array)
#6 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(18): I18n::setup()
#7 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(242): Controller_Base->before()
#8 [internal function]: Controller_Base->execute()
#9 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#13 {main} in /Users/Desmond/Sites/judge/system/classes/Kohana/Session.php:125
2016-06-16 17:19:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: native ~ SYSPATH/classes/Kohana/Session.php [ 45 ] in /Users/Desmond/Sites/judge/system/classes/Kohana/Session.php:45
2016-06-16 17:19:11 --- DEBUG: #0 /Users/Desmond/Sites/judge/system/classes/Kohana/Session.php(45): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Desmond/...', 45, Array)
#1 /Users/Desmond/Sites/judge/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#2 /Users/Desmond/Sites/judge/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#3 /Users/Desmond/Sites/judge/application/classes/I18n.php(45): Kohana_Auth::instance()
#4 /Users/Desmond/Sites/judge/application/classes/I18n.php(126): I18n::get_user_lang(Array)
#5 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(18): I18n::setup()
#6 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(242): Controller_Base->before()
#7 [internal function]: Controller_Base->execute()
#8 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#11 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#12 {main} in /Users/Desmond/Sites/judge/system/classes/Kohana/Session.php:45
2016-06-16 17:19:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: native ~ SYSPATH/classes/Kohana/Session.php [ 45 ] in /Users/Desmond/Sites/judge/system/classes/Kohana/Session.php:45
2016-06-16 17:19:13 --- DEBUG: #0 /Users/Desmond/Sites/judge/system/classes/Kohana/Session.php(45): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Desmond/...', 45, Array)
#1 /Users/Desmond/Sites/judge/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#2 /Users/Desmond/Sites/judge/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#3 /Users/Desmond/Sites/judge/application/classes/I18n.php(45): Kohana_Auth::instance()
#4 /Users/Desmond/Sites/judge/application/classes/I18n.php(126): I18n::get_user_lang(Array)
#5 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(18): I18n::setup()
#6 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(242): Controller_Base->before()
#7 [internal function]: Controller_Base->execute()
#8 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#11 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#12 {main} in /Users/Desmond/Sites/judge/system/classes/Kohana/Session.php:45
2016-06-16 18:10:21 --- EMERGENCY: ErrorException [ 8 ]: A session had already been started - ignoring session_start() ~ APPPATH/classes/Controller/User.php [ 143 ] in file:line
2016-06-16 18:10:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A session had a...', '/Users/Desmond/...', 143, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Controller/User.php(143): session_start()
#2 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_User->action_login()
#3 [internal function]: Controller_Base->execute()
#4 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#8 {main} in file:line
2016-06-16 18:10:48 --- EMERGENCY: ErrorException [ 8 ]: A session had already been started - ignoring session_start() ~ APPPATH/classes/Controller/User.php [ 143 ] in file:line
2016-06-16 18:10:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A session had a...', '/Users/Desmond/...', 143, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Controller/User.php(143): session_start()
#2 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_User->action_login()
#3 [internal function]: Controller_Base->execute()
#4 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#8 {main} in file:line
2016-06-16 18:39:41 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/User.php [ 172 ] in file:line
2016-06-16 18:39:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-16 19:58:20 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT count(solution_id) as total FROM `solution` WHERE `user_id` = 'admin' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-16 19:58:20 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT count(so...', false, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Solution.php(197): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Model/User.php(140): Model_Solution::number_of_solution_total_for_user('admin')
#3 /Users/Desmond/Sites/judge/application/classes/Model/User.php(150): Model_User->number_of_solutions()
#4 /Users/Desmond/Sites/judge/application/classes/Controller/User.php(38): Model_User->update_user_solution_stats()
#5 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_User->action_profile()
#6 [internal function]: Controller_Base->execute()
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#11 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-16 20:06:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/Controller/User.php [ 170 ] in /Users/Desmond/Sites/judge/application/classes/Controller/User.php:170
2016-06-16 20:06:01 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/classes/Controller/User.php(170): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 170, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Controller/User.php(157): Controller_User->do_login()
#2 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_User->action_login()
#3 [internal function]: Controller_Base->execute()
#4 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#8 {main} in /Users/Desmond/Sites/judge/application/classes/Controller/User.php:170
2016-06-16 20:11:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/Controller/User.php [ 170 ] in /Users/Desmond/Sites/judge/application/classes/Controller/User.php:170
2016-06-16 20:11:39 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/classes/Controller/User.php(170): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 170, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Controller/User.php(157): Controller_User->do_login()
#2 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_User->action_login()
#3 [internal function]: Controller_Base->execute()
#4 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#8 {main} in /Users/Desmond/Sites/judge/application/classes/Controller/User.php:170
2016-06-16 20:12:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/Controller/User.php [ 170 ] in /Users/Desmond/Sites/judge/application/classes/Controller/User.php:170
2016-06-16 20:12:23 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/classes/Controller/User.php(170): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 170, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Controller/User.php(157): Controller_User->do_login()
#2 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_User->action_login()
#3 [internal function]: Controller_Base->execute()
#4 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#8 {main} in /Users/Desmond/Sites/judge/application/classes/Controller/User.php:170
2016-06-16 20:12:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/Controller/User.php [ 170 ] in /Users/Desmond/Sites/judge/application/classes/Controller/User.php:170
2016-06-16 20:12:40 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/classes/Controller/User.php(170): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 170, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Controller/User.php(157): Controller_User->do_login()
#2 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_User->action_login()
#3 [internal function]: Controller_Base->execute()
#4 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#8 {main} in /Users/Desmond/Sites/judge/application/classes/Controller/User.php:170
2016-06-16 20:18:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/Controller/User.php [ 170 ] in /Users/Desmond/Sites/judge/application/classes/Controller/User.php:170
2016-06-16 20:18:56 --- DEBUG: #0 /Users/Desmond/Sites/judge/application/classes/Controller/User.php(170): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 170, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Controller/User.php(157): Controller_User->do_login()
#2 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_User->action_login()
#3 [internal function]: Controller_Base->execute()
#4 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#8 {main} in /Users/Desmond/Sites/judge/application/classes/Controller/User.php:170