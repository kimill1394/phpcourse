<?php
  //  $connect = mysql_connect("localhost","kdhong","1234");
  //  mysql_select_db("kdhong_db", $connect);
  $dsn = 'mysql:host=localhost;dbname=jinabase;';
  $user = 'jina';
  $passwd = 'jina';

  try {
    $pdo = new PDO($dsn, $user, $passwd);
    // echo 입력 성공<br>;

  } catch (PDOExeption $e) {
    // exit("DB접속불가: {$e->getMessage()}");
    echo "err!";
  }

   $sql = "delete from stud_score where num = $_GET[num]";
  //  mysql_query($sql, $connect);
  $stt = $pdo->prepare($sql);
  $stt->execute();

  //  mysql_close($connect);
  $pdo = NULL;


   Header("Location:score_list.php");
?>
