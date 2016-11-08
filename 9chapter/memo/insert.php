<?php session_start();

// if(!isset($_POST['content'])) {
//   echo " ?? ";
//   echo "<script> window.alert('내용을 입력하세요~~') history.go(-1) </script>";
//   exit;
// }

if(!isset($_SESSION['userid'])) {
  echo "<script> window.alert('로그인 후 이용하세욤'); history.go(-1); </script>";
  exit;
}

if(empty($_POST['content'])) {
  echo "<script> window.alert('내용을 입력하세요~~'); history.go(-1); </script>";
  exit;
}

$regist_day = date('Y-m-d (H:i)');

require_once "../lib/PDOmanagement.php";

$pdo = connect();

$sql = "select * from member where id=:userid";
$stt = $pdo -> prepare($sql, [PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL]);
$stt -> execute([":userid"=>$_SESSION['userid']]);
$result = $stt -> fetch();

$name = $result['name'];
$nick = $result['nick'];

$sql = "insert into memo(id, name, nick, content, regist_day)";
$sql.= "values (:userid, :name, :nick, :content, :regist_day)";

$stt = $pdo->prepare($sql, [PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL]);

$result = $stt -> execute([ ":userid"=>$_SESSION['userid'], ":name"=>$name, ":nick"=>$nick, ":content"=>$_POST['content'], ":regist_day"=>$regist_day ]);

if($result) echo "oo";
else {
  echo "TT";
  echo $_SESSION['userid']." : ".$name." : ".$nick." : ".$_POST['content']." : ".$regist_day;

}

$pdo = null;

echo "<script> location.href='memo.php'; </script>";



?>
