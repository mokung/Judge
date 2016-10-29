<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-06-04 10:30:22 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ SYSPATH/classes/Kohana/Route.php [ 422 ] in file:line
2016-06-04 10:30:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-04 10:34:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: matches ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in /Users/Desmond/Sites/kohana-v3.3.5/system/classes/Kohana/Route.php:423
2016-06-04 10:34:27 --- DEBUG: #0 /Users/Desmond/Sites/kohana-v3.3.5/system/classes/Kohana/Route.php(423): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Desmond/...', 423, Array)
#1 /Users/Desmond/Sites/kohana-v3.3.5/system/classes/Kohana/Request.php(474): Kohana_Route->matches(Object(Request))
#2 /Users/Desmond/Sites/kohana-v3.3.5/system/classes/Kohana/Request.php(953): Kohana_Request::process(Object(Request), Array)
#3 /Users/Desmond/Sites/kohana-v3.3.5/index.php(118): Kohana_Request->execute()
#4 {main} in /Users/Desmond/Sites/kohana-v3.3.5/system/classes/Kohana/Route.php:423
2016-06-04 10:47:52 --- EMERGENCY: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ SYSPATH/classes/Kohana/Request.php [ 670 ] in file:line
2016-06-04 10:47:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/Users/Desmond/...', 670, Array)
#1 /Users/Desmond/Sites/kohana-v3.3.5/system/classes/Kohana/Request.php(670): explode('?', Array)
#2 /Users/Desmond/Sites/kohana-v3.3.5/system/classes/Kohana/Request.php(156): Kohana_Request->__construct(Array, Array, true, Array)
#3 /Users/Desmond/Sites/kohana-v3.3.5/index.php(117): Kohana_Request::factory(Array)
#4 {main} in file:line