<?php
echo "<div style = 'font-size: 5em; color: red;'>";
echo "1+2+3=";
echo 1+2+3;
echo "</div>";



echo "<div style = 'font-size: 5em; color: blue;'>";
echo "(1+2)*3=".(1+2)*3; // +로 연결시 연산부만 표시
echo "</div>";
 ?>

<?php
// echo "A";
echo "B"."<br/>"; // 문자열 결합은 .으로
echo "C";
echo "D"."<br/>";
// echo "E";
// echo "F";
// echo "G";
// echo "H";
echo "I"."<br/>";
# echo "J";
# 한 줄 주석 ver.php
 ?>


 <?php
echo 2*3;
echo "<br/>"; #앞이 문자열일 경우만 .으로 연결 가능
echo 2+3*4,"<br/>"; # ,로 문자열 연결 가능
echo (2+3)*4;
  ?>

  <?php
echo "<pre>";
echo 10%3;
echo "\n";  #pre태그가 없는 경우 개행되지 않음\
echo 11%3;
echo "\n";
echo 12%3;
   ?>
