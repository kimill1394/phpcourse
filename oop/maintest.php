<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    require_once "clactest.php";
    $obj = new Test();
    $obj->calc(10, 5);
    print "프로퍼티 값은 {$obj->number}입니다";
     ?>
  </body>
</html>
