<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-06-12 00:49:57 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 00:49:57 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 00:49:57 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 00:49:57 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 00:52:05 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:52:05 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:55:36 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL ~Desmond/hustoj was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php:79
2016-06-12 00:55:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#3 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#4 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php:79
2016-06-12 00:55:39 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL ~Desmond/hustoj was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php:79
2016-06-12 00:55:39 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#3 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#4 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php:79
2016-06-12 00:55:53 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL ~Desmond/hustoj/index was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php:79
2016-06-12 00:55:53 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#3 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#4 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php:79
2016-06-12 00:55:57 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL ~Desmond/hustoj was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php:79
2016-06-12 00:55:57 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#3 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#4 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php:79
2016-06-12 00:56:03 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ~Desmond/hustoj/index.php ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:03 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/bootstrap-glyphicons.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.9.1.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/code/prettify.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui-lightness/jquery-ui-1.10.3.custom.min.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/themes/bootstrap.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/page.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/nprogress.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/code/prettify.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bootstrap.min.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/turbolinks.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.turbolinks.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/nprogress.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/respond.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.html5-placeholder-shim.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/site.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.bs.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:25 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:26 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:26 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.9.1.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/bootstrap-glyphicons.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui-lightness/jquery-ui-1.10.3.custom.min.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/themes/bootstrap.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/code/prettify.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/code/prettify.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/nprogress.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/turbolinks.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/page.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bootstrap.min.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/nprogress.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.turbolinks.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/site.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/respond.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.html5-placeholder-shim.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.bs.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:29 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:30 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 00:56:30 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 00:56:30 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 00:56:30 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 00:56:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/themes/bootstrap.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/bootstrap-glyphicons.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.9.1.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/code/prettify.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui-lightness/jquery-ui-1.10.3.custom.min.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/nprogress.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bootstrap.min.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/nprogress.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/page.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/turbolinks.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/code/prettify.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/respond.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.turbolinks.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.html5-placeholder-shim.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/site.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.bs.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:34 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.9.1.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui-lightness/jquery-ui-1.10.3.custom.min.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/code/prettify.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/themes/bootstrap.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/bootstrap-glyphicons.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bootstrap.min.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/code/prettify.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/page.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/nprogress.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/respond.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/turbolinks.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.html5-placeholder-shim.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.turbolinks.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/site.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/nprogress.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.bs.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/bootstrap-glyphicons.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui-lightness/jquery-ui-1.10.3.custom.min.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.9.1.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/themes/bootstrap.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/code/prettify.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bootstrap.min.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/page.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/nprogress.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.turbolinks.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/code/prettify.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/turbolinks.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/nprogress.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/respond.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.bs.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/site.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.html5-placeholder-shim.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:38 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/bootstrap-glyphicons.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bootstrap.min.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui-lightness/jquery-ui-1.10.3.custom.min.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.9.1.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/themes/bootstrap.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/code/prettify.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/page.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/code/prettify.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/nprogress.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.turbolinks.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/turbolinks.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/respond.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/nprogress.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/site.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.bs.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.html5-placeholder-shim.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:39 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.9.1.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui-lightness/jquery-ui-1.10.3.custom.min.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/bootstrap-glyphicons.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bootstrap.min.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/nprogress.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/themes/bootstrap.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/code/prettify.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/turbolinks.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/code/prettify.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/page.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.turbolinks.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/nprogress.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/respond.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.bs.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.html5-placeholder-shim.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/site.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:40 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/bootstrap-glyphicons.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui-lightness/jquery-ui-1.10.3.custom.min.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.9.1.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/themes/bootstrap.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bootstrap.min.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/nprogress.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/code/prettify.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/code/prettify.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/page.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/turbolinks.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.turbolinks.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/nprogress.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.bs.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/site.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/respond.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.html5-placeholder-shim.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:41 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:43 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/themes/bootstrap.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:43 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:43 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.9.1.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:43 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:43 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:43 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:43 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/bootstrap-glyphicons.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:43 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:43 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui-lightness/jquery-ui-1.10.3.custom.min.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:43 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:43 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/code/prettify.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:43 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:43 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/nprogress.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:43 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:43 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/page.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:43 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:43 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bootstrap.min.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:43 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:43 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.turbolinks.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:43 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:44 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/turbolinks.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:44 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:44 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/code/prettify.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:44 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:44 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/nprogress.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:44 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:44 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/respond.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:44 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:44 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.bs.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:44 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:44 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/site.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:44 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:44 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.html5-placeholder-shim.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:44 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/code/prettify.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/themes/bootstrap.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/bootstrap-glyphicons.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui-lightness/jquery-ui-1.10.3.custom.min.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.9.1.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/nprogress.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/turbolinks.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bootstrap.min.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/code/prettify.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.turbolinks.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/page.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/nprogress.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/respond.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.bs.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.html5-placeholder-shim.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/site.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:46 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.9.1.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/themes/bootstrap.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui-lightness/jquery-ui-1.10.3.custom.min.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/bootstrap-glyphicons.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/code/prettify.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/page.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/nprogress.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/turbolinks.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bootstrap.min.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.turbolinks.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/code/prettify.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.html5-placeholder-shim.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/nprogress.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/respond.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.bs.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/site.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:48 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/bootstrap-glyphicons.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/code/prettify.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/themes/bootstrap.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.9.1.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/ui-lightness/jquery-ui-1.10.3.custom.min.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/nprogress.css ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/page.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bootstrap.min.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.turbolinks.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/turbolinks.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/code/prettify.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/nprogress.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/respond.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.bs.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/site.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.html5-placeholder-shim.js ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 00:56:49 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 15:52:31 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 15:52:31 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 15:52:31 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 15:52:31 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 17:56:26 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php:79
2016-06-12 17:56:26 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#3 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#4 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php:79
2016-06-12 20:40:58 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 20:40:58 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 20:40:58 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 20:40:58 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 20:41:02 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 20:41:02 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 20:41:02 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 20:41:02 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 20:50:56 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 20:50:56 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 20:50:56 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 20:50:56 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 20:50:59 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 20:50:59 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 20:50:59 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 20:50:59 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 20:52:14 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 20:52:14 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 20:52:14 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 20:52:14 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 20:52:17 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 20:52:17 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 20:52:17 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 20:52:17 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 21:32:24 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 21:32:24 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(986): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#2 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php:986
2016-06-12 21:47:35 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 21:47:35 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 21:47:35 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 21:47:35 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 21:47:52 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 21:47:52 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 21:47:52 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 21:47:52 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 21:48:06 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 21:48:06 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 21:48:06 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 21:48:06 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:07:29 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:07:29 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:07:29 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:07:29 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:08:18 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT count(solution_id) as total FROM `solution` WHERE `user_id` = 'spidermandl' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:08:18 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT count(so...', false, Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Solution.php(197): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Model/User.php(140): Model_Solution::number_of_solution_total_for_user('spidermandl')
#3 /Users/Desmond/Sites/hustoj/application/classes/Model/User.php(150): Model_User->number_of_solutions()
#4 /Users/Desmond/Sites/hustoj/application/classes/Controller/User.php(38): Model_User->update_user_solution_stats()
#5 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_User->action_profile()
#6 [internal function]: Controller_Base->execute()
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#11 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:08:18 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT count(solution_id) as total FROM `solution` WHERE `user_id` = 'spidermandl' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:08:18 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT count(so...', false, Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Solution.php(197): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Model/User.php(140): Model_Solution::number_of_solution_total_for_user('spidermandl')
#3 /Users/Desmond/Sites/hustoj/application/classes/Model/User.php(150): Model_User->number_of_solutions()
#4 /Users/Desmond/Sites/hustoj/application/classes/Controller/User.php(38): Model_User->update_user_solution_stats()
#5 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_User->action_profile()
#6 [internal function]: Controller_Base->execute()
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#11 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:08:36 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT count(solution_id) as total FROM `solution` WHERE `user_id` = 'spidermandl' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:08:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT count(so...', false, Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Solution.php(197): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Model/User.php(140): Model_Solution::number_of_solution_total_for_user('spidermandl')
#3 /Users/Desmond/Sites/hustoj/application/classes/Model/User.php(150): Model_User->number_of_solutions()
#4 /Users/Desmond/Sites/hustoj/application/classes/Controller/User.php(38): Model_User->update_user_solution_stats()
#5 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_User->action_profile()
#6 [internal function]: Controller_Base->execute()
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#11 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:08:36 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT count(solution_id) as total FROM `solution` WHERE `user_id` = 'spidermandl' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:08:36 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT count(so...', false, Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Solution.php(197): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Model/User.php(140): Model_Solution::number_of_solution_total_for_user('spidermandl')
#3 /Users/Desmond/Sites/hustoj/application/classes/Model/User.php(150): Model_User->number_of_solutions()
#4 /Users/Desmond/Sites/hustoj/application/classes/Controller/User.php(38): Model_User->update_user_solution_stats()
#5 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_User->action_profile()
#6 [internal function]: Controller_Base->execute()
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#11 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:26:43 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:26:43 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:26:43 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:26:43 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:26:46 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:26:46 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:26:46 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:26:46 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:26:47 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:26:47 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:26:47 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:26:47 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:27:00 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:27:00 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:27:00 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:27:00 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:31:40 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:31:40 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:31:40 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:31:40 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:32:09 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:32:09 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:32:09 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-12 22:32:09 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250