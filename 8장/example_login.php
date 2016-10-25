<?php
session_start();

require_once 'PDOmanagement.php';



$masterid='';
$masterpass='';


if(isset($_POST['id'])) {
  checklogin();
} else {
  viewloginform();
}



function checklogin() {
  global $masterid;
  global $masterpass;
  $userid = $_POST['id'];
  $userpass = $_POST['password'];

  getmasterinfo();


  if ($masterid == $userid) {
    if ($masterpass == $userpass) {
      $_SESSION['id'] = $userid;
      $_SESSION['password'] = $userpass;
      header('Location: http://127.0.0.1/phpcourse/8%EC%9E%A5/logincomplete.php');
      } else {
      echo "비밀번호를 다시 확인해주세요~";
    }
  } else
    echo "아이디를 다시 확인해주세요~";

}





function getmasterinfo() {
  global $masterid;
  global $masterpass;

  $dbo = connect();

  $sql = 'select * from idtable';
  $pdostt = $dbo->prepare($sql);
  $pdostt->execute();

  while($row = $pdostt->fetch()) {
    $masterid = $row['id'];
    $masterpass = $row['password'];
  }

}






function viewloginform() {
  // $self = $_SERVER['SCRIPT_NAME'];
  echo <<<HTMLLOGINFORM
<form method='POST' action=''>
  <!-- <table>
    <tr>
      <td> ID </td>
      <td><input type='text' name='id'></td>
    </tr>
    <tr>
      <td> PASSWORD </td>
      <td><input type='password' name='password'></td>
    </tr>
    <tr>
      <td></td><td><input type='submit'></td>
    </tr>
  </table> -->
  <div class="wrap_table">
    <div class="wrap_tr">
      <div class="lavel"> ID </div>
      <div class="input"><input type="text" name="id" id="id_input"></div>
    </div>
    <div class="wrap_tr">
      <div class="lavel"> PASSWORD </div>
      <div class="input"><input type="password" name="password" id="password_input"></div>
    </div>
    <div class="wrap_tr wrap_submit">
      <input type="submit" id="input_submit">
    </div>
  </div>

<form>
HTMLLOGINFORM;

}

 ?>
