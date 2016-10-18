<?php





function connect() {


  $dsn = 'mysql:host=localhost;dbname=jinabase;';
  $user = 'jina';
  $pass = 'jina';




  try {
    $pdo = new PDO($dsn, $user, $pass);
  } catch (PDOException $e) {
    exit("DB접속불가: {$e->getMessage()}");
  }

  return $pdo;


}



 ?>
