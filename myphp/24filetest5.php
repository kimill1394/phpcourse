<?php


$savefile = dirname(__FILE__)."/msg.txt";
$master_pw = 'alphago';

if(isset($_POST['msg'])) {


  $pass = isset($_POST['pass'])?$_POST['pass']:"";
  if ($pass != $master_pw) {
     echo " 틀림";
     exit;
   }

   file_put_contents($savefile, $_POST['msg']);
   echo "저장완료";
   header("Location: http://127.0.0.1/myphp/25filetodayboard_read.php");

} else {


  $self = $_SERVER['SCRIPT_NAME'];
echo <<< FORM
  <form class="" action="$self" method="POST">
    <textarea name="msg" rows="10" cols="60">
      여기에 메시지를 입력하시오.
    </textarea><br>
    패스워드: <input type="password" name="pass" value="">
    <input type="submit" name="name" value="기록">
  </form>

FORM;
}



 ?>
