<?php
class TestRefCount {
  public function __construct() {
    print __CLASS__."인스턴스가 생성됨<br>";
  }
  public function __destruct() {
    print __CLASS__."인스턴스가 파기됨<br>";
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
print "a = new Test()을 실행<br>";
$a = new TestRefCount();
print "b = a를 실행<br>";
$b = $a;
print "unset(a) 실행<br>";
unset($a);
print "unset(b) 실행<br>";
unset($b);


      ?>
   </body>
 </html>
