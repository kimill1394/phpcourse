<meta charset="euc-kr">
<?php
   $hp = $_POST['hp1']."-".$_POST['hp2']."-".$_POST['hp3'];
   $email = $_POST['email1']."@".$_POST['email2'];

   $regist_day = date("Y-m-d (H:i)");  // ������ '��-��-��-��-��'�� ����
  //  $ip = $_SERVER['REMOTE_ADDR'];         // �湮���� IP �ּҸ� ����

  $id = $_POST['id'];
  $name = $_POST['name'];
  $nick = $_POST['nick'];
  $pass = $_POST['pass'];
  $level = 0;




   require_once "../lib/PDOmanagement.php";       // dconn.php ������ �ҷ���

   $dbo = connect();

   $sql = "select * from member where id=:id";

   $stt = $dbo->prepare($sql);
   $stt -> execute(array(':id'=>$id));
   if ($stt->rowCount()) {
     echo("<script>
             window.alert('ㄴㄴ아이디있음.')
             history.go(-1)
           </script>
         "); // history = dom element object
         exit;
   }
   else
   {
	    $sql = "insert into member(id, pass, name, nick, hp, email, regist_day, level) ";
		$sql .= "values(:id, :pass, :name, :nick, :hp, :email, :regist_day, :level)";
    $stt = $dbo->prepare($sql);
    $stt -> execute(array(':id'=>$id, ':pass'=>$pass, ':name'=>$name, ':nick'=>$nick,
    ':hp'=>$hp, ':email'=>$email, ':regist_day'=>$regist_day, ':level'=>$level));
    if ($result) {
      echo "잘 들어갔단당";
    }

   }

   $dbo = null;
   echo "
	   <script>
	    location.href = '../index.php';
	   </script>
	";
?>
