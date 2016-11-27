<?php




class superC1 {
  public function disp() {
    print "제품명은 미등록상태<br>";
  }
}

class Product extends superC1 {
  public function disp() {
    print "제품명은 Product입니답<br>";
  }
}

class goods extends superC1 {
  public function disp() {
    print "제품명은 goods입니닷<br>";
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


$obj1 = new Product();
$obj2 = new Goods();

$obj1->disp();
$obj2->disp();


$obj = new Product();
$obj->disp();

$obj = new Goods();
$obj->disp();


 ?>
   </body>
 </html>
