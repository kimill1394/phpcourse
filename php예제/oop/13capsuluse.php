<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php

require '12capsulEx.php';
$obj = new CapsulCls();
$obj->setRadius(10);
$obj->setHeight(50);
print "반지름 : {$obj->getRadius()} <br>";
print "높이 : {$obj->getHeight()} <br>";

print "원뿔의 부피 : {$obj->calcVolume()} <br>";

 ?>
</body>
</html>
