<?php session_start();

$hp = $_POST['hp1']."-".$_POST['hp2']."-".$_POST['hp3'];
$email = $_POST['email1']."@".$_POST['email2'];
$register_day=date("Y-m-d (H:i)");

require_once "../lib/PDOmanagement.php";

$sql = "update member set pass='{$_POST['pass']}', name='{$_POST['name']}', ";
$sql.= "nick='{$_POST['nick']}', hp='$hp', email='$email', regist_day='$register_day' where id='{$_SESSION['userid']}'";
$pdo = connect();
$stt = $pdo->prepare($sql);
$stt->execute();

$pdo = null;

echo "<script> location.href='../index.php'</script>";



?>
