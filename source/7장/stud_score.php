<meta charset="utf-8" />
<?php
    //  $connect = mysql_connect("localhost","kdhong","1234");
    //  $dbconn = mysql_select_db("kdhong_db", $connect);
    $dsn = 'mysql:host=localhost;dbname=jinabase;';
    $user = 'jina';
    $passwd = 'jina';

    try {
      $pdo = new PDO($dsn, $user, $passwd);
      echo "입력 성공<br>";
    } catch (PDOExeption $e) {
      // exit("DB접속불가: {$e->getMessage()}");
      echo "err!";
    }

     $sql = "create table stud_score ( ";
     $sql .= "num int not null auto_increment, ";
     $sql .= "name varchar(12), ";
     $sql .= "sub1 int, ";
     $sql .= "sub2 int, ";
     $sql .= "sub3 int, ";
     $sql .= "sub4 int, ";
     $sql .= "sub5 int, ";
     $sql .= "sum int, ";
     $sql .= "avg float, ";
     $sql .= "primary key(num) )";



    //  $result = mysql_query($sql, $connect);
    $pdostt = $pdo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
    $pdostt->execute();

     if ($pdostt)
         echo "database table 'stud_score' is created!";
     else
         echo "database creation err!!!";

     $pdo = NULL;
?>
