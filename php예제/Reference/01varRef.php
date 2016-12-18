<?php

$a=10;
$b = &$a;
$c = $a;
$b = 50;
$b = &$c;

print $a."<br>";
print $b."<br>";
print $c."<br>"."<br>";

$d = 10;
// 진짜 원리로는 바로 d로가는게 아니라 다른 방에 들어갔다가.
$e = 20;
$num = &$d;
print $num."<br>";
$num = &$e;
print $num."<br>";
$num = 30;

print $d."<br>";
print $e."<br>";
print $num."<br>";

 ?>
