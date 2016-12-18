<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php

require_once '06LSB_ex2.php';
$a = new LSB_A();
$b = new LSB_B();
$a->testAccess();
// 사용목적 : 제일 가까운 a의 정적 메서드 호출(직근)
$b->testAccess();
// 사용목적 : 제일 가까운 b의 정적 메서드 호출(직근)
?>
</body>
</html>
