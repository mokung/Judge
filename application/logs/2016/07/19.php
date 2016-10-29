<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-19 01:30:58 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/index/rescore could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/OnlineJudge/system/classes/Kohana/View.php:145
2016-07-19 01:30:58 --- DEBUG: #0 /home/OnlineJudge/system/classes/Kohana/View.php(145): Kohana_View->set_filename('admin/index/res...')
#1 /home/OnlineJudge/system/classes/Kohana/View.php(30): Kohana_View->__construct('admin/index/res...', Array)
#2 /home/OnlineJudge/application/classes/Controller/Base.php(101): Kohana_View::factory('admin/index/res...', Array)
#3 /home/OnlineJudge/application/classes/Controller/Base.php(259): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/system/classes/Kohana/View.php:145
2016-07-19 11:53:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Admin/Index.php [ 43 ] in file:line
2016-07-19 11:53:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-19 11:54:21 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_Base::find(), called in /home/OnlineJudge/application/classes/Controller/Admin/Index.php on line 40 and defined ~ APPPATH/classes/Model/Base.php [ 101 ] in /home/OnlineJudge/application/classes/Model/Base.php:101
2016-07-19 11:54:21 --- DEBUG: #0 /home/OnlineJudge/application/classes/Model/Base.php(101): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/OnlineJud...', 101, Array)
#1 /home/OnlineJudge/application/classes/Controller/Admin/Index.php(40): Model_Base::find()
#2 /home/OnlineJudge/application/classes/Controller/Base.php(253): Controller_Admin_Index->action_rescore()
#3 [internal function]: Controller_Base->execute()
#4 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#7 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#8 {main} in /home/OnlineJudge/application/classes/Model/Base.php:101
2016-07-19 12:08:28 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Model_User::get_all_users() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Admin/Index.php [ 40 ] in /home/OnlineJudge/application/classes/Controller/Admin/Index.php:40
2016-07-19 12:08:28 --- DEBUG: #0 /home/OnlineJudge/application/classes/Controller/Admin/Index.php(40): Kohana_Core::error_handler(2048, 'Non-static meth...', '/home/OnlineJud...', 40, Array)
#1 /home/OnlineJudge/application/classes/Controller/Base.php(253): Controller_Admin_Index->action_rescore()
#2 [internal function]: Controller_Base->execute()
#3 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#6 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#7 {main} in /home/OnlineJudge/application/classes/Controller/Admin/Index.php:40
2016-07-19 12:10:14 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Model_User::get_all_users() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Admin/Index.php [ 40 ] in /home/OnlineJudge/application/classes/Controller/Admin/Index.php:40
2016-07-19 12:10:14 --- DEBUG: #0 /home/OnlineJudge/application/classes/Controller/Admin/Index.php(40): Kohana_Core::error_handler(2048, 'Non-static meth...', '/home/OnlineJud...', 40, Array)
#1 /home/OnlineJudge/application/classes/Controller/Base.php(253): Controller_Admin_Index->action_rescore()
#2 [internal function]: Controller_Base->execute()
#3 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#6 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#7 {main} in /home/OnlineJudge/application/classes/Controller/Admin/Index.php:40
2016-07-19 13:32:06 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Admin/Index.php [ 44 ] in /home/OnlineJudge/application/classes/Controller/Admin/Index.php:44
2016-07-19 13:32:06 --- DEBUG: #0 /home/OnlineJudge/application/classes/Controller/Admin/Index.php(44): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/OnlineJud...', 44, Array)
#1 /home/OnlineJudge/application/classes/Controller/Base.php(253): Controller_Admin_Index->action_rescore()
#2 [internal function]: Controller_Base->execute()
#3 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#6 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#7 {main} in /home/OnlineJudge/application/classes/Controller/Admin/Index.php:44
2016-07-19 13:41:55 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/Model/Solution.php [ 190 ] in file:line
2016-07-19 13:41:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-19 13:46:37 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/Model/User.php [ 149 ] in file:line
2016-07-19 13:46:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-19 13:47:57 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/Model/User.php [ 150 ] in file:line
2016-07-19 13:47:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-19 14:02:51 --- EMERGENCY: ErrorException [ 8 ]: Object of class Model_Solution could not be converted to int ~ APPPATH/classes/Controller/Admin/Index.php [ 45 ] in /home/OnlineJudge/application/classes/Controller/Admin/Index.php:45
2016-07-19 14:02:51 --- DEBUG: #0 /home/OnlineJudge/application/classes/Controller/Admin/Index.php(45): Kohana_Core::error_handler(8, 'Object of class...', '/home/OnlineJud...', 45, Array)
#1 /home/OnlineJudge/application/classes/Controller/Base.php(253): Controller_Admin_Index->action_rescore()
#2 [internal function]: Controller_Base->execute()
#3 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#6 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#7 {main} in /home/OnlineJudge/application/classes/Controller/Admin/Index.php:45
2016-07-19 14:24:51 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'DISTINCT problem_id' in 'field list' [ SELECT `DISTINCT problem_id` FROM `solution` WHERE `user_id` = 'spidermandl' AND `result` = 4 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-07-19 14:24:51 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `DISTINC...', 'Model_Solution', Array)
#1 /home/OnlineJudge/application/classes/Model/Solution.php(188): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Model/User.php(146): Model_Solution::ids_of_problem_accept_for_user('spidermandl')
#3 /home/OnlineJudge/application/classes/Controller/Admin/Index.php(42): Model_User->ids_of_problem_accept()
#4 /home/OnlineJudge/application/classes/Controller/Base.php(253): Controller_Admin_Index->action_rescore()
#5 [internal function]: Controller_Base->execute()
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#7 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#10 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251