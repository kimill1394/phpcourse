<?php

class StaticCls {
  public static $pi = 3.14;
  public static function getCircleArea($radius) {
    return pow($radius, 2)*self::$pi;
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

    print "파이값! ".StaticCls::$pi."<br>";
    print "면적! ".StaticCls::getCircleArea(100);

 ?>
   </body>
 </html>
