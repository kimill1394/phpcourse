<?php session_start();

if(isset($_SESSION['userid'])) {
  echo "<script> window.alert('로그인 후 이용하세욤'); history.go(-1); </script>";
  exit;
}

if(empty($_POST['ripple_content'])) {
  echo "<script> window.alert('내용을 입력하세요~~'); history.go(-1); </script>";
  exit;
}


?>
