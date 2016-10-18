<?php


$i = 1;
if($i == 1) echo "1입니다";
if($i == 2) echo "2"."입니다";
if($i == 3) echo "3"."입니다";



$v = 102;
if ( $v%2 == 0 && $v%3 == 0 )
  echo "<br>{$v}는 2의 배수이고 3의 배수입니다.";


$v = 50;
$v = $v+20;
echo "<br>{$v}";
$v = 50;
# echo "<br>{$v+20}"; err!
echo "<br>{$v}";

$point = 12;
$point++;
echo "<br>{$point}";



$a = 30;
echo "<br>".++$a;


$a = 6;
$a*=108;
echo "<br>".$a;

 ?>
