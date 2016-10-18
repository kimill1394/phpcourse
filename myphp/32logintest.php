<link rel="stylesheet" type='text/css' href="form.css">

<?php


// 암호화 알고리즘
// echo sha1("test")."<br>"; a94a8fe5ccb19ba61c4c0873d391e987982fbbd3
// echo sha1("wd2j")."<br>"; 50f4cb857bde1d3bc7b5e93c19f3a3eb126f6e80
// echo sha1("maplestory")."<br>"; d2fb2dc85cfac7e353d1b19686121e24ba8a8913


$users = array(
  "yjc"=>"a94a8fe5ccb19ba61c4c0873d391e987982fbbd3",
  "1501237"=>"50f4cb857bde1d3bc7b5e93c19f3a3eb126f6e80",
  "jina"=>"d2fb2dc85cfac7e353d1b19686121e24ba8a8913"
);


$script = $_SERVER['SCRIPT_NAME'];

session_start();

if(isset($_SESSION['login'])) {
  show_after_login_contents();
  exit;
}

if(isset($_POST['user'])) {
  check_login();
} else {
  show_login_form();
}

function show_after_login_contents() {

  $user = $_SESSION['login']['user'];

  echo "<h1>안녕하세요, {$user}님~~~</h1>";
  echo "<p>이 내용은 비밀글입니다. 확인 후 3초 이내로 폭발합니다</p>";

 unset($_SESSION['login']);

}

function check_login() {

  global $script, $users;

  if(empty($_POST["pass"])) {
    echo "please input password"; exit;
  }

  if(empty($_POST["user"])) {
    echo "please input user name"; exit;
  }

  $checkpass = $users[$_POST['user']];
  if (sha1($_POST['pass'])!=$checkpass) {
    echo "fail"; exit;
  }

  $_SESSION['login']=array("user"=>$_POST['user']);
  // 세션에 유저 로그인 기록

  echo "<a herf='$script'>login success</a>";

}

function show_login_form() {

  global $script;
  echo <<<LOGINFORM

  <div id='loginform'>
    <form action='$script' method='post'>
      <h3>please login</h3>
      <label>user name</label>
      <input type='text' name='user'>
      <label>password</label>
      <input type='password' name='pass'>
      <button type='submit'>login</button>
    </form>
  </div>

LOGINFORM;
}

 ?>
