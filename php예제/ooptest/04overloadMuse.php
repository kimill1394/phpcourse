<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php

require_once "03overloadEx.php";

$obj = new SampleC();
// $obj->member("문준기");
// print $obj->member()."<br>";
// $obj->member("문준기","기준문");
// print $obj->member();

$obj->test("문준기");
print $obj->test()."<br>";
$obj->test("문준기","기준문");
print $obj->test();

?>
</body>
</html>
