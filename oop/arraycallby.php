<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

function array_val($array) { // call by value
  $array[0]*=2;
  $array[1]*=2;
  // print_r("val: ".$array."<br>"); # ERR! 배열밖에 안 들어가는 함수였음 TT
}

function array_ref(&$array) { // call by reference
  // 왜 여기가 &지?
  $array[0]*=2;
  $array[1]*=2;
  // print_r("ref: ".$array."<br>");
}


$a = 10;
$b = 20;
$array = array($a, $b);

// array_val($array);
array_ref($array);

print $a."<br>";
print $b."<br>";
print_r($array);


     ?>
  </body>
</html>
