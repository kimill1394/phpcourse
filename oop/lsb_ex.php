<?php


class LSB_A{
  public static function test() {
    print __CLASS__.": 안녕 PHP~.~ <br>";
  }
  public function testAccess() {
    static::test();
  }
}

class LSB_B extends LSB_A {
  public static function test() {
    print __CLASS__.": 안녕 PHP!.!<br>";
  }
}


 ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $a = new LSB_A();
      $b = new LSB_B();

      $a->testAccess();
      $b->testAccess();
    ?>
  </body>
</html>
