<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-09-09 17:35:58 --- EMERGENCY: Database_Exception [ 1153 ]: Got a packet bigger than 'max_allowed_packet' bytes [ INSERT INTO `problem` (`problem_id`, `title`, `description`, `input`, `output`, `sample_input`, `sample_output`, `spj`, `hint`, `source`, `in_date`, `time_limit`, `memory_limit`, `defunct`, `accepted`, `submit`, `solved`) VALUES (NULL, '因子游戏', 'Mike和他的朋友Tom在玩一个很有趣的游戏，规则是这样的：\n&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 初始是桌子上有一个大于1 的整数N；\n&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 两个人轮流对这个整数进行操作，Mike先手\n&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 每次操作可以进行两种选择：\n1、&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 将当前的数减去1。\n2、&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 将它除以它的一个因子（1以及它本身除外）。\n&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 当桌子上的数为1 的时候，游戏结束，进行最后一步操作的玩家获胜\n    \n现在给定一个N ，若双方都按照最优的策略进行游戏，请回答谁将获胜。', '', '', '', '', 0, '', '', '2016-09-09 17:35:58', '1', '256', 'Y', NULL, 0, 0) ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-09-09 17:35:58 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `pr...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Base.php(237): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Admin/Problem.php(38): Model_Base->save()
#3 /home/OnlineJudge/application/classes/Controller/Base.php(253): Controller_Admin_Problem->action_edit()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Problem))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251