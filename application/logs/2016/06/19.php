<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-06-19 15:29:29 --- EMERGENCY: Database_Exception [ 1406 ]: Data too long for column 'source' at row 1 [ INSERT INTO `problem` (`problem_id`, `title`, `description`, `input`, `output`, `sample_input`, `sample_output`, `spj`, `hint`, `source`, `in_date`, `time_limit`, `memory_limit`, `defunct`, `accepted`, `submit`, `solved`) VALUES (NULL, '10000', '&nbsp;\nCalculate a + b.', '&nbsp;\nTwo integers a and b, separated by a space. (0&lt;=a,b&lt;=9).', '&nbsp;\nThe sum of a and b in the first line.', '5 7', '12', 0, 'Your program should always read from stdin(Standard Input), and write to stdout(Standard Output). Solutions to problem 10000 can be as follows:\n&nbsp;\nC:\n#include &lt;stdio.h&gt;\n&nbsp;\nint main() {\n&nbsp;&nbsp;&nbsp;&nbsp;int a, b;\n&nbsp;&nbsp;&nbsp;&nbsp;scanf(\"%d%d\", &amp;a, &amp;b);\n&nbsp;&nbsp;&nbsp;&nbsp;printf(\"%d\\n\", a + b);\n&nbsp;&nbsp;&nbsp;&nbsp;return 0;\n}\n&nbsp;\n&nbsp;\nC++:\n#include &lt;iostream&gt;\n&nbsp;\nusing namespace std;\n&nbsp;\nint main() {\n&nbsp;&nbsp;&nbsp;&nbsp;int a, b;\n&nbsp;&nbsp;&nbsp;&nbsp;cin &gt;&gt; a &gt;&gt; b;\n&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; a + b &lt;&lt; endl;\n&nbsp;&nbsp;&nbsp;&nbsp;return 0;\n}\n&nbsp;\n&nbsp;\nPascal:\nprogram toj10000(Input, Output);\n&nbsp;\nvar\n&nbsp;&nbsp;&nbsp;&nbsp;a, b: Integer;\nbegin\n&nbsp;&nbsp;&nbsp;&nbsp;readln(a, b);\n&nbsp;&nbsp;&nbsp;&nbsp;writeln(a + b);\n&nbsp;\nend.', '#include \n\nusing namespace std;\n\nint main() {\n    int a, b;\n    cin >> a >> b;\n    cout  ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 15:29:29 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Base.php(237): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Controller/Admin/Problem.php(39): Model_Base->save()
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_Admin_Problem->action_edit()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Problem))
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 15:29:59 --- EMERGENCY: Database_Exception [ 1406 ]: Data too long for column 'source' at row 1 [ INSERT INTO `problem` (`problem_id`, `title`, `description`, `input`, `output`, `sample_input`, `sample_output`, `spj`, `hint`, `source`, `in_date`, `time_limit`, `memory_limit`, `defunct`, `accepted`, `submit`, `solved`) VALUES (NULL, '10000', '&nbsp;\nCalculate a + b.', '&nbsp;\nTwo integers a and b, separated by a space. (0&lt;=a,b&lt;=9).', '&nbsp;\nThe sum of a and b in the first line.', '5 7', '12', 0, 'Your program should always read from stdin(Standard Input), and write to stdout(Standard Output). Solutions to problem 10000 can be as follows:\n&nbsp;\nC:\n#include &lt;stdio.h&gt;\n&nbsp;\nint main() {\n&nbsp;&nbsp;&nbsp;&nbsp;int a, b;\n&nbsp;&nbsp;&nbsp;&nbsp;scanf(\"%d%d\", &amp;a, &amp;b);\n&nbsp;&nbsp;&nbsp;&nbsp;printf(\"%d\\n\", a + b);\n&nbsp;&nbsp;&nbsp;&nbsp;return 0;\n}\n&nbsp;\n&nbsp;\nC++:\n#include &lt;iostream&gt;\n&nbsp;\nusing namespace std;\n&nbsp;\nint main() {\n&nbsp;&nbsp;&nbsp;&nbsp;int a, b;\n&nbsp;&nbsp;&nbsp;&nbsp;cin &gt;&gt; a &gt;&gt; b;\n&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; a + b &lt;&lt; endl;\n&nbsp;&nbsp;&nbsp;&nbsp;return 0;\n}\n&nbsp;\n&nbsp;\nPascal:\nprogram toj10000(Input, Output);\n&nbsp;\nvar\n&nbsp;&nbsp;&nbsp;&nbsp;a, b: Integer;\nbegin\n&nbsp;&nbsp;&nbsp;&nbsp;readln(a, b);\n&nbsp;&nbsp;&nbsp;&nbsp;writeln(a + b);\n&nbsp;\nend.', '#include \n\nusing namespace std;\n\nint main() {\n    int a, b;\n    cin >> a >> b;\n    cout  ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 15:29:59 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Base.php(237): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Controller/Admin/Problem.php(39): Model_Base->save()
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_Admin_Problem->action_edit()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Problem))
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 15:30:32 --- EMERGENCY: Database_Exception [ 1406 ]: Data too long for column 'source' at row 1 [ INSERT INTO `problem` (`problem_id`, `title`, `description`, `input`, `output`, `sample_input`, `sample_output`, `spj`, `hint`, `source`, `in_date`, `time_limit`, `memory_limit`, `defunct`, `accepted`, `submit`, `solved`) VALUES (NULL, '10000', '&nbsp;\nCalculate a + b.', '&nbsp;\nTwo integers a and b, separated by a space. (0&lt;=a,b&lt;=9).', '&nbsp;\nThe sum of a and b in the first line.', '5 7', '12', 0, 'Your program should always read from stdin(Standard Input), and write to stdout(Standard Output). Solutions to problem 10000 can be as follows:\n&nbsp;\nC:\n#include &lt;stdio.h&gt;\n&nbsp;\nint main() {\n&nbsp;&nbsp;&nbsp;&nbsp;int a, b;\n&nbsp;&nbsp;&nbsp;&nbsp;scanf(\"%d%d\", &amp;a, &amp;b);\n&nbsp;&nbsp;&nbsp;&nbsp;printf(\"%d\\n\", a + b);\n&nbsp;&nbsp;&nbsp;&nbsp;return 0;\n}\n&nbsp;\n&nbsp;\nC++:\n#include &lt;iostream&gt;\n&nbsp;\nusing namespace std;\n&nbsp;\nint main() {\n&nbsp;&nbsp;&nbsp;&nbsp;int a, b;\n&nbsp;&nbsp;&nbsp;&nbsp;cin &gt;&gt; a &gt;&gt; b;\n&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; a + b &lt;&lt; endl;\n&nbsp;&nbsp;&nbsp;&nbsp;return 0;\n}\n&nbsp;\n&nbsp;\nPascal:\nprogram toj10000(Input, Output);\n&nbsp;\nvar\n&nbsp;&nbsp;&nbsp;&nbsp;a, b: Integer;\nbegin\n&nbsp;&nbsp;&nbsp;&nbsp;readln(a, b);\n&nbsp;&nbsp;&nbsp;&nbsp;writeln(a + b);\n&nbsp;\nend.', '#include \n\nusing namespace std;\n\nint main() {\n    int a, b;\n    cin >> a >> b;\n    cout  ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 15:30:32 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Base.php(237): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Controller/Admin/Problem.php(40): Model_Base->save()
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_Admin_Problem->action_edit()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Problem))
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 15:31:28 --- EMERGENCY: Database_Exception [ 1406 ]: Data too long for column 'source' at row 1 [ INSERT INTO `problem` (`problem_id`, `title`, `description`, `input`, `output`, `sample_input`, `sample_output`, `spj`, `hint`, `source`, `in_date`, `time_limit`, `memory_limit`, `defunct`, `accepted`, `submit`, `solved`) VALUES (NULL, '10000', '&nbsp;\nCalculate a + b.', '&nbsp;\nTwo integers a and b, separated by a space. (0&lt;=a,b&lt;=9).', '&nbsp;\nThe sum of a and b in the first line.', '5 7', '12', 0, 'Your program should always read from stdin(Standard Input), and write to stdout(Standard Output). Solutions to problem 10000 can be as follows:\n&nbsp;\nC:\n#include &lt;stdio.h&gt;\n&nbsp;\nint main() {\n&nbsp;&nbsp;&nbsp;&nbsp;int a, b;\n&nbsp;&nbsp;&nbsp;&nbsp;scanf(\"%d%d\", &amp;a, &amp;b);\n&nbsp;&nbsp;&nbsp;&nbsp;printf(\"%d\\n\", a + b);\n&nbsp;&nbsp;&nbsp;&nbsp;return 0;\n}\n&nbsp;\n&nbsp;\nC++:\n#include &lt;iostream&gt;\n&nbsp;\nusing namespace std;\n&nbsp;\nint main() {\n&nbsp;&nbsp;&nbsp;&nbsp;int a, b;\n&nbsp;&nbsp;&nbsp;&nbsp;cin &gt;&gt; a &gt;&gt; b;\n&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; a + b &lt;&lt; endl;\n&nbsp;&nbsp;&nbsp;&nbsp;return 0;\n}\n&nbsp;\n&nbsp;\nPascal:\nprogram toj10000(Input, Output);\n&nbsp;\nvar\n&nbsp;&nbsp;&nbsp;&nbsp;a, b: Integer;\nbegin\n&nbsp;&nbsp;&nbsp;&nbsp;readln(a, b);\n&nbsp;&nbsp;&nbsp;&nbsp;writeln(a + b);\n&nbsp;\nend.', '#include \n\nusing namespace std;\n\nint main() {\n    int a, b;\n    cin >> a >> b;\n    cout  ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 15:31:28 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Base.php(237): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Controller/Admin/Problem.php(40): Model_Base->save()
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_Admin_Problem->action_edit()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Problem))
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 15:31:55 --- EMERGENCY: Database_Exception [ 1406 ]: Data too long for column 'source' at row 1 [ INSERT INTO `problem` (`problem_id`, `title`, `description`, `input`, `output`, `sample_input`, `sample_output`, `spj`, `hint`, `source`, `in_date`, `time_limit`, `memory_limit`, `defunct`, `accepted`, `submit`, `solved`) VALUES (NULL, '10000', '&nbsp;\nCalculate a + b.', '&nbsp;\nTwo integers a and b, separated by a space. (0&lt;=a,b&lt;=9).', '&nbsp;\nThe sum of a and b in the first line.', '5 7', '12', 0, 'Your program should always read from stdin(Standard Input), and write to stdout(Standard Output). Solutions to problem 10000 can be as follows:\n&nbsp;\nC:\n#include &lt;stdio.h&gt;\n&nbsp;\nint main() {\n&nbsp;&nbsp;&nbsp;&nbsp;int a, b;\n&nbsp;&nbsp;&nbsp;&nbsp;scanf(\"%d%d\", &amp;a, &amp;b);\n&nbsp;&nbsp;&nbsp;&nbsp;printf(\"%d\\n\", a + b);\n&nbsp;&nbsp;&nbsp;&nbsp;return 0;\n}\n&nbsp;\n&nbsp;\nC++:\n#include &lt;iostream&gt;\n&nbsp;\nusing namespace std;\n&nbsp;\nint main() {\n&nbsp;&nbsp;&nbsp;&nbsp;int a, b;\n&nbsp;&nbsp;&nbsp;&nbsp;cin &gt;&gt; a &gt;&gt; b;\n&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; a + b &lt;&lt; endl;\n&nbsp;&nbsp;&nbsp;&nbsp;return 0;\n}\n&nbsp;\n&nbsp;\nPascal:\nprogram toj10000(Input, Output);\n&nbsp;\nvar\n&nbsp;&nbsp;&nbsp;&nbsp;a, b: Integer;\nbegin\n&nbsp;&nbsp;&nbsp;&nbsp;readln(a, b);\n&nbsp;&nbsp;&nbsp;&nbsp;writeln(a + b);\n&nbsp;\nend.', '#include \n\nusing namespace std;\n\nint main() {\n    int a, b;\n    cin >> a >> b;\n    cout  ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 15:31:55 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Base.php(237): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Controller/Admin/Problem.php(41): Model_Base->save()
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_Admin_Problem->action_edit()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Problem))
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 15:34:24 --- EMERGENCY: Database_Exception [ 1406 ]: Data too long for column 'source' at row 1 [ INSERT INTO `problem` (`problem_id`, `title`, `description`, `input`, `output`, `sample_input`, `sample_output`, `spj`, `hint`, `source`, `in_date`, `time_limit`, `memory_limit`, `defunct`, `accepted`, `submit`, `solved`) VALUES (NULL, '10000', '&nbsp;\nCalculate a + b.', '&nbsp;\nTwo integers a and b, separated by a space. (0&lt;=a,b&lt;=9).', '&nbsp;\nThe sum of a and b in the first line.', '5 7', '12', 0, 'Your program should always read from stdin(Standard Input), and write to stdout(Standard Output). Solutions to problem 10000 can be as follows:\n&nbsp;\nC:\n#include &lt;stdio.h&gt;\n&nbsp;\nint main() {\n&nbsp;&nbsp;&nbsp;&nbsp;int a, b;\n&nbsp;&nbsp;&nbsp;&nbsp;scanf(\"%d%d\", &amp;a, &amp;b);\n&nbsp;&nbsp;&nbsp;&nbsp;printf(\"%d\\n\", a + b);\n&nbsp;&nbsp;&nbsp;&nbsp;return 0;\n}\n&nbsp;\n&nbsp;\nC++:\n#include &lt;iostream&gt;\n&nbsp;\nusing namespace std;\n&nbsp;\nint main() {\n&nbsp;&nbsp;&nbsp;&nbsp;int a, b;\n&nbsp;&nbsp;&nbsp;&nbsp;cin &gt;&gt; a &gt;&gt; b;\n&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; a + b &lt;&lt; endl;\n&nbsp;&nbsp;&nbsp;&nbsp;return 0;\n}\n&nbsp;\n&nbsp;\nPascal:\nprogram toj10000(Input, Output);\n&nbsp;\nvar\n&nbsp;&nbsp;&nbsp;&nbsp;a, b: Integer;\nbegin\n&nbsp;&nbsp;&nbsp;&nbsp;readln(a, b);\n&nbsp;&nbsp;&nbsp;&nbsp;writeln(a + b);\n&nbsp;\nend.', '#include \n\nusing namespace std;\n\nint main() {\n    int a, b;\n    cin >> a >> b;\n    cout  ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 15:34:24 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Base.php(237): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Controller/Admin/Problem.php(39): Model_Base->save()
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_Admin_Problem->action_edit()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Problem))
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 15:48:22 --- EMERGENCY: Database_Exception [ 1406 ]: Data too long for column 'source' at row 1 [ UPDATE `problem` SET `problem_id` = '1000', `title` = '10000', `description` = 'Calculate a + b.', `input` = '&nbsp;\nTwo integers a and b, separated by a space. (0&lt;=a,b&lt;=9).', `output` = '&nbsp;\nThe sum of a and b in the first line.', `sample_input` = '5 7', `sample_output` = '12', `spj` = 1, `hint` = '&nbsp;\nYour program should always read from stdin(Standard Input), and write to stdout(Standard Output). Solutions to problem 10000 can be as follows:', `source` = '#include \n\nusing namespace std;\n\nint main() {\n    int a, b;\n    cin >> a >> b;\n    cout  ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 15:48:22 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(3, 'UPDATE `problem...', false, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Base.php(228): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Controller/Admin/Problem.php(38): Model_Base->save()
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_Admin_Problem->action_edit()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Problem))
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 15:48:52 --- EMERGENCY: Database_Exception [ 1406 ]: Data too long for column 'source' at row 1 [ UPDATE `problem` SET `problem_id` = '1000', `title` = '10000', `description` = 'Calculate a + b.', `input` = '&nbsp;\nTwo integers a and b, separated by a space. (0&lt;=a,b&lt;=9).', `output` = '&nbsp;\nThe sum of a and b in the first line.', `sample_input` = '5 7', `sample_output` = '12', `spj` = 1, `hint` = '&nbsp;\nYour program should always read from stdin(Standard Input), and write to stdout(Standard Output). Solutions to problem 10000 can be as follows:\n&nbsp;\nC:\n#include\n&nbsp;\nint main() {\n&nbsp;&nbsp;&nbsp;&nbsp;int a, b;\n&nbsp;&nbsp;&nbsp;&nbsp;scanf(\"%d%d\", &amp;a, &amp;b);\n&nbsp;&nbsp;&nbsp;&nbsp;printf(\"%d\\n\", a + b);\n&nbsp;&nbsp;&nbsp;&nbsp;return 0;\n&nbsp;\n}', `source` = 'C:\n#include \n\nint main() {\n    int a, b;\n    scanf(\"%d%d\", &a, &b);\n    printf(\"%d\\n\", a + b);\n    return 0;\n}', `in_date` = '2016-06-19 15:39:27', `time_limit` = '1', `memory_limit` = '1', `defunct` = 'Y', `accepted` = NULL, `submit` = '0', `solved` = '0' WHERE `problem_id` = '1000' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 15:48:52 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(3, 'UPDATE `problem...', false, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Base.php(228): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Controller/Admin/Problem.php(38): Model_Base->save()
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_Admin_Problem->action_edit()
#4 [internal function]: Controller_Base->execute()
#5 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Problem))
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#9 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 16:30:59 --- EMERGENCY: Database_Exception [ 1055 ]: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'judge.solution.solution_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                WHERE result = 4
                AND problem_id = '1000'
                GROUP BY user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 16:30:59 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Solution.php(281): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Model/Problem.php(177): Model_Solution::solution_by_rank('1000', 0, 50)
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Problem.php(150): Model_Problem->best_solution(0, 50)
#4 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#10 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 16:31:07 --- EMERGENCY: Database_Exception [ 1055 ]: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'judge.solution.solution_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                WHERE result = 4
                AND problem_id = '1000'
                GROUP BY user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 16:31:07 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Solution.php(281): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Model/Problem.php(177): Model_Solution::solution_by_rank('1000', 0, 50)
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Problem.php(150): Model_Problem->best_solution(0, 50)
#4 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#10 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 17:01:56 --- EMERGENCY: Database_Exception [ 1055 ]: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'judge.solution.solution_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                WHERE result = 4
                AND problem_id = '1000'
                GROUP BY user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 17:01:56 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Solution.php(281): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Model/Problem.php(177): Model_Solution::solution_by_rank('1000', 0, 50)
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Problem.php(150): Model_Problem->best_solution(0, 50)
#4 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#10 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 17:04:47 --- EMERGENCY: Database_Exception [ 1055 ]: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'judge.solution.solution_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                WHERE result = 4
                AND problem_id = '1000'
                GROUP BY user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 17:04:47 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Solution.php(281): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Model/Problem.php(177): Model_Solution::solution_by_rank('1000', 0, 50)
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Problem.php(151): Model_Problem->best_solution(0, 50)
#4 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#10 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 17:05:15 --- EMERGENCY: Database_Exception [ 1055 ]: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'judge.solution.solution_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                WHERE result = 4
                AND problem_id = '1000'
                GROUP BY user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 17:05:15 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Solution.php(281): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Model/Problem.php(177): Model_Solution::solution_by_rank('1000', 0, 50)
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Problem.php(151): Model_Problem->best_solution(0, 50)
#4 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#10 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 17:05:27 --- EMERGENCY: Database_Exception [ 1055 ]: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'judge.solution.solution_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                WHERE result = 4
                AND problem_id = '1000'
                GROUP BY user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 17:05:27 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Solution.php(281): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Model/Problem.php(177): Model_Solution::solution_by_rank('1000', 0, 50)
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Problem.php(151): Model_Problem->best_solution(0, 50)
#4 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#10 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 17:05:48 --- EMERGENCY: Database_Exception [ 1055 ]: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'judge.solution.solution_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                WHERE result = 4
                AND problem_id = '1000'
                GROUP BY user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 17:05:48 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Solution.php(281): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Model/Problem.php(177): Model_Solution::solution_by_rank('1000', 0, 50)
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Problem.php(151): Model_Problem->best_solution(0, 50)
#4 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#10 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 17:06:03 --- EMERGENCY: Database_Exception [ 1055 ]: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'judge.solution.solution_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                WHERE result = 4
                AND problem_id = '1000'
                GROUP BY user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 17:06:03 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Solution.php(281): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Model/Problem.php(177): Model_Solution::solution_by_rank('1000', 0, 50)
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Problem.php(152): Model_Problem->best_solution(0, 50)
#4 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#10 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 17:06:34 --- EMERGENCY: Database_Exception [ 1055 ]: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'judge.solution.solution_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                WHERE result = 4
                AND problem_id = '1000'
                GROUP BY user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 17:06:34 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Solution.php(281): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Model/Problem.php(177): Model_Solution::solution_by_rank('1000', 0, 50)
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Problem.php(152): Model_Problem->best_solution(0, 50)
#4 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#10 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 17:11:54 --- EMERGENCY: Database_Exception [ 1055 ]: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'judge.solution.solution_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                WHERE result = 4
                AND problem_id = '1000'
                GROUP BY user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 17:11:54 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Solution.php(283): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Model/Problem.php(177): Model_Solution::solution_by_rank('1000', 0, 50)
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Problem.php(150): Model_Problem->best_solution(0, 50)
#4 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#10 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 17:12:30 --- EMERGENCY: Database_Exception [ 1055 ]: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'judge.solution.solution_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                WHERE result = 4
                AND problem_id = '1000'
                GROUP BY user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 17:12:30 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Solution.php(282): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Model/Problem.php(177): Model_Solution::solution_by_rank('1000', 0, 50)
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Problem.php(150): Model_Problem->best_solution(0, 50)
#4 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#10 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 17:19:54 --- EMERGENCY: Database_Exception [ 1055 ]: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'judge.solution.solution_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by [ SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                WHERE result = 4
                AND problem_id = '1000'
                GROUP BY user_id
                ORDER BY score, in_date
                LIMIT 0, 50 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251
2016-06-19 17:19:54 --- DEBUG: #0 /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT solution...', false, Array)
#1 /Users/Desmond/Sites/judge/application/classes/Model/Solution.php(282): Kohana_Database_Query->execute()
#2 /Users/Desmond/Sites/judge/application/classes/Model/Problem.php(177): Model_Solution::solution_by_rank('1000', 0, 50)
#3 /Users/Desmond/Sites/judge/application/classes/Controller/Problem.php(150): Model_Problem->best_solution(0, 50)
#4 /Users/Desmond/Sites/judge/application/classes/Controller/Base.php(254): Controller_Problem->action_summary()
#5 [internal function]: Controller_Base->execute()
#6 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Problem))
#7 /Users/Desmond/Sites/judge/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Desmond/Sites/judge/system/classes/Kohana/Request.php(995): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Desmond/Sites/judge/index.php(103): Kohana_Request->execute()
#10 {main} in /Users/Desmond/Sites/judge/modules/database/classes/Kohana/Database/Query.php:251