<?php





function connect() {

  $dsn = 'mysql:host=localhost;dbname=jinabase;';
  $user = 'jina';
  $passwd = 'jina';
  
  try {
    $pdo = new PDO($dsn, $user, $passwd);
  } catch (PDOExeption $e) {
    $pdo = null;
  }

  return $pdo;
}

 ?>
