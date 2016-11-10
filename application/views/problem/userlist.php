<?php
// echo $stage_num."  ";
// var_dump ($num);
//
//
// var_dump ($num[1]['problem_id']);
//
// print_r ($left_level_problem);
// echo count($num);
// echo "dddd";
// echo "sss"."$pass_numbers"."sss";
foreach ($num as $key) {
  # code...
  echo ($key['problem_id']);
  echo "\n";
  echo ($key['title']);
  echo "\n";
  echo ($key['submit']);
  echo "\n";
  echo ($key['solved']);
  echo "\n";
  echo ($key['level']);
  echo "\n";


  // print_r ($key['problem_id']);
}
?>