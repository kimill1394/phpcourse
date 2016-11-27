<?php
session_start();


$_SESSION['test'] = array();
$id1 = '1stid';
$id2 = '2ndid';



$_SESSION['test']['1stid'] = ['사과', '딸기', '바나나'];
$_SESSION['test'][$id2] = ['브로콜리', '야채시렁'];



foreach ($_SESSION['test'][$id2] as $item) {
  print $item."<br>";
}

 ?>
