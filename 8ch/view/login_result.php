<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="wrap_form" action="" method="post">
      <div class="view_loginuser">
        <span id='id'>
          <?php session_start();
            if (isset($_SESSION['id'])) {
              echo $_SESSION['id']; 
            } else {
              echo $_COOKIE['id'];
            }
          ?>
        </span>님, 어서오세욤~~!
      </div>
    </form>
  </body>
</html>
