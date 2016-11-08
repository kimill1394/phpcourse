<?php
session_start();
if(!isset($_POST['id'])) {
  echo "<script> window.alert('아이디를 입력하세요') history.go(-1) </script>";
  exit;
}
if(!isset($_POST['pass'])) {
  echo "<script> window.alert('비밀번호를 입력하세요') history.go(-1) </script>";
  exit;
}

require_once "../lib/PDOmanagement.php";
$pdo = connect();
$sql = "select * from member where id = :id";
$stt = $pdo->prepare($sql);
$stt -> execute(array(":id"=>$_POST['id']));
$num_match = $stt->rowCount();

if(!$num_match) {
  echo "<script> window.alert('등록되지 않은 아이디입니다'); history.go(-1); </script>";
}
else {
  $row = $stt->fetch();
  $db_pass = $row['pass'];

  if ($_POST['pass']!=$db_pass) {
    echo "<script> window.alert('비밀번호가 틀립니다'); history.go(-1); </script>";
    exit;
  } else {
    $userid = $row['id'];
    $username = $row['name'];
    $usernick = $row['nick'];
    $userlevel = $row['level'];

    $_SESSION['userid'] = $userid;
    $_SESSION['username'] = $username;
    $_SESSION['usernick'] = $usernick;
    $_SESSION['userlevel'] = $userlevel;

    echo "<script> location.href='../index.php'</script>";
  }
}

?>
