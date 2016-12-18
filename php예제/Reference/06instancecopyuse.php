<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php

require_once '05instancecopy.php';

$a = new Member();
$b = clone $a; // 인스탄스의 복사
// $b = $a; // 참조의 복사
// Member 인스탄스1 : $a , 2 $b
$a->id = 101;
$a->name = '문준기';
//$b = clone $a;
print '<br>';

var_dump($a==$b);
var_dump($a===$b);

print_r($a);
print '<br>';
print_r($b);

$b->id = 102;
$b->name = '기준문';
// print_r($a);
// print '<br>';
// print_r($b);
?>
</body>
</html>
