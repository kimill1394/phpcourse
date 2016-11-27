<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/phpcourse/8ch/model/PDOmanagement.php';

$pdo = connect();


if($_POST['mode']=='login') {
  $sql = "select * from idtable where id = :id";
  $stt = $pdo->prepare($sql);
  $stt->execute(array('id'=>"{$_POST['id']}"));
  if ($stt->rowCount()==1) {
    $sql = "select * from idtable where password = :password";
    $stt = $pdo->prepare($sql);
    $stt->execute(array('password'=>"{$_POST['password']}"));
    if($stt->rowCount()==1) {
      $_SESSION['id'] = $_POST['id'];
      $_SESSION['password'] = $_POST['password'];
      header("location: ../view/logout_session.php");
    } else {
      echo "PASSWORD TT";
    }
  } else {
    echo "ID TT";
  }
}
else if ($_POST['mode']=='logout') {
  session_destroy();
  header("location: ../view/login_session.php");
}
?>
