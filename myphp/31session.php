<?php


// session?

session_start();
// 세션정보삭제
// unset($_SESSION["변수명"]);


$list =  array(
  "금가방"=>300,
  "은지갑"=>150,
  "진주피어스"=>120,
  "다이야반지"=>250
);

echo "<h3>상품리스트</h3><ul>";

$self = $_SERVER['SCRIPT_NAME'];
foreach ($list as $key => $value) {
  $p = urlencode($key);
  echo "<li><a href='$self?p=$p'>$key({$value}만원)</a></li>";
}
echo "</ul>";



if(isset($_GET['p'])) {
  $item = $_GET['p'];




  if(!isset($list[$item])) {
    echo "선택한 상품은 구매할 수 없음";
    exit;
  }
  $history = array();
  if(isset($_SESSION['history'])) {
    $history = $_SESSION['history'];
  }
  $history[] = array("item"=>$item, "time"=>time());
  // 2차원 연관배열

  $_SESSION['history']=$history;
  echo "<h2>구매상품: $item</h2>";
}


if(isset($_SESSION['history'])) {
  echo "<h3>구매이력</h3>";
  $history=$_SESSION['history'];
  foreach($history as $value) {
    $name = $value["item"];
    $time = date("m/d H:i:s", $value["time"]);
    $price=$list[$name];
    echo "<li>$time: $name({$price}만원)</li>";
  }
  echo "</ul>";
}
 ?>
