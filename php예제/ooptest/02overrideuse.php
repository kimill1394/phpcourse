<!DOCTYPE html>
<html lang="ko">
    <head>
      <meta charset="UTF-8">
        <title></title>
    </head>
  <body>
<?php
require_once '01overrideEx.php';

$obj = new SamCls();
$obj->m1 = '문준기';
$obj->id = 1000;
// 동적바인딩 으로 추가 해놓아서 실행 됨.
print $obj->m1. "<br>";
print $obj->id. "<br>";

$obj->disp();

?>
  </body>
</html>
