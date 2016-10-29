<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-06-13 00:06:16 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-13 00:06:16 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-13 00:06:16 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT * FROM `solution` ORDER BY `solution_id` DESC LIMIT 50 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-13 00:06:16 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', 'Model_Solution', Array)
#1 /Users/Desmond/Sites/hustoj/application/classes/Model/Base.php(116): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/hustoj/application/classes/Controller/Solution.php(58): Model_Base::find(Array, '1', 50, Array)
#3 /Users/Desmond/Sites/hustoj/application/classes/Controller/Base.php(255): Controller_Solution->action_status()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#6 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-13 00:06:19 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT count(solution_id) as total FROM `solution` WHERE `user_id` = 'spidermandl' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-13 00:06:19 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT count(so...', false, Array)
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
2016-06-13 00:06:19 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'judge.solution' doesn't exist [ SELECT count(solution_id) as total FROM `solution` WHERE `user_id` = 'spidermandl' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 155 ] in /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php:250
2016-06-13 00:06:19 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/modules/database/classes/Kohana/Database/Query.php(250): Kohana_Database_MySQLi->query(1, 'SELECT count(so...', false, Array)
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
2016-06-13 12:29:20 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL joinus was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php:79
2016-06-13 12:29:20 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#3 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#4 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php:79
2016-06-13 12:29:20 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL joinus was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 19 ] in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php:79
2016-06-13 12:29:20 --- DEBUG: #0 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#3 /Users/Desmond/Sites/hustoj/index.php(103): Kohana_Request->execute()
#4 {main} in /Users/Desmond/Sites/hustoj/system/classes/Kohana/Request/Client/Internal.php:79