<?php session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html14/loose.dtd">
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/common.css" type="text/css" media="all">
    <link rel="stylesheet" href="../css/member.css" type="text/css" media="all">
    <script type="text/javascript">

    function check_id() {
      window.open("check_id.php?id="+document.member_form.id.value , "IDcheck", "left=200, top=200, width=250, height=100, scrollbars=no, resizable=yes");
    }

    function check_nick() {
      window.open("check_nick.php?nick="+document.member_form.nick.value, "NICKcheck", "left=200, top=200, width=250, height=100, scrollbars=no, resizable=yes");
    }

       function check_input()
       {


          if (!document.member_form.pass.value)
          {
              alert("비밀번호를 입력하세욤");
              document.member_form.pass.focus();
              return;
          }

          if (!document.member_form.pass_confirm.value)
          {
              alert("비밀번호 확인을 입력하세욤");
              document.member_form.pass_confirm.focus();
              return;
          }

          if (!document.member_form.name.value)
          {
              alert("이름을 입력하세욤");
              document.member_form.name.focus();
              return;
          }

          if (!document.member_form.nick.value)
          {
              alert("닉네임을 입력하세욤");
              document.member_form.nick.focus();
              return;
          }


          if (!document.member_form.hp2.value || !document.member_form.hp3.value )
          {
              alert("휴대폰 번호를 입력하세욤");
              document.member_form.nick.focus();
              return;
          }

          if (document.member_form.pass.value !=
                document.member_form.pass_confirm.value)
          {
              alert("비밀번호가 일치하지 않네요! \n다시 입력하세요~");
              document.member_form.pass.focus();
              document.member_form.pass.select();
              return;
          }

          document.member_form.submit();
       }

       function reset_form()
       {
          document.member_form.pass.value = "";
          document.member_form.pass_confirm.value = "";
          document.member_form.name.value = "";
          document.member_form.nick.value = "";
          document.member_form.hp1.value = "010";
          document.member_form.hp2.value = "";
          document.member_form.hp3.value = "";
          document.member_form.email1.value = "";
          document.member_form.email2.value = "";

          document.member_form.name.focus();

          return;
       }
    </script>
  </head>
  <?php
      require_once "../lib/PDOmanagement.php";
      try {
        $pdo = connect();
        $sql = "select * from member where id = :id";
        $stt = $pdo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
        $stt -> execute(array(':id' => "{$_SESSION['userid']}"));
        $row = $stt -> fetch(PDO::FETCH_ASSOC);

        $hp = explode('-', $row['hp']);
        $email = explode('@', $row['email']);

        $pdo = null;

      } catch (PDOExeption $e) {
        exit(" 오류~");
      }
   ?>
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
  <?php
  			require_once "../lib/left_menu.php"
  ?>
  		</div>
  	</div> <!-- end of col1 -->
  	<div id="col2">
          <form  name="member_form" method="post" action="modify.php">
  		<div id="title">
  			<img src="../img/title_join.gif">
  		</div>

  		<div id="form_join">
  			<div id="join1">
  			<ul>
  			<li>* 아이디</li>
  			<li>* 비밀번호</li>
  			<li>* 비밀번호 확인</li>
  			<li>* 이름</li>
  			<li>* 닉네임</li>
  			<li>* 휴대폰</li>
  			<li>&nbsp;&nbsp;&nbsp;이메일</li>
  			</ul>
  			</div>
  			<div id="join2">
  			<ul>
  			<li>
  				<!-- <div id="id1"><input type="text" name="id"></div>
  				<div id="id2">
  					<a href="#">
  						<img src="../img/check_id.gif" onclick="check_id()">
  					</a>
  				</div>
  				<div id="id3">4~12자의 영문 소문자, 특수기호(_) 만 사용할 수 있습니다.</div> -->
          <?php echo $row['id']; ?>
  			</li>
  			<li><input type="password" name="pass" value="<?php echo $row['pass']; ?>"></li>
  			<li><input type="password" name="pass_confirm"></li>
  			<li><input type="text" name="name" value="<?php echo $row['name']; ?>"></li>
  			<li><div id="nick1"><input type="text" name="nick" value="<?php echo $row['nick']; ?>"></div><div id="nick2" ><a href="#"><img src="../img/check_id.gif" onclick="check_nick()"></a></div></li>
  			<li>
          <!-- <select class="hp" name="hp1">
                <option value='010'>010</option>
                <option value='011'>011</option>
                <option value='016'>016</option>
                <option value='017'>017</option>
                <option value='018'>018</option>
                <option value='019'>019</option>
                </select>  -->
                <input type="text" class="hp" name="hp1" value="<?php echo $hp[0]; ?>">
                 - <input type="text" class="hp" name="hp2" value="<?php echo $hp[1]; ?>"> - <input type="text" class="hp" name="hp3"value="<?php echo $hp[2]; ?>"></li>
  			<li><input type="text" id="email1" name="email1" value="<?php echo $email[0]; ?>"> @ <input type="text" name="email2" value="<?php echo $email[1]; ?>"></li>
  			</ul>
  			</div>
  			<div class="clear"></div>
  			<div id="must"> * 는 필수항목입니다~.~</div>
  		</div>

  		<div id="button"><a href="#"><img src="../img/button_save.gif"  onclick="check_input()"></a>&nbsp;&nbsp;
  		                 <a href="#"><img src="../img/button_reset.gif" onclick="reset_form()"></a>
  		</div>
  	    </form>
  	</div> <!-- end of col2 -->
    </div> <!-- end of content -->
  </div> <!-- end of wrap -->

  </body>
  </html>
