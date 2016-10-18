
<?php


$pass = file_get_contents("./pw.txt");
$hashed_pw = sha1($pass);

echo "<br>$pass";
echo "<br>$hashed_pw";

$salt = "eajfioqjqdplq21498jsq";
$pass_salt = $pass.$salt;
$hashed_pw2 = hash("sha512", $pass_salt);

echo "<br>$hashed_pw2";
 ?>
