<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="wrap_form" action="../controler/login_controller.php" method="post">
      <div class="view_loginuser">
        <span id='id'><?php session_start(); echo $_SESSION['id']; ?></span>님, 어서오세욤~~!
      </div>
      <div class="wrap_btn">
        <input type="submit" value="logout">
        <input type="hidden" name="mode" value="logout">
      </div>
    </form>
  </body>
</html>
