<?php


$dsn = 'mysql:host=localhost;dbname=jinabase;';
$user = 'jinsa';
$pass = 'jina';




try {
  $pdo = new PDO($dsn, $user, $pass);
  print "예이~~~~";
} catch (PDOException $e) {
  exit("DB접속불가: {$e->getMessage()}");
}





$pdo = NULL;


 ?>
