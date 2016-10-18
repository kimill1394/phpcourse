<!-- php는 변수선언 없이 바로 정의해 사용
     단, 변수 이름 앞에는 $가 있어야 함!
     $variable                          -->



<?php
$name = "이진아";
$age = 23;
$hobby = "所説を読む";
$image = "http:/www.oyegraphics.com/o/babies/babies_069.img";


echo "<html><body style = 'font-size: 36px;'>\n";
echo "<h3>자기소개</h3>";

echo "<img src='$image' width='300'/><br>";
echo "<ul>";
echo "<li>이름:  {$name}</li>";
echo "<li>나이:  {$age}</li>";
echo "<li>취미:  {$hobby}</li>";
echo "</ul>";
echo "</body></html>";

 ?>


 <?php

$message = "하이욤";
echo $message;

$message = $message." 테스트";
echo $message;


$사과가격 = 1600;
$사과갯수 = 3;
$바나나가격 = 1200;
$바나나갯수 = 6;
$사람수 = 3;
$세율 = 0.07;
$값 = $사과가격*$사과갯수+$바나나가격*$바나나갯수;
$세금 = $값*$세율;

$총금액 = $값+$세금;
$와리깡 = $총금액/$사람수;

echo "<br>합계는 {$총금액}원, 일인당 {$와리깡}원입니다.";



$str = '3.14';
$v = 2*$str;
echo $v;
  ?>
