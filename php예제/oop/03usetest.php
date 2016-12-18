<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
  require_once '02Test.php';
  // 관리 용이를 위해 클래스와 php명을 같게 한다.

  $obj = new Test();
  $obj->calc(10,5);
  print "프로퍼티 값은 {$obj->number} 입니다.";
?>
  </body>
</html>
