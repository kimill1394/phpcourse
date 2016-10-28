<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/phpcourse/8장/model/PDOmanagement.php';

$pdo = connect();


if($_POST['mode']=='login') {
  $sql = "select * from idtable where id = '{$_POST['id']}'";
  $stt = $pdo->prepare($sql);
  $stt->execute();
  if ($stt->rowCount()==1) {
    $sql = "select * from idtable where password = '{$_POST['password']}'";
    $stt = $pdo->prepare($sql);
    $stt->execute();
    if($stt->rowCount()==1) {
      $_SESSION['id'] = $_POST['id'];
      $_SESSION['password'] = $_POST['password'];
      header("location: ../view/logout.php");
    } else {
      echo "PASSWORD TT";
    }
  } else {
    echo "ID TT";
  }
}
else if ($_POST['mode']=='logout') {
  session_destroy();
  header("location: ../view/login.php");
}
?>
