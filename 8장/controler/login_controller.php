<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/phpcourse/8장/model/PDOmanagement.php';

$pdo = connect();


// 아이디가 적절한지 검사하고
$sql = "select * from idtable where id = '{$_POST['id']}'";
$stt = $pdo->prepare($sql);
$stt->execute();
if ($stt->rowCount()==1) {
  $sql = "select * from idtable where password = '{$_POST['password']}'";
  $stt = $pdo->prepare($sql);
  $stt->execute();
  if($stt->rowCount()==1) {
    echo "yes!!";
    $_SERSSION['id'] = $_POST['id'];
    $_SERSSION['password'] = $_POST['password'];
  } else {
    echo "PASSWORD TT";
  }
} else {
  echo "ID TT";
}
// 비밀번호가 적절한지 검사하고

// 세션을 생성!

// 결과 페이지로 이동시켜두림

 ?>
