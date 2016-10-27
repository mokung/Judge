<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-21 12:40:50 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/judge/system/classes/Kohana/Session.php:125
2016-10-21 12:40:50 --- DEBUG: #0 /var/www/html/judge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/judge/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/judge/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/judge/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/judge/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/judge/application/classes/I18n.php(45): Kohana_Auth::instance()
#6 /var/www/html/judge/application/classes/I18n.php(126): I18n::get_user_lang(Array)
#7 /var/www/html/judge/application/classes/Controller/Base.php(18): I18n::setup()
#8 /var/www/html/judge/application/classes/Controller/Base.php(241): Controller_Base->before()
#9 [internal function]: Controller_Base->execute()
#10 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#11 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#14 {main} in /var/www/html/judge/system/classes/Kohana/Session.php:125
2016-10-21 12:40:53 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/judge/system/classes/Kohana/Session.php:125
2016-10-21 12:40:53 --- DEBUG: #0 /var/www/html/judge/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/judge/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/judge/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/judge/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/judge/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/judge/application/classes/I18n.php(45): Kohana_Auth::instance()
#6 /var/www/html/judge/application/classes/I18n.php(126): I18n::get_user_lang(Array)
#7 /var/www/html/judge/application/classes/Controller/Base.php(18): I18n::setup()
#8 /var/www/html/judge/application/classes/Controller/Base.php(241): Controller_Base->before()
#9 [internal function]: Controller_Base->execute()
#10 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#11 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#14 {main} in /var/www/html/judge/system/classes/Kohana/Session.php:125