<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/common.css" media="screen" title="no title">
    <link rel="stylesheet" href="../css/member.css" media="screen" title="no title">
  </head>
  <body>
    <div id="wrap">
  		<div id="header">
  	    <?php require_once "../lib/top_login2.php" ?>
  		</div>  <!-- end of header -->

  		<div id="menu">
  		<?php require_once "../lib/top_menu2.php" ?>
  		</div>  <!-- end of menu -->
      <div id="content">
        <div id="col1">
        <div id="left_menu">
          <?php require_once "../lib/left_menu.php"; ?>
        </div>
        </div>
        <div id="col2">
          <form action="login.php" name="member_form" method="post">
            <div id="title"><img src="../img/title_login.gif" alt=""></div>
            <div id="login_form">
              <img src="../img/login_msg.gif" alt="" id="login_msg">
              <div class="clear"></div>
              <div id="login1"><img src="../img/login_key.gif" alt=""></div>
              <div id="login2">
                <div id="id_input_button">
                  <div id="id_pw_title">
                    <ul>
                      <li><img src="../img/id_title.gif" alt=""></li>
                      <li><img src="../img/pw_title.gif" alt=""></li>
                    </ul>
                  </div>
                  <div id="id_pw_input">
                    <ul>
                      <li><input type="text" name="id" class="login_input"></li>
                      <li><input type="password" name="pass" class="login_input"></li>
                    </ul>
                  </div>
                  <div id="login_button">
                    <input type="image" src="../img/login_button.gif">
                  </div>
                </div>
                <div class="clear"></div>
                <div id="login_line"></div>
                <div id="join_button">
                  <img src="../img/join_button.gif" alt="">&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="../member/member_form.php"><img src="../img/join_button.gif" alt=""></a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
