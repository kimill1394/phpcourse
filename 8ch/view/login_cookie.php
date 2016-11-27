<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style media="screen">
      .table {
        border: solid black 1px;
        width: 400px;
      }
      .tr {
        width: 100px;
        margin: 30px;
        float: left;
      }
      .wrap_submit {
        margin: 30px;
        margin-left: 120px;
        margin-top: 100px;
      }
    </style>
    <?php
    require_once ('PDOmanagement.php');

    if (isset($_POST['mode'])) {
    $pdo = connect();
    $userid = $_POST['id'];
    $sql = "select * from idtable where id = :id";
    $stt = $pdo->prepare($sql);
    $stt->execute(array('id'=>"{$_POST['id']}"));
    if ($stt->rowCount()==1) {
      $sql = "select * from idtable where password = :password";
      $stt = $pdo->prepare($sql);
      $stt->execute(array('password'=>"{$_POST['password']}"));
      $row = $stt->fetch();
      if ($_POST['password']==$row[0]) {
        setcookie("id", $_POST['id'], 0, '/');
        header("location: login_result.php");
      } else {
        echo "TT undefined password";
      }
    } else {
      echo "TT undefined id";
    }
  }

     ?>
    <title></title>
  </head>
  <body>
    <form action="" method="POST">
      <div class="table">
        <div class="wrap_lavel tr">
          <div class="lavel"> ID </div>
          <div class="lavel"> PASSWORD </div>
        </div>
        <div class="wrap_input tr">
          <div class="input"><input type="text" name="id" id="id_input" value='jina'></div>
          <div class="input"><input type="password" name="password" id="password_input" value='jina'></div>
        </div>
        <br>
        <div class="wrap_submit">
          <input type="hidden" name="mode" value="login"</input>
          <input type="submit" id="input_submit" value="login">
        </div>
      </div>
    </form>
  </body>
</html>
