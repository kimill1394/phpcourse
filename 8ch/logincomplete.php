
<?php
session_start();


if(isset($_GET['logout'])) {
  session_destroy();
  header('location: example_login.php');
} else {
  viewform();
}




function viewform() {
echo <<< HTMLFORM
    <div class = 'welcome'>
      <span id='id'> {$_SESSION['id']} </span> 님, 어서오세욤~
    </div>
    <div class="wrap_form">
      <form>
        <input type="submit" value="logout" name="logout">
      </form>
    </div>
HTMLFORM;
}
?>
