<?php
require_once ('../model/PDOmanagement.php');


if ($_POST['mode'] == 'login') {
$pdo = connect();
$userid = $_POST['id'];
$sql = "select * from idtable where id = :id";
$stt = $pdo->prepare($sql);
$stt->execute(array('id'=>"{$_POST['id']}"));
if ($stt->rowCount()==1) {
  $sql = "select * from idtable where password = :password";
  $stt = $pdo->prepare($sql);
  $stt->execute(array('password'=>"{$_POST['password']}"));
  $row = $stt->fetch();
  if ($_POST['password']==$row[0]) {
    setcookie("id", $_POST['id'], 0, '/');
    /* 쿠키를 만들 때 경로를 지정하지 않으면 다른 디렉토리에서 사용하는 경우 찾을 수 없음
    * 어디에 만들고 어떤 원리로 찾는지는 차후 조사하겠음!
    */

    header("location: ../view/logout_cookie.php");

  } else {
    echo "TT undefined password";
  }
} else {
  echo "TT undefined id";
}


} else if ($_POST['mode'] == 'logout') {
  setcookie("id", "", 0, '/');
  header("location: ../view/login_cookie.php");
}



 ?>
