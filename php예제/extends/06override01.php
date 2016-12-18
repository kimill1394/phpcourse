<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php

require_once "05CustomerSub.php";

$obj1 = new Customer();
$obj1->show("문준기","한국");

$obj2 = new CustomerSub();
$obj2->show("기준문","국한");

?>
</body>
</html>
