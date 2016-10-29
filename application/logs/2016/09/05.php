<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-09-05 17:50:41 --- EMERGENCY: Database_Exception [ 1153 ]: Got a packet bigger than 'max_allowed_packet' bytes [ INSERT INTO `problem` (`problem_id`, `title`, `description`, `input`, `output`, `sample_input`, `sample_output`, `spj`, `hint`, `source`, `in_date`, `time_limit`, `memory_limit`, `defunct`, `accepted`, `submit`, `solved`) VALUES (NULL, '红双喜', '    \n在一节数学课上，老师要求每个学生给出自己的幸运数字。作为数论的粉丝，彼得选择了一个素数。鲍勃则很随意。他说，数字t是他的幸运数字，它可以被表示为：t&thinsp;=&thinsp;a2&thinsp;+&thinsp;b2, a,b&nbsp;则为任意的正整数&thinsp;。现在，男孩们决定要找出在[l,&thinsp;r]&nbsp;中满足上述式子的数字t，这个数字要同时满足彼得和鲍勃对于幸运数字的要求。你的任务就是找出满足条件的数字的个数。', '    \n   第一行输入两个正整数l,&thinsp;r&nbsp;&nbsp;(1&thinsp;&le;&thinsp;l,&thinsp;r&thinsp;&le;&thinsp;3&middot;108)', '   输出只有一行，输出的是&nbsp;在[l,&thinsp;r]中满足同为鲍勃和彼得两个人都幸运的数字的个数。&nbsp; &nbsp;', '第一个例子：\n3 5\n第二个例子：\n6 66', '第一个例子：\n1\n第二个例子：\n7', 0, 'brute force、number theory', 'C 113', '2016-09-05 17:50:41', '3', '128', 'Y', NULL, 0, 0) ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-09-05 17:50:41 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `pr...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Base.php(237): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Admin/Problem.php(38): Model_Base->save()
#3 /home/OnlineJudge/application/classes/Controller/Base.php(253): Controller_Admin_Problem->action_edit()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Problem))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-09-05 17:51:20 --- EMERGENCY: Database_Exception [ 1153 ]: Got a packet bigger than 'max_allowed_packet' bytes [ INSERT INTO `problem` (`problem_id`, `title`, `description`, `input`, `output`, `sample_input`, `sample_output`, `spj`, `hint`, `source`, `in_date`, `time_limit`, `memory_limit`, `defunct`, `accepted`, `submit`, `solved`) VALUES (NULL, '红双喜', '    \n在一节数学课上，老师要求每个学生给出自己的幸运数字。作为数论的粉丝，彼得选择了一个素数。鲍勃则很随意。他说，数字t是他的幸运数字，它可以被表示为：t&thinsp;=&thinsp;a2&thinsp;+&thinsp;b2, a,b&nbsp;则为任意的正整数&thinsp;。现在，男孩们决定要找出在[l,r]&nbsp;中满足上述式子的数字t，这个数字要同时满足彼得和鲍勃对于幸运数字的要求。你的任务就是找出满足条件的数字的个数。', '    \n   第一行输入两个正整数l,&thinsp;r&nbsp;&nbsp;(1&thinsp;&le;&thinsp;l,&thinsp;r&thinsp;&le;&thinsp;3&middot;108)', '   输出只有一行，输出的是&nbsp;在[l,&thinsp;r]中满足同为鲍勃和彼得两个人都幸运的数字的个数。&nbsp; &nbsp;', '第一个例子：\n3 5\n第二个例子：\n6 66', '第一个例子：\n1\n第二个例子：\n7', 0, 'brute force、number theory', 'C 113', '2016-09-05 17:51:20', '3', '128', 'Y', NULL, 0, 0) ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-09-05 17:51:20 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `pr...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Base.php(237): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Admin/Problem.php(38): Model_Base->save()
#3 /home/OnlineJudge/application/classes/Controller/Base.php(253): Controller_Admin_Problem->action_edit()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Problem))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-09-05 17:51:28 --- EMERGENCY: Database_Exception [ 1153 ]: Got a packet bigger than 'max_allowed_packet' bytes [ INSERT INTO `problem` (`problem_id`, `title`, `description`, `input`, `output`, `sample_input`, `sample_output`, `spj`, `hint`, `source`, `in_date`, `time_limit`, `memory_limit`, `defunct`, `accepted`, `submit`, `solved`) VALUES (NULL, '红双喜', '    \n&nbsp;', '    \n   第一行输入两个正整数l,&thinsp;r&nbsp;&nbsp;(1&thinsp;&le;&thinsp;l,&thinsp;r&thinsp;&le;&thinsp;3&middot;108)', '   输出只有一行，输出的是&nbsp;在[l,&thinsp;r]中满足同为鲍勃和彼得两个人都幸运的数字的个数。&nbsp; &nbsp;', '第一个例子：\n3 5\n第二个例子：\n6 66', '第一个例子：\n1\n第二个例子：\n7', 0, 'brute force、number theory', 'C 113', '2016-09-05 17:51:28', '3', '128', 'Y', NULL, 0, 0) ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-09-05 17:51:28 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `pr...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Base.php(237): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Admin/Problem.php(38): Model_Base->save()
#3 /home/OnlineJudge/application/classes/Controller/Base.php(253): Controller_Admin_Problem->action_edit()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Problem))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-09-05 17:51:45 --- EMERGENCY: Database_Exception [ 1153 ]: Got a packet bigger than 'max_allowed_packet' bytes [ INSERT INTO `problem` (`problem_id`, `title`, `description`, `input`, `output`, `sample_input`, `sample_output`, `spj`, `hint`, `source`, `in_date`, `time_limit`, `memory_limit`, `defunct`, `accepted`, `submit`, `solved`) VALUES (NULL, '红双喜', '    \n在一节数学课上，老师要求每个学生给出自己的幸运数字。作为数论的粉丝，彼得选择了一个素数。鲍勃则很随意。他说，数字t是他的幸运数字，它可以被表示为：t&thinsp;=&thinsp;a2&thinsp;+&thinsp;b2, a,b&nbsp;则为任意的正整数&thinsp;。现在，男孩们决定要找出在[l,r]&nbsp;中满足上述式子的数字t，这个数字要同时满足彼得和鲍勃对于幸运数字的要求。你的任务就是找出满足条件的数字的个数。', '    \n   第一行输入两个正整数l,&thinsp;r&nbsp;&nbsp;(1&thinsp;&le;&thinsp;l,&thinsp;r&thinsp;&le;&thinsp;3&middot;108)', '', '第一个例子：\n3 5\n第二个例子：\n6 66', '第一个例子：\n1\n第二个例子：\n7', 0, 'brute force、number theory', 'C 113', '2016-09-05 17:51:45', '3', '128', 'Y', NULL, 0, 0) ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-09-05 17:51:45 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `pr...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Base.php(237): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Admin/Problem.php(38): Model_Base->save()
#3 /home/OnlineJudge/application/classes/Controller/Base.php(253): Controller_Admin_Problem->action_edit()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Problem))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-09-05 17:51:55 --- EMERGENCY: Database_Exception [ 1153 ]: Got a packet bigger than 'max_allowed_packet' bytes [ INSERT INTO `problem` (`problem_id`, `title`, `description`, `input`, `output`, `sample_input`, `sample_output`, `spj`, `hint`, `source`, `in_date`, `time_limit`, `memory_limit`, `defunct`, `accepted`, `submit`, `solved`) VALUES (NULL, '红双喜', '    \n在一节数学课上，老师要求每个学生给出自己的幸运数字。作为数论的粉丝，彼得选择了一个素数。鲍勃则很随意。他说，数字t是他的幸运数字，它可以被表示为：t&thinsp;=&thinsp;a2&thinsp;+&thinsp;b2, a,b&nbsp;则为任意的正整数&thinsp;。现在，男孩们决定要找出在[l,r]&nbsp;中满足上述式子的数字t，这个数字要同时满足彼得和鲍勃对于幸运数字的要求。你的任务就是找出满足条件的数字的个数。', '    \n&nbsp;', '输出只有一行，输出的是&nbsp;在[l,&thinsp;r]中满足同为鲍勃和彼得两个人都幸运的数字的个数。&nbsp; &nbsp;', '第一个例子：\n3 5\n第二个例子：\n6 66', '第一个例子：\n1\n第二个例子：\n7', 0, 'brute force、number theory', 'C 113', '2016-09-05 17:51:55', '3', '128', 'Y', NULL, 0, 0) ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-09-05 17:51:55 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `pr...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Base.php(237): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Admin/Problem.php(38): Model_Base->save()
#3 /home/OnlineJudge/application/classes/Controller/Base.php(253): Controller_Admin_Problem->action_edit()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Problem))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-09-05 17:52:23 --- EMERGENCY: Database_Exception [ 1153 ]: Got a packet bigger than 'max_allowed_packet' bytes [ INSERT INTO `problem` (`problem_id`, `title`, `description`, `input`, `output`, `sample_input`, `sample_output`, `spj`, `hint`, `source`, `in_date`, `time_limit`, `memory_limit`, `defunct`, `accepted`, `submit`, `solved`) VALUES (NULL, '红双喜', '    \n在一节数学课上，老师要求每个学生给出自己的幸运数字。作为数论的粉丝，彼得选择了一个素数。鲍勃则很随意。他说，数字t是他的幸运数字，它可以被表示为：t&thinsp;=&thinsp;a2&thinsp;+&thinsp;b2, a,b&nbsp;则为任意的正整数&thinsp;。现在，男孩们决定要找出在[l,r]&nbsp;中满足上述式子的数字t，这个数字要同时满足彼得和鲍勃对于幸运数字的要求。你的任务就是找出满足条件的数字的个数。', '    \n&nbsp;', '', '第一个例子：\n3 5\n第二个例子：\n6 66', '第一个例子：\n1\n第二个例子：\n7', 0, 'brute force、number theory', 'C 113', '2016-09-05 17:52:23', '3', '128', 'Y', NULL, 0, 0) ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-09-05 17:52:23 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `pr...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Base.php(237): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Admin/Problem.php(38): Model_Base->save()
#3 /home/OnlineJudge/application/classes/Controller/Base.php(253): Controller_Admin_Problem->action_edit()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Problem))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-09-05 17:52:40 --- EMERGENCY: Database_Exception [ 1153 ]: Got a packet bigger than 'max_allowed_packet' bytes [ INSERT INTO `problem` (`problem_id`, `title`, `description`, `input`, `output`, `sample_input`, `sample_output`, `spj`, `hint`, `source`, `in_date`, `time_limit`, `memory_limit`, `defunct`, `accepted`, `submit`, `solved`) VALUES (NULL, '红双喜', '    \n&nbsp;', '    \n&nbsp;', '', '第一个例子：\n3 5\n第二个例子：\n6 66', '第一个例子：\n1\n第二个例子：\n7', 0, 'brute force、number theory', 'C 113', '2016-09-05 17:52:40', '3', '128', 'Y', NULL, 0, 0) ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-09-05 17:52:40 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `pr...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Base.php(237): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Admin/Problem.php(38): Model_Base->save()
#3 /home/OnlineJudge/application/classes/Controller/Base.php(253): Controller_Admin_Problem->action_edit()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Problem))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-09-05 20:11:18 --- EMERGENCY: Database_Exception [ 1153 ]: Got a packet bigger than 'max_allowed_packet' bytes [ INSERT INTO `problem` (`problem_id`, `title`, `description`, `input`, `output`, `sample_input`, `sample_output`, `spj`, `hint`, `source`, `in_date`, `time_limit`, `memory_limit`, `defunct`, `accepted`, `submit`, `solved`) VALUES (NULL, '烈日下的勒让德', 'Kevin 和 Nicky 在晒太阳的时候想出了一个新的游戏叫做烈日下的勒让德。在游戏中，两人轮流行动，Kevin先手。在游戏开始的时候有n群牛，第&nbsp;i&nbsp;群牛中有ai&nbsp;头牛。在游戏者的本回合中，玩家可以召唤阳光的力量，执行以下操作之一：\n1.&nbsp;&nbsp;&nbsp;&nbsp; 选择一群牛，移除其中一只；\n2.&nbsp;&nbsp;&nbsp;&nbsp; 选择一群牛，其中牛的数量是2x（x&gt;0），可以用k群数量为x的牛替换这群牛；\n    两个玩家谁移除最后一头牛谁获胜，你有n,k和序列a1,&thinsp;a2,&thinsp;...,&thinsp;an,帮助Kevin 和 Nicky寻找获胜者，两人都是最佳游戏者。&nbsp; &nbsp;&nbsp;', '', '', '', '', 1, '', '', '2016-09-05 20:11:18', '2', '256', 'Y', NULL, 0, 0) ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251
2016-09-05 20:11:18 --- DEBUG: #0 /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `pr...', false, Array)
#1 /home/OnlineJudge/application/classes/Model/Base.php(237): Kohana_Database_Query->execute()
#2 /home/OnlineJudge/application/classes/Controller/Admin/Problem.php(38): Model_Base->save()
#3 /home/OnlineJudge/application/classes/Controller/Base.php(253): Controller_Admin_Problem->action_edit()
#4 [internal function]: Controller_Base->execute()
#5 /home/OnlineJudge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Problem))
#6 /home/OnlineJudge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/OnlineJudge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /home/OnlineJudge/index.php(103): Kohana_Request->execute()
#9 {main} in /home/OnlineJudge/modules/database/classes/Kohana/Database/Query.php:251