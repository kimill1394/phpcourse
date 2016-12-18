<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
require_once '03instanceRef.php';
print '$a= new TestTest()를 실행합니다.<br>';
$a = new TestTest();
print '$b= $a를 실행합니다.<br>';
$b = $a;
print 'unset($a)를 실행합니다.<br>';
unset($a);
print 'unset($b)를 실행합니다.<br>';
unset($b);
?>
</body>
</html>
