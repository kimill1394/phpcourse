<?php

// PDO  php data objects
// php5.1버전 이후 표준
// 가볍고 고성능의 DB라이브러리
// DB객체명 = new PDO(접속문자열[,사용지ㅏ명][,ㅠㅐ스워드][,옵션]);
// $결거ㅏ(int) = $db개ㄱ체명 -> exec(sql쿼리);
// $결거ㅏ(PDOStatement) = $db개ㄱ체명 -> query(sql쿼리);

 ?>



 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>sql-test</title>
   </head>
   <body>
     <?php

        $query = isset($_GET['query'])?$_GET['query']:"";

        $q_html = htmlspecialchars($query);

        echo <<<QUERYFORM

        <form>
          <div>문장 기술:</div>
          <textarea name='query' rows='7' cols='80'> {$query} </textarea>
          <div>
            <input type='submit' value='실행'>
          </div>
        </form>


QUERYFORM;


if($query!=""){
  $host = "127.0.0.1";
  $db_name = "phptest";
  $user = "root";
  $pass = "iammanager";
  try {

    $db = new PDO("mysql:host=$host;dbname=$db_name",$user,
    $pass,
    array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8')
    // utf8로 접속한다는 옵션
    );

    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch (Exception $e) {
    echo $e -> getMessage();
  }
  try {
    $html = $head = "";
    foreach($db->query($query, PDO::FETCH_ASSOC)as $row) {
      if($head="") {
        $keys = array_key($row);
        // row는 연관배열인것으로 추정

        $head.="<tr>"; // 축약 연산자 +=과 동일
        foreach ($keys as $contents) {
          $c_html = htmlspecialchars($contests);
          $head.="<th>{$c_html}</th>";
        }
        $head.="<tr>";
      }

      $html.="</tr>";
    }
    echo "<p style='font-weight:bold; color:blue'>실행완료</p>";
    echo "<table border='1' bgcolor='#fff' cellpadding='4'>";
    echo $head.$html;
    echo "</table>";
  } catch(Exception $e) {
      echo "<div style='color: red;'>{$e->getMessage()}</div>";
  }


}

      ?>
   </body>
 </html>
