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
    <title></title>
  </head>
  <body>
    <form action="../controler/login_controller.php" method="POST">
      <div class="table">
        <div class="wrap_lavel tr">
          <div class="lavel"> ID </div>
          <div class="lavel"> PASSWORD </div>
        </div>
        <div class="wrap_input tr">
          <div class="input"><input type="text" name="id" id="id_input"></div>
          <div class="input"><input type="password" name="password" id="password_input"></div>
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
