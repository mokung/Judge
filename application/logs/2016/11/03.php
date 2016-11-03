<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-11-03 20:48:25 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'group_id' in 'field list' [ UPDATE `users` SET `user_id` = 'huli', `group_id` = NULL, `stage` = NULL, `email` = '1@qq.com', `submit` = '0', `solved` = '0', `defunct` = 'N', `ip` = '::1', `accesstime` = '2016-11-03 20:48:25', `volume` = '1', `language` = '1', `password` = '/h9yQmxoXnav6qYIsA2CjNiFHYc2YjI0', `reg_time` = '2016-10-29 14:28:52', `nick` = 'huli', `school` = 'aa', `locale` = 'zh', `theme` = 'bootstrap', `score` = '0', `punish` = NULL, `activity` = NULL WHERE `user_id` = 'huli' ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in D:\web\Judge\modules\database\classes\Kohana\Database\Query.php:251
2016-11-03 20:48:25 --- DEBUG: #0 D:\web\Judge\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(3, 'UPDATE `users` ...', false, Array)
#1 D:\web\Judge\application\classes\Model\User.php(508): Kohana_Database_Query->execute()
#2 D:\web\Judge\application\classes\Auth\Hoj.php(100): Model_User->save()
#3 D:\web\Judge\application\classes\Auth\Hoj.php(21): Auth_Hoj->complete_login(Object(Model_User))
#4 D:\web\Judge\modules\auth\classes\Kohana\Auth.php(92): Auth_Hoj->_login('huli', 'huli94323', true)
#5 D:\web\Judge\application\classes\Controller\User.php(204): Kohana_Auth->login('huli', 'huli94323', true)
#6 D:\web\Judge\application\classes\Controller\User.php(191): Controller_User->do_login()
#7 D:\web\Judge\application\classes\Controller\Base.php(266): Controller_User->action_login()
#8 [internal function]: Controller_Base->execute()
#9 D:\web\Judge\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 D:\web\Judge\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\web\Judge\system\classes\Kohana\Request.php(995): Kohana_Request_Client->execute(Object(Request))
#12 D:\web\Judge\index.php(103): Kohana_Request->execute()
#13 {main} in D:\web\Judge\modules\database\classes\Kohana\Database\Query.php:251