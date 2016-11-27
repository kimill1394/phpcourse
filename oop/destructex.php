<?php

class DestructCls {
  public $num1;
  public $num2;
  public function __construct($a, $b) {
    $this->num1 = $a;
    $this->num2 = $b;
  }
  public function __destruct() {
    print "인스턴스 파기되었음~.~";
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

        $obj = new DestructCls(200, 1.234);
        print "num1 = {$obj->num1}"."<br>";
        print "num2 = {$obj->num2}"."<br>";
     ?>
   </body>
 </html>


<?php

print "파기 언제 되는 지 볼까욤ㅎ.ㅎ<br>";


 ?>
