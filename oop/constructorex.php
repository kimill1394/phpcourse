<?php



class Calculate{
  public $tax;
  public function __construct($tax) {
    $this->tax=$tax;
  }
  public function taxCalc($price) {
    return $price*(1+$this->tax);
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
     $price = new Calculate(0.08);
     print "세금 포함 금액은 {$price->taxCalc(1000)}엔 입니다.";
      ?>
   </body>
 </html>
