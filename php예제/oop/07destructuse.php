<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php

  require_once "06destruct.php";
  $obj = new DestructCls(200,1.234);
  print "num1 = {$obj->num1}"."<br>";
  print "num2 = {$obj->num2}"."<br>";

 ?>
</body>
</html>
