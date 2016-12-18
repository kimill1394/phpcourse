<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php

require_once "08staticEx.php";
print "파이값 = ". StaticCls1::$pi."<br>";
print "원의면적 = ". StaticCls1::getCircleArea(100)."<br>";

 ?>
</body>
</html>
