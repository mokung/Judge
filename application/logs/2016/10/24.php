<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-24 11:41:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_id_array ~ APPPATH/classes/Model/Situation.php [ 57 ] in /var/www/html/judge/application/classes/Model/Situation.php:57
2016-10-24 11:41:36 --- DEBUG: #0 /var/www/html/judge/application/classes/Model/Situation.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/j...', 57, Array)
#1 /var/www/html/judge/application/classes/Controller/Situation.php(22): Model_Situation::get_oneday_userid(Array)
#2 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_Situation->action_inject()
#3 [internal function]: Controller_Base->execute()
#4 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#5 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#8 {main} in /var/www/html/judge/application/classes/Model/Situation.php:57
2016-10-24 11:42:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_id_array ~ APPPATH/classes/Model/Situation.php [ 59 ] in /var/www/html/judge/application/classes/Model/Situation.php:59
2016-10-24 11:42:18 --- DEBUG: #0 /var/www/html/judge/application/classes/Model/Situation.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/j...', 59, Array)
#1 /var/www/html/judge/application/classes/Controller/Situation.php(22): Model_Situation::get_oneday_userid(Array)
#2 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_Situation->action_inject()
#3 [internal function]: Controller_Base->execute()
#4 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#5 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#8 {main} in /var/www/html/judge/application/classes/Model/Situation.php:59
2016-10-24 11:53:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: solution ~ APPPATH/views/situation/test.php [ 24 ] in /var/www/html/judge/application/views/situation/test.php:24
2016-10-24 11:53:44 --- DEBUG: #0 /var/www/html/judge/application/views/situation/test.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/j...', 24, Array)
#1 /var/www/html/judge/system/classes/Kohana/View.php(62): include('/var/www/html/j...')
#2 /var/www/html/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/j...', Array)
#3 /var/www/html/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/html/judge/application/views/layout.php(48): Kohana_View->__toString()
#5 /var/www/html/judge/system/classes/Kohana/View.php(62): include('/var/www/html/j...')
#6 /var/www/html/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/j...', Array)
#7 /var/www/html/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#8 /var/www/html/judge/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /var/www/html/judge/application/classes/Controller/Base.php(103): Kohana_Response->body(Object(View))
#10 /var/www/html/judge/application/classes/Controller/Base.php(259): Controller_Base->after()
#11 [internal function]: Controller_Base->execute()
#12 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#13 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#16 {main} in /var/www/html/judge/application/views/situation/test.php:24
2016-10-24 11:54:38 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Model/Situation.php [ 57 ] in /var/www/html/judge/application/classes/Model/Situation.php:57
2016-10-24 11:54:38 --- DEBUG: #0 /var/www/html/judge/application/classes/Model/Situation.php(57): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/html/j...', 57, Array)
#1 /var/www/html/judge/application/classes/Controller/Situation.php(22): Model_Situation::get_oneday_userid(Array)
#2 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_Situation->action_inject()
#3 [internal function]: Controller_Base->execute()
#4 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#5 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#8 {main} in /var/www/html/judge/application/classes/Model/Situation.php:57
2016-10-24 12:01:38 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/situation/test.php [ 29 ] in /var/www/html/judge/application/views/situation/test.php:29
2016-10-24 12:01:38 --- DEBUG: #0 /var/www/html/judge/application/views/situation/test.php(29): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/html/j...', 29, Array)
#1 /var/www/html/judge/system/classes/Kohana/View.php(62): include('/var/www/html/j...')
#2 /var/www/html/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/j...', Array)
#3 /var/www/html/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/html/judge/application/views/layout.php(48): Kohana_View->__toString()
#5 /var/www/html/judge/system/classes/Kohana/View.php(62): include('/var/www/html/j...')
#6 /var/www/html/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/j...', Array)
#7 /var/www/html/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#8 /var/www/html/judge/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /var/www/html/judge/application/classes/Controller/Base.php(103): Kohana_Response->body(Object(View))
#10 /var/www/html/judge/application/classes/Controller/Base.php(259): Controller_Base->after()
#11 [internal function]: Controller_Base->execute()
#12 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#13 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#16 {main} in /var/www/html/judge/application/views/situation/test.php:29
2016-10-24 12:14:43 --- EMERGENCY: ErrorException [ 2 ]: date() expects at least 1 parameter, 0 given ~ APPPATH/classes/Controller/Situation.php [ 18 ] in file:line
2016-10-24 12:14:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', '/var/www/html/j...', 18, Array)
#1 /var/www/html/judge/application/classes/Controller/Situation.php(18): date()
#2 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_Situation->action_inject()
#3 [internal function]: Controller_Base->execute()
#4 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#5 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#8 {main} in file:line
2016-10-24 12:15:49 --- EMERGENCY: ErrorException [ 2 ]: date() expects at least 1 parameter, 0 given ~ APPPATH/classes/Controller/Situation.php [ 18 ] in file:line
2016-10-24 12:15:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', '/var/www/html/j...', 18, Array)
#1 /var/www/html/judge/application/classes/Controller/Situation.php(18): date()
#2 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_Situation->action_inject()
#3 [internal function]: Controller_Base->execute()
#4 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#5 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#8 {main} in file:line
2016-10-24 12:16:35 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'in_date' in 'where clause' [ SELECT * FROM `users_status` WHERE `in_date` LIKE '%2016-10-24%' ORDER BY `user_id` DESC LIMIT 100 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-10-24 12:16:35 --- DEBUG: #0 /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Situation', Array)
#1 /var/www/html/judge/application/classes/Model/Situation.php(91): Kohana_Database_Query->execute()
#2 /var/www/html/judge/application/classes/Controller/Situation.php(18): Model_Situation::search('2016-10-24', 'in_date', Array, true)
#3 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_Situation->action_inject()
#4 [internal function]: Controller_Base->execute()
#5 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#6 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#9 {main} in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-10-24 12:17:08 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Solution::search() ~ APPPATH/classes/Controller/Situation.php [ 18 ] in file:line
2016-10-24 12:17:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-24 12:18:00 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant sub - assumed 'sub' ~ APPPATH/classes/Model/Situation.php [ 58 ] in /var/www/html/judge/application/classes/Model/Situation.php:58
2016-10-24 12:18:00 --- DEBUG: #0 /var/www/html/judge/application/classes/Model/Situation.php(58): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/j...', 58, Array)
#1 /var/www/html/judge/application/classes/Controller/Situation.php(28): Model_Situation::get_oneday_userid(Array)
#2 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_Situation->action_inject()
#3 [internal function]: Controller_Base->execute()
#4 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#5 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#8 {main} in /var/www/html/judge/application/classes/Model/Situation.php:58
2016-10-24 12:31:09 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant sub - assumed 'sub' ~ APPPATH/classes/Model/Situation.php [ 58 ] in /var/www/html/judge/application/classes/Model/Situation.php:58
2016-10-24 12:31:09 --- DEBUG: #0 /var/www/html/judge/application/classes/Model/Situation.php(58): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/j...', 58, Array)
#1 /var/www/html/judge/application/classes/Controller/Situation.php(28): Model_Situation::get_oneday_userid(Array)
#2 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_Situation->action_inject()
#3 [internal function]: Controller_Base->execute()
#4 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#5 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#8 {main} in /var/www/html/judge/application/classes/Model/Situation.php:58
2016-10-24 12:31:50 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/situation/test.php [ 39 ] in /var/www/html/judge/application/views/situation/test.php:39
2016-10-24 12:31:50 --- DEBUG: #0 /var/www/html/judge/application/views/situation/test.php(39): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/html/j...', 39, Array)
#1 /var/www/html/judge/system/classes/Kohana/View.php(62): include('/var/www/html/j...')
#2 /var/www/html/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/j...', Array)
#3 /var/www/html/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/html/judge/application/views/layout.php(48): Kohana_View->__toString()
#5 /var/www/html/judge/system/classes/Kohana/View.php(62): include('/var/www/html/j...')
#6 /var/www/html/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/j...', Array)
#7 /var/www/html/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#8 /var/www/html/judge/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /var/www/html/judge/application/classes/Controller/Base.php(103): Kohana_Response->body(Object(View))
#10 /var/www/html/judge/application/classes/Controller/Base.php(259): Controller_Base->after()
#11 [internal function]: Controller_Base->execute()
#12 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#13 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#16 {main} in /var/www/html/judge/application/views/situation/test.php:39
2016-10-24 12:32:10 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/situation/test.php [ 39 ] in /var/www/html/judge/application/views/situation/test.php:39
2016-10-24 12:32:10 --- DEBUG: #0 /var/www/html/judge/application/views/situation/test.php(39): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/html/j...', 39, Array)
#1 /var/www/html/judge/system/classes/Kohana/View.php(62): include('/var/www/html/j...')
#2 /var/www/html/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/j...', Array)
#3 /var/www/html/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/html/judge/application/views/layout.php(48): Kohana_View->__toString()
#5 /var/www/html/judge/system/classes/Kohana/View.php(62): include('/var/www/html/j...')
#6 /var/www/html/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/j...', Array)
#7 /var/www/html/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#8 /var/www/html/judge/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /var/www/html/judge/application/classes/Controller/Base.php(103): Kohana_Response->body(Object(View))
#10 /var/www/html/judge/application/classes/Controller/Base.php(259): Controller_Base->after()
#11 [internal function]: Controller_Base->execute()
#12 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#13 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#16 {main} in /var/www/html/judge/application/views/situation/test.php:39
2016-10-24 12:32:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH) ~ APPPATH/views/situation/test.php [ 51 ] in file:line
2016-10-24 12:32:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-24 12:32:33 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Model_Situation could not be converted to string ~ APPPATH/views/situation/test.php [ 42 ] in /var/www/html/judge/application/views/situation/test.php:42
2016-10-24 12:32:33 --- DEBUG: #0 /var/www/html/judge/application/views/situation/test.php(42): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/html/j...', 42, Array)
#1 /var/www/html/judge/system/classes/Kohana/View.php(62): include('/var/www/html/j...')
#2 /var/www/html/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/j...', Array)
#3 /var/www/html/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/html/judge/application/views/layout.php(48): Kohana_View->__toString()
#5 /var/www/html/judge/system/classes/Kohana/View.php(62): include('/var/www/html/j...')
#6 /var/www/html/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/j...', Array)
#7 /var/www/html/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#8 /var/www/html/judge/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /var/www/html/judge/application/classes/Controller/Base.php(103): Kohana_Response->body(Object(View))
#10 /var/www/html/judge/application/classes/Controller/Base.php(259): Controller_Base->after()
#11 [internal function]: Controller_Base->execute()
#12 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#13 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#16 {main} in /var/www/html/judge/application/views/situation/test.php:42
2016-10-24 12:32:51 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Model_Situation could not be converted to string ~ APPPATH/views/situation/test.php [ 42 ] in /var/www/html/judge/application/views/situation/test.php:42
2016-10-24 12:32:51 --- DEBUG: #0 /var/www/html/judge/application/views/situation/test.php(42): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/html/j...', 42, Array)
#1 /var/www/html/judge/system/classes/Kohana/View.php(62): include('/var/www/html/j...')
#2 /var/www/html/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/j...', Array)
#3 /var/www/html/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/html/judge/application/views/layout.php(48): Kohana_View->__toString()
#5 /var/www/html/judge/system/classes/Kohana/View.php(62): include('/var/www/html/j...')
#6 /var/www/html/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/j...', Array)
#7 /var/www/html/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#8 /var/www/html/judge/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /var/www/html/judge/application/classes/Controller/Base.php(103): Kohana_Response->body(Object(View))
#10 /var/www/html/judge/application/classes/Controller/Base.php(259): Controller_Base->after()
#11 [internal function]: Controller_Base->execute()
#12 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#13 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#16 {main} in /var/www/html/judge/application/views/situation/test.php:42
2016-10-24 12:33:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/situation/test.php [ 42 ] in file:line
2016-10-24 12:33:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-24 12:33:09 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Model_Situation could not be converted to string ~ APPPATH/views/situation/test.php [ 42 ] in /var/www/html/judge/application/views/situation/test.php:42
2016-10-24 12:33:09 --- DEBUG: #0 /var/www/html/judge/application/views/situation/test.php(42): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/html/j...', 42, Array)
#1 /var/www/html/judge/system/classes/Kohana/View.php(62): include('/var/www/html/j...')
#2 /var/www/html/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/j...', Array)
#3 /var/www/html/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/html/judge/application/views/layout.php(48): Kohana_View->__toString()
#5 /var/www/html/judge/system/classes/Kohana/View.php(62): include('/var/www/html/j...')
#6 /var/www/html/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/j...', Array)
#7 /var/www/html/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#8 /var/www/html/judge/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /var/www/html/judge/application/classes/Controller/Base.php(103): Kohana_Response->body(Object(View))
#10 /var/www/html/judge/application/classes/Controller/Base.php(259): Controller_Base->after()
#11 [internal function]: Controller_Base->execute()
#12 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#13 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#16 {main} in /var/www/html/judge/application/views/situation/test.php:42
2016-10-24 12:48:26 --- EMERGENCY: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, string given ~ APPPATH/classes/Model/Situation.php [ 58 ] in file:line
2016-10-24 12:48:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', '/var/www/html/j...', 58, Array)
#1 /var/www/html/judge/application/classes/Model/Situation.php(58): array_push('', 'yibo')
#2 /var/www/html/judge/application/classes/Controller/Situation.php(28): Model_Situation::get_oneday_userid(Array)
#3 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_Situation->action_inject()
#4 [internal function]: Controller_Base->execute()
#5 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#6 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#9 {main} in file:line
2016-10-24 12:49:29 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/situation/test.php [ 42 ] in /var/www/html/judge/application/views/situation/test.php:42
2016-10-24 12:49:29 --- DEBUG: #0 /var/www/html/judge/application/views/situation/test.php(42): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/html/j...', 42, Array)
#1 /var/www/html/judge/system/classes/Kohana/View.php(62): include('/var/www/html/j...')
#2 /var/www/html/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/j...', Array)
#3 /var/www/html/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/html/judge/application/views/layout.php(48): Kohana_View->__toString()
#5 /var/www/html/judge/system/classes/Kohana/View.php(62): include('/var/www/html/j...')
#6 /var/www/html/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/j...', Array)
#7 /var/www/html/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#8 /var/www/html/judge/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /var/www/html/judge/application/classes/Controller/Base.php(103): Kohana_Response->body(Object(View))
#10 /var/www/html/judge/application/classes/Controller/Base.php(259): Controller_Base->after()
#11 [internal function]: Controller_Base->execute()
#12 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#13 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#16 {main} in /var/www/html/judge/application/views/situation/test.php:42
2016-10-24 12:49:50 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/situation/test.php [ 42 ] in /var/www/html/judge/application/views/situation/test.php:42
2016-10-24 12:49:50 --- DEBUG: #0 /var/www/html/judge/application/views/situation/test.php(42): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/html/j...', 42, Array)
#1 /var/www/html/judge/system/classes/Kohana/View.php(62): include('/var/www/html/j...')
#2 /var/www/html/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/j...', Array)
#3 /var/www/html/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/html/judge/application/views/layout.php(48): Kohana_View->__toString()
#5 /var/www/html/judge/system/classes/Kohana/View.php(62): include('/var/www/html/j...')
#6 /var/www/html/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/j...', Array)
#7 /var/www/html/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#8 /var/www/html/judge/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /var/www/html/judge/application/classes/Controller/Base.php(103): Kohana_Response->body(Object(View))
#10 /var/www/html/judge/application/classes/Controller/Base.php(259): Controller_Base->after()
#11 [internal function]: Controller_Base->execute()
#12 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#13 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#16 {main} in /var/www/html/judge/application/views/situation/test.php:42
2016-10-24 12:49:51 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/situation/test.php [ 42 ] in /var/www/html/judge/application/views/situation/test.php:42
2016-10-24 12:49:51 --- DEBUG: #0 /var/www/html/judge/application/views/situation/test.php(42): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/html/j...', 42, Array)
#1 /var/www/html/judge/system/classes/Kohana/View.php(62): include('/var/www/html/j...')
#2 /var/www/html/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/j...', Array)
#3 /var/www/html/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/html/judge/application/views/layout.php(48): Kohana_View->__toString()
#5 /var/www/html/judge/system/classes/Kohana/View.php(62): include('/var/www/html/j...')
#6 /var/www/html/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/j...', Array)
#7 /var/www/html/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#8 /var/www/html/judge/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /var/www/html/judge/application/classes/Controller/Base.php(103): Kohana_Response->body(Object(View))
#10 /var/www/html/judge/application/classes/Controller/Base.php(259): Controller_Base->after()
#11 [internal function]: Controller_Base->execute()
#12 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#13 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#16 {main} in /var/www/html/judge/application/views/situation/test.php:42
2016-10-24 12:51:24 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Situation.php [ 28 ] in /var/www/html/judge/application/classes/Controller/Situation.php:28
2016-10-24 12:51:24 --- DEBUG: #0 /var/www/html/judge/application/classes/Controller/Situation.php(28): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/html/j...', 28, Array)
#1 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_Situation->action_inject()
#2 [internal function]: Controller_Base->execute()
#3 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#4 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#7 {main} in /var/www/html/judge/application/classes/Controller/Situation.php:28
2016-10-24 12:51:47 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Model/Situation.php [ 62 ] in /var/www/html/judge/application/classes/Model/Situation.php:62
2016-10-24 12:51:47 --- DEBUG: #0 /var/www/html/judge/application/classes/Model/Situation.php(62): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/html/j...', 62, Array)
#1 /var/www/html/judge/application/classes/Controller/Situation.php(28): Model_Situation::get_oneday_userid(Array)
#2 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_Situation->action_inject()
#3 [internal function]: Controller_Base->execute()
#4 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#5 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#8 {main} in /var/www/html/judge/application/classes/Model/Situation.php:62
2016-10-24 12:57:34 --- EMERGENCY: ErrorException [ 2 ]: array_unique() expects parameter 1 to be array, string given ~ APPPATH/classes/Model/Situation.php [ 55 ] in file:line
2016-10-24 12:57:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_unique() ...', '/var/www/html/j...', 55, Array)
#1 /var/www/html/judge/application/classes/Model/Situation.php(55): array_unique('')
#2 /var/www/html/judge/application/classes/Controller/Situation.php(28): Model_Situation::get_oneday_userid(Array)
#3 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_Situation->action_inject()
#4 [internal function]: Controller_Base->execute()
#5 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#6 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#9 {main} in file:line
2016-10-24 13:16:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Situation.php [ 34 ] in file:line
2016-10-24 13:16:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-24 13:18:21 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/situation/test.php [ 39 ] in /var/www/html/judge/application/views/situation/test.php:39
2016-10-24 13:18:21 --- DEBUG: #0 /var/www/html/judge/application/views/situation/test.php(39): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/html/j...', 39, Array)
#1 /var/www/html/judge/system/classes/Kohana/View.php(62): include('/var/www/html/j...')
#2 /var/www/html/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/j...', Array)
#3 /var/www/html/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/html/judge/application/views/layout.php(48): Kohana_View->__toString()
#5 /var/www/html/judge/system/classes/Kohana/View.php(62): include('/var/www/html/j...')
#6 /var/www/html/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/j...', Array)
#7 /var/www/html/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#8 /var/www/html/judge/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /var/www/html/judge/application/classes/Controller/Base.php(103): Kohana_Response->body(Object(View))
#10 /var/www/html/judge/application/classes/Controller/Base.php(259): Controller_Base->after()
#11 [internal function]: Controller_Base->execute()
#12 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Situation))
#13 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#16 {main} in /var/www/html/judge/application/views/situation/test.php:39
2016-10-24 14:19:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/classes/Model/Situation.php [ 56 ] in file:line
2016-10-24 14:19:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-24 14:20:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Model/Situation.php [ 73 ] in file:line
2016-10-24 14:20:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-24 14:22:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/Model/Situation.php [ 56 ] in file:line
2016-10-24 14:22:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-24 14:22:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Model/Situation.php [ 73 ] in file:line
2016-10-24 14:22:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-24 14:31:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',', expecting '(' ~ APPPATH/classes/Model/Situation.php [ 76 ] in file:line
2016-10-24 14:31:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-24 14:43:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',', expecting '(' ~ APPPATH/classes/Model/Situation.php [ 78 ] in file:line
2016-10-24 14:43:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-24 14:43:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',', expecting '(' ~ APPPATH/classes/Model/Situation.php [ 78 ] in file:line
2016-10-24 14:43:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-24 14:43:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',', expecting '(' ~ APPPATH/classes/Model/Situation.php [ 78 ] in file:line
2016-10-24 14:43:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-24 14:44:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/classes/Model/Situation.php [ 78 ] in file:line
2016-10-24 14:44:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-24 14:45:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/classes/Model/Situation.php [ 78 ] in file:line
2016-10-24 14:45:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-24 14:55:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/classes/Model/Situation.php [ 78 ] in file:line
2016-10-24 14:55:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-24 15:44:58 --- EMERGENCY: ErrorException [ 1 ]: Class Model_Situation contains 2 abstract methods and must therefore be declared abstract or implement the remaining methods (Model_Base::initial_data, Model_Base::validate) ~ APPPATH/classes/Model/Situation.php [ 80 ] in file:line
2016-10-24 15:44:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-24 15:49:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/classes/Model/Situation.php [ 78 ] in file:line
2016-10-24 15:49:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-24 15:50:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '""' (T_CONSTANT_ENCAPSED_STRING), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/Model/Situation.php [ 78 ] in file:line
2016-10-24 15:50:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-24 15:50:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '""' (T_CONSTANT_ENCAPSED_STRING), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/Model/Situation.php [ 78 ] in file:line
2016-10-24 15:50:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-24 23:43:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',', expecting '(' ~ APPPATH/classes/Model/Situation.php [ 76 ] in file:line
2016-10-24 23:43:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line