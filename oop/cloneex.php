<?php

class Member {
    public $id;
    public $name;
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
$a = new Member();
$b = clone $a;
print_r($a);
print"<br>";
print_r($b);
print"<hr>";
$a->id = 1004;
$a->name = "이진아";
print_r($a);
print"<br>";
print_r($b);
print"<hr>";
$b->id = 2004;
$b->name = "진아임";
print_r($a);
print"<br>";
print_r($b);
print"<hr>";
     ?>
  </body>
</html>
