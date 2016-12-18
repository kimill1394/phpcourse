<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
    require_once '04constructEx.php';

    $price = new Calculate(0.08);
    print "세금포함 금액은 {$price->taxCalc(1000)}엔 입니다.";
 ?>
  </body>
</html>
