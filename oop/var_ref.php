<?php

$a = 10;
$b = &$a;
$c = $a;
$b = 50;
// $c = $a;   # 50
// $b = &$c;  # 10


print $a."<br>";
print $b."<br>";
print $c."<br>";



 ?>
