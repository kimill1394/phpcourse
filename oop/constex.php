<?php

class ConstCls {
  const PI = 3.14;
  public static function getCircleArea($radius) {
    return pow($radius, 2)*self::PI;
    // 객체 생성 이후에는 객체로 접근 가능한가? -> 27line
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

print "클래스 정수(상수) PI =".ConstCls::PI."<br>";

$obj = new ConstCls();
print "클래스 정수(상수) PI =".$obj::PI."<br>"; # ABLE 3.14
print "클래스 정수(상수) PI =".$obj->PI."<br>"; # ERROR

      ?>
   </body>
 </html>
