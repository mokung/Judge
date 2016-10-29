<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-06-14 00:36:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test3.html ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-14 00:36:48 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-14 01:15:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: request ~ SYSPATH/classes/Kohana/Request.php [ 75 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:75
2016-06-14 01:15:55 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(75): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 75, Array)
#1 /Users/Desmond/Sites/hustoj/index.php(100): Kohana_Request::factory(true, Array, false)
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:75
2016-06-14 01:15:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: request ~ SYSPATH/classes/Kohana/Request.php [ 75 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:75
2016-06-14 01:15:55 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(75): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 75, Array)
#1 /Users/Desmond/Sites/hustoj/index.php(100): Kohana_Request::factory(true, Array, false)
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:75
2016-06-14 01:19:45 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ SYSPATH/classes/Kohana/Request.php [ 75 ] in file:line
2016-06-14 01:19:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-14 01:19:45 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ SYSPATH/classes/Kohana/Request.php [ 75 ] in file:line
2016-06-14 01:19:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-14 16:04:20 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function status() on a non-object ~ DOCROOT/index.php [ 108 ] in file:line
2016-06-14 16:04:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-14 16:04:20 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function status() on a non-object ~ DOCROOT/index.php [ 108 ] in file:line
2016-06-14 16:04:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-14 16:26:17 --- EMERGENCY: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:26:17 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('login')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('login', NULL)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Sample.php(8): Kohana_View::factory('login')
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Controller.php(84): Controller_Sample->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:26:17 --- EMERGENCY: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:26:17 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('login')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('login', NULL)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Sample.php(8): Kohana_View::factory('login')
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Controller.php(84): Controller_Sample->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:26:23 --- EMERGENCY: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:26:23 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('login')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('login', NULL)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Sample.php(8): Kohana_View::factory('login')
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Controller.php(84): Controller_Sample->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:26:23 --- EMERGENCY: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:26:23 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('login')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('login', NULL)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Sample.php(8): Kohana_View::factory('login')
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Controller.php(84): Controller_Sample->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:28:41 --- EMERGENCY: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:28:41 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('login')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('login', NULL)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Sample.php(8): Kohana_View::factory('login')
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Controller.php(84): Controller_Sample->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:28:41 --- EMERGENCY: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:28:41 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('login')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('login', NULL)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Sample.php(8): Kohana_View::factory('login')
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Controller.php(84): Controller_Sample->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:39:14 --- EMERGENCY: View_Exception [ 0 ]: The requested view sample/post could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:39:14 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('sample/post')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('sample/post', Array)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(102): Kohana_View::factory('sample/post', Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:39:14 --- EMERGENCY: View_Exception [ 0 ]: The requested view sample/post could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:39:14 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('sample/post')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('sample/post', Array)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(102): Kohana_View::factory('sample/post', Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:39:58 --- EMERGENCY: View_Exception [ 0 ]: The requested view sample/post could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:39:58 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('sample/post')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('sample/post', Array)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(102): Kohana_View::factory('sample/post', Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:39:58 --- EMERGENCY: View_Exception [ 0 ]: The requested view sample/post could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:39:58 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('sample/post')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('sample/post', Array)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(102): Kohana_View::factory('sample/post', Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:41:01 --- EMERGENCY: View_Exception [ 0 ]: The requested view sample/post could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:41:01 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('sample/post')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('sample/post', Array)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(102): Kohana_View::factory('sample/post', Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:41:01 --- EMERGENCY: View_Exception [ 0 ]: The requested view sample/post could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:41:01 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('sample/post')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('sample/post', Array)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(102): Kohana_View::factory('sample/post', Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:53:36 --- EMERGENCY: View_Exception [ 0 ]: The requested view sample/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:53:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('sample/index')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('sample/index', Array)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(102): Kohana_View::factory('sample/index', Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:53:36 --- EMERGENCY: View_Exception [ 0 ]: The requested view sample/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:53:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('sample/index')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('sample/index', Array)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(102): Kohana_View::factory('sample/index', Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:55:24 --- EMERGENCY: View_Exception [ 0 ]: The requested view sample/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:55:24 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('sample/index')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('sample/index', Array)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(102): Kohana_View::factory('sample/index', Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:55:24 --- EMERGENCY: View_Exception [ 0 ]: The requested view sample/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:55:24 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('sample/index')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('sample/index', Array)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(102): Kohana_View::factory('sample/index', Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:55:26 --- EMERGENCY: View_Exception [ 0 ]: The requested view sample/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:55:26 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('sample/index')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('sample/index', Array)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(102): Kohana_View::factory('sample/index', Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:55:26 --- EMERGENCY: View_Exception [ 0 ]: The requested view sample/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:55:26 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('sample/index')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('sample/index', Array)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(102): Kohana_View::factory('sample/index', Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:55:30 --- EMERGENCY: View_Exception [ 0 ]: The requested view sample/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:55:30 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('sample/index')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('sample/index', Array)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(102): Kohana_View::factory('sample/index', Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:55:30 --- EMERGENCY: View_Exception [ 0 ]: The requested view sample/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:55:30 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('sample/index')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('sample/index', Array)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(102): Kohana_View::factory('sample/index', Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:57:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view sample/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:57:09 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('sample/index')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('sample/index', Array)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(102): Kohana_View::factory('sample/index', Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:57:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view sample/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:57:09 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('sample/index')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('sample/index', Array)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(102): Kohana_View::factory('sample/index', Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 16:58:36 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL sample/sample/post was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 16:58:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(279): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(250): Controller_Base->missing_action()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 16:59:45 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL sample/sample/post was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 16:59:45 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(279): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(250): Controller_Base->missing_action()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 17:07:36 --- EMERGENCY: View_Exception [ 0 ]: The requested view sample/post could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 17:07:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('sample/post')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('sample/post', Array)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(102): Kohana_View::factory('sample/post', Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 17:07:36 --- EMERGENCY: View_Exception [ 0 ]: The requested view sample/post could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 17:07:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('sample/post')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('sample/post', Array)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(102): Kohana_View::factory('sample/post', Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 17:08:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view sample/post could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 17:08:18 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('sample/post')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('sample/post', Array)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(102): Kohana_View::factory('sample/post', Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 17:08:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view sample/post could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 17:08:18 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(137): Kohana_View->set_filename('sample/post')
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(30): Kohana_View->__construct('sample/post', Array)
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(102): Kohana_View::factory('sample/post', Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php:137
2016-06-14 17:12:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/layout.php [ 8 ] in /Users/Desmond/Sites/hustoj/application/views/layout.php:8
2016-06-14 17:12:24 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/views/layout.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 8, Array)
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(61): include('/Users/Desmond/...')
#2 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Desmond/...', Array)
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(104): Kohana_Response->body(Object(View))
#6 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#7 [internal function]: Controller_Base->execute()
#8 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#9 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#11 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#12 {main} in /Users/Desmond/Sites/hustoj/application/views/layout.php:8
2016-06-14 17:12:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/layout.php [ 8 ] in /Users/Desmond/Sites/hustoj/application/views/layout.php:8
2016-06-14 17:12:24 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/views/layout.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 8, Array)
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(61): include('/Users/Desmond/...')
#2 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Desmond/...', Array)
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(104): Kohana_Response->body(Object(View))
#6 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#7 [internal function]: Controller_Base->execute()
#8 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#9 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#11 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#12 {main} in /Users/Desmond/Sites/hustoj/application/views/layout.php:8
2016-06-14 17:12:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/layout.php [ 8 ] in /Users/Desmond/Sites/hustoj/application/views/layout.php:8
2016-06-14 17:12:47 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/views/layout.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 8, Array)
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(61): include('/Users/Desmond/...')
#2 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Desmond/...', Array)
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(104): Kohana_Response->body(Object(View))
#6 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#7 [internal function]: Controller_Base->execute()
#8 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#9 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#11 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#12 {main} in /Users/Desmond/Sites/hustoj/application/views/layout.php:8
2016-06-14 17:12:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/layout.php [ 8 ] in /Users/Desmond/Sites/hustoj/application/views/layout.php:8
2016-06-14 17:12:47 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/views/layout.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 8, Array)
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(61): include('/Users/Desmond/...')
#2 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Desmond/...', Array)
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(104): Kohana_Response->body(Object(View))
#6 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#7 [internal function]: Controller_Base->execute()
#8 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#9 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#11 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#12 {main} in /Users/Desmond/Sites/hustoj/application/views/layout.php:8
2016-06-14 17:13:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/layout.php [ 8 ] in /Users/Desmond/Sites/hustoj/application/views/layout.php:8
2016-06-14 17:13:17 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/views/layout.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 8, Array)
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(61): include('/Users/Desmond/...')
#2 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Desmond/...', Array)
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(104): Kohana_Response->body(Object(View))
#6 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#7 [internal function]: Controller_Base->execute()
#8 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#9 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#11 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#12 {main} in /Users/Desmond/Sites/hustoj/application/views/layout.php:8
2016-06-14 17:13:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/layout.php [ 8 ] in /Users/Desmond/Sites/hustoj/application/views/layout.php:8
2016-06-14 17:13:17 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/views/layout.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 8, Array)
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(61): include('/Users/Desmond/...')
#2 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Desmond/...', Array)
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(104): Kohana_Response->body(Object(View))
#6 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(261): Controller_Base->after()
#7 [internal function]: Controller_Base->execute()
#8 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#9 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#11 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#12 {main} in /Users/Desmond/Sites/hustoj/application/views/layout.php:8
2016-06-14 18:02:11 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT count(solution_id) as total FROM `solution` WHERE `user_id` = 'admin' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-14 18:02:11 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT count(so...', false, Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Solution.php(197): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Model/User.php(140): Model_Solution::number_of_solution_total_for_user('admin')
#3 /Users/Desmond/Sites/hustoj/application/classes/Model/User.php(150): Model_User->number_of_solutions()
#4 /Users/Desmond/Sites/hustoj/application/classes/Controller/User.php(38): Model_User->update_user_solution_stats()
#5 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(254): Controller_User->action_profile()
#6 [internal function]: Controller_Base->execute()
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#11 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-14 18:02:11 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT count(solution_id) as total FROM `solution` WHERE `user_id` = 'admin' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-14 18:02:11 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT count(so...', false, Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Solution.php(197): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Model/User.php(140): Model_Solution::number_of_solution_total_for_user('admin')
#3 /Users/Desmond/Sites/hustoj/application/classes/Model/User.php(150): Model_User->number_of_solutions()
#4 /Users/Desmond/Sites/hustoj/application/classes/Controller/User.php(38): Model_User->update_user_solution_stats()
#5 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(254): Controller_User->action_profile()
#6 [internal function]: Controller_Base->execute()
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#11 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-14 18:13:07 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL sample/string(12) was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:13:07 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(279): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(250): Controller_Base->missing_action()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:13:09 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL sample/string(12) was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:13:09 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(279): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(250): Controller_Base->missing_action()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:13:16 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL sample/string(12) was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:13:16 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(279): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(250): Controller_Base->missing_action()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:13:27 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL string(12) was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php:79
2016-06-14 18:13:27 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#3 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#4 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php:79
2016-06-14 18:13:37 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL string(12) was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php:79
2016-06-14 18:13:37 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#3 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#4 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php:79
2016-06-14 18:13:39 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL user/string(12) was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:13:39 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(279): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(250): Controller_Base->missing_action()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:14:01 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL user/string(12) was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:14:01 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(279): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(250): Controller_Base->missing_action()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:15:39 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL sample/string(12) was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:15:39 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(279): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(250): Controller_Base->missing_action()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:16:19 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL sample/string(12) was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:16:19 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(279): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(250): Controller_Base->missing_action()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:16:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL sample/string(12) was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:16:29 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(279): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(250): Controller_Base->missing_action()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:17:12 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL problem/string(12) was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:17:12 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(279): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(250): Controller_Base->missing_action()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:20:35 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL sample/string(12) was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:20:35 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(279): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(250): Controller_Base->missing_action()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:20:37 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL sample/string(12) was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:20:37 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(279): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(250): Controller_Base->missing_action()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:20:53 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL problem/string(12) was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:20:53 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(279): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(250): Controller_Base->missing_action()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:23:08 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL sample/NULL/~Desmond/hustoj/css/themes/bootstrap.css was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:23:08 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(279): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(250): Controller_Base->missing_action()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:23:10 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL sample/NULL/~Desmond/hustoj/css/themes/bootstrap.css was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:23:10 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(279): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(250): Controller_Base->missing_action()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:28:07 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Model_User could not be converted to string ~ MODPATH/auth/classes/Kohana/Auth.php [ 164 ] in /Users/Desmond/Sites/hustoj/modules/auth/classes/Kohana/Auth.php:164
2016-06-14 18:28:07 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/auth/classes/Kohana/Auth.php(164): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/Desmond/...', 164, Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Auth/Hoj.php(103): Kohana_Auth->complete_login(Object(Model_User))
#2 /Users/Desmond/Sites/hustoj/application/classes/Auth/Hoj.php(21): Auth_Hoj->complete_login(Object(Model_User))
#3 /Users/Desmond/Sites/hustoj/modules/auth/classes/Kohana/Auth.php(92): Auth_Hoj->_login('admin', 'aaa111', true)
#4 /Users/Desmond/Sites/hustoj/application/classes/Controller/Sample.php(44): Kohana_Auth->login('admin', 'aaa111', true)
#5 /Users/Desmond/Sites/hustoj/application/classes/Controller/Sample.php(22): Controller_Sample->do_login()
#6 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(254): Controller_Sample->action_index()
#7 [internal function]: Controller_Base->execute()
#8 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#9 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#11 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#12 {main} in /Users/Desmond/Sites/hustoj/modules/auth/classes/Kohana/Auth.php:164
2016-06-14 18:28:07 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Model_User could not be converted to string ~ MODPATH/auth/classes/Kohana/Auth.php [ 164 ] in /Users/Desmond/Sites/hustoj/modules/auth/classes/Kohana/Auth.php:164
2016-06-14 18:28:07 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/auth/classes/Kohana/Auth.php(164): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/Desmond/...', 164, Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Auth/Hoj.php(103): Kohana_Auth->complete_login(Object(Model_User))
#2 /Users/Desmond/Sites/hustoj/application/classes/Auth/Hoj.php(21): Auth_Hoj->complete_login(Object(Model_User))
#3 /Users/Desmond/Sites/hustoj/modules/auth/classes/Kohana/Auth.php(92): Auth_Hoj->_login('admin', 'aaa111', true)
#4 /Users/Desmond/Sites/hustoj/application/classes/Controller/Sample.php(44): Kohana_Auth->login('admin', 'aaa111', true)
#5 /Users/Desmond/Sites/hustoj/application/classes/Controller/Sample.php(22): Controller_Sample->do_login()
#6 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(254): Controller_Sample->action_index()
#7 [internal function]: Controller_Base->execute()
#8 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#9 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#11 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#12 {main} in /Users/Desmond/Sites/hustoj/modules/auth/classes/Kohana/Auth.php:164
2016-06-14 18:33:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Problem::$_session ~ APPPATH/classes/Controller/Problem.php [ 14 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Problem.php:14
2016-06-14 18:33:43 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Problem.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Desmond/...', 14, Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(254): Controller_Problem->action_list()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Problem.php:14
2016-06-14 18:33:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Problem::$_session ~ APPPATH/classes/Controller/Problem.php [ 14 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Problem.php:14
2016-06-14 18:33:43 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Problem.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Desmond/...', 14, Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(254): Controller_Problem->action_list()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Problem.php:14
2016-06-14 18:34:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Problem::$_config ~ APPPATH/classes/Controller/Problem.php [ 14 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Problem.php:14
2016-06-14 18:34:12 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Problem.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Desmond/...', 14, Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(254): Controller_Problem->action_list()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Problem.php:14
2016-06-14 18:34:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Problem::$_config ~ APPPATH/classes/Controller/Problem.php [ 14 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Problem.php:14
2016-06-14 18:34:12 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Problem.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Desmond/...', 14, Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(254): Controller_Problem->action_list()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Problem.php:14
2016-06-14 18:35:08 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL sample/NULL/~Desmond/hustoj/css/themes/bootstrap.css was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:35:08 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(279): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(250): Controller_Base->missing_action()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:35:18 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL problem/NULL/~Desmond/hustoj/css/themes/bootstrap.css was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:35:18 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(279): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(250): Controller_Base->missing_action()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:35:25 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL sample/NULL/~Desmond/hustoj/css/themes/bootstrap.css was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:35:25 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(279): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(250): Controller_Base->missing_action()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:41:14 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL sample/string(9) was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 18:41:14 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(279): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(250): Controller_Base->missing_action()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 20:34:39 --- ERROR: ErrorException [ 8 ]: Use of undefined constant MCRYPT_RIJNDAEL_128 - assumed 'MCRYPT_RIJNDAEL_128' ~ SYSPATH/config/encrypt.php [ 13 ] in file:line
2016-06-14 20:34:50 --- ERROR: ErrorException [ 8 ]: Use of undefined constant MCRYPT_RIJNDAEL_128 - assumed 'MCRYPT_RIJNDAEL_128' ~ SYSPATH/config/encrypt.php [ 13 ] in file:line
2016-06-14 23:42:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL sample/string(20) was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 23:42:40 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(279): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(250): Controller_Base->missing_action()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 23:43:38 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL problem/string(20) was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 23:43:38 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(279): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(250): Controller_Base->missing_action()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 23:44:18 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL sample/string(20) was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279
2016-06-14 23:44:18 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(279): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(250): Controller_Base->missing_action()
#2 [internal function]: Controller_Base->execute()
#3 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sample))
#4 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Desmond/Sites/hustoj/index.php(104): Kohana_Request->execute()
#7 {main} in /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php:279