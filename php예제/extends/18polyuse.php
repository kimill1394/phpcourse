<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php

require_once '16polyEx2.php';
require_once '17polyEx3.php';

$obj1 = new Product();
$obj2 = new Goods();

$obj1->disp();
$obj2->disp();

$obj = new Product();
$obj->disp();
// 프로덕트가 참조 된상태지만
// 무수한 코드들이 있다는 가정하에
$obj = new Goods();
$obj->disp();
// 여러 코드 후에 굿즈가 참조된걸 모를수도 있다.

?>
</body>
</html>
