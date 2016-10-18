<?php


$num = array(15, 3, 9, 7, 6, 12, 19, 30, 28, 26);
$count = count($num);

echo "=== 정 렬 전 ===";

echo "<br>";
foreach ($num as $value) {
  echo "{$value} ";
}
echo "<br>";


# first sorting
$startPoint = 1;
for ($i=0; $i<$count; $i++) {
  for ($j=$startPoint; $j<$count; $j++) {
    if ($num[$i]>$num[$j]) {
      $temp = $num[$i];
      $num[$i] = $num[$j];
      $num[$j] = $temp;
    }
  }
  $startPoint++;
}############################ 교재의 버블정렬은 startpoint대신 i를 사용!


echo "<br>";
echo "=== 정 렬 후 ===";

echo "<br>";
foreach ($num as $value) {
  echo "{$value} ";
}

 ?>
