<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php

require_once "02AddNumberSub.php";

$obj = new AddNumberSub();
$obj->add(30);
$obj->record();

$obj->add(100);

print "num = {$obj->getNum()} <br>";
print "record = {$obj->getRecord()} <br>";


 ?>
</body>
</html>
