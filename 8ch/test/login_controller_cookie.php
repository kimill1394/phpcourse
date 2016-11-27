<?php
require_once ('PDOmanagement.php');


if ($_POST['mode'] == 'login') {
$pdo = connect();
$userid = $_POST['id'];
$sql = "select * from idtable where id  = '{$userid}'";
$stt = $pdo->prepare($sql);
$stt -> execute();
if ($stt->rowCount()==1) {
  $sql = "select password from idtable where id = '{$userid}'";
  $stt = $pdo->prepare($sql);
  $stt -> execute();
  $row = $stt->fetch();
  if ($_POST['password']==$row[0]) {
    setcookie("id", $_POST['id'], time()+60);
    header("location: ../view/logout_cookie.php");
  } else {
    echo "TT undefined password";
  }
} else {
  echo "TT undefined id";
}

} else if ($_POST['mode'] == 'logout') {
  setcookie("id", "");
  header("location: ../view/login_cookie.php");
}



 ?>
