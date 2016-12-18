<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php

require_once '21interfaceEx3.php';

$obj = new SubC2();

$obj->Multi(50);
$obj->show();

$obj->Divi(200);
$obj->show();

?>
</body>
</html>
