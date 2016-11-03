<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-30 13:57:19 --- EMERGENCY: Database_Exception [ 1366 ]: Incorrect string value: '\xF5y' for column 'invited_code' at row 1 [ INSERT INTO `invitation` (`id`, `group_id`, `invited_code`, `type`, `num`, `createtime`) VALUES (NULL, 'stju', '×¦õy', '1', '5', '2016-10-30 13:57:19') ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-10-30 13:57:19 --- DEBUG: #0 /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `in...', false, Array)
#1 /var/www/html/judge/application/classes/Model/Base.php(237): Kohana_Database_Query->execute()
#2 /var/www/html/judge/application/classes/Controller/Admin/Invite.php(56): Model_Base->save()
#3 /var/www/html/judge/application/classes/Controller/Base.php(253): Controller_Admin_Invite->action_code()
#4 [internal function]: Controller_Base->execute()
#5 /var/www/html/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Invite))
#6 /var/www/html/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/judge/index.php(103): Kohana_Request->execute()
#9 {main} in /var/www/html/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-10-30 14:00:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function string() ~ APPPATH/classes/Controller/Admin/Invite.php [ 37 ] in file:line
2016-10-30 14:00:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line