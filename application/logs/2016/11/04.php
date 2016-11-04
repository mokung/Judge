<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-11-04 09:13:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: current_user_groupid ~ APPPATH/views/leader/groupconfig/register.php [ 6 ] in /var/www/html/judge/application/views/leader/groupconfig/register.php:6
2016-11-04 09:13:16 --- DEBUG: #0 /var/www/html/judge/application/views/leader/groupconfig/register.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/j...', 6, Array)
#1 /var/www/html/judge/system/classes/Kohana/View.php(62): include('/var/www/html/j...')
#2 /var/www/html/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/j...', Array)
#3 /var/www/html/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/html/judge/application/views/layout.php(51): Kohana_View->__toString()
#5 /var/www/html/judge/system/classes/Kohana/View.php(62): include('/var/www/html/j...')
#6 /var/www/html/judge/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/j...', Array)
#7 /var/www/html/judge/system/classes/Kohana/View.php(236): Kohana_View->render()
#8 /var/www/html/judge/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#9 /var/www/html/judge/application/classes/Controller/Base.php(116): Kohana_Response->body(Object(View))
#10 /var/www/html/judge/application/classes/Controller/Base.php(272): Controller_Base->after()
#11 [internal function]: Controller_Base->execute()
#12 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Leader_Groups))
#13 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#16 {main} in /var/www/html/judge/application/views/leader/groupconfig/register.php:6