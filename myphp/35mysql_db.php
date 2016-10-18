<!-- 39mysql_db_chat.php -->
<?php
$script_name = $_SERVER['SCRIPT_NAME'];
$db = null;
$page_max = 3;

if(isset($_GET['id'])){
   $log_id = $_GET['id'];
}else{
   $log_id=0;
}
$query=isset($_GET['query'])?$_GET['query']:"";
$q_html = htmlspecialchars($query);

   $host="localhost";
   $db_name="phptest";
   $user="root";
   $pass="iammanager";

   try{
      $db = new PDO(
         // MYSQL 서버의 주소와 사용하려는 DB명을 지정
         "mysql:host=$host;dbname=$db_name",
         $user,
         $pass,
         // 문자코드를 utf-8로 설정하여 접속하는 옵션
         array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
         );
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }catch(Exception $e){
      echo $e->getMessage();
   }

$create_query = <<<CREATE_QUERY
   CREATE TABLE IF NOT EXISTS chatlog(
   log_id int(8) PRIMARY KEY,
   name varchar(30),
   body varchar(100),
   ctime int(30)
   );
CREATE_QUERY;
$db->exec($create_query);

echo "<link type='text/css' rel='stylesheet' href='chat.css'>
   <h3>채팅 예제</h3>
   <form action='$script_name' method='GET'>
   <div id='chatform'>
      이름 : <input type='text' name='name' size='8' />
      내용 : <input type='text' name='body' size='40' />
      <input type='hidden' name='id' value='$log_id' />
      <input type='submit' value='쓰기' />
      </form>";

if(isset($_GET['name']) && isset($_GET['body'])){
   if($_GET['name']=="" || $_GET['body']==""){
      echo "<p> 이름과 본문을 반드시 입력하시오.</p>";
      exit;
   }
   $insert_query="INSERT INTO chatlog(log_id,name,body,ctime)";
   $insert_query.="values(?,?,?,?)";
   $stmt=$db->prepare($insert_query);
   $r = $stmt->execute(
      array($log_id,
            $_GET['name'],
            $_GET['body'],
            time()));
   if($r==false){
      echo "insert failed".$db->errorInfo();
      exit;
   }
   $log_id++;
   header("loaction:".$_SERVER['SCRIPT_NAME']."?id=$log_id");
   exit;
}
$offset = isset($_GET['offset'])?intval($_GET['offset']):0;
$limit = $page_max+1;
$select_query = <<< SQL
   SELECT * FROM chatlog
   ORDER BY log_id DESC
   LIMIT {$limit} OFFSET $offset;
SQL;

$stmt = $db->query($select_query);
$rows = $stmt->fetchAll();
$pager='';
if($offset>0){
   $prev=$offset-$page_max;
   $pager="[<a href='$script_name?offset=$prev&id=$log_id'>이전</a>]";
}
if(count($rows)>$page_max){
   array_pop($rows);
   $next=$offset + $page_max;
   $pager.="[<a href='$script_name?offset=$next&id=$log_id'>다음</a>]";
}
foreach($rows as $row){
   $name = htmlspecialchars($row['name']);
   $name = htmlspecialchars($row['body']);
   $ctimt = date("H:i:s",$row['ctime']);
   echo "<div>$ctime: $name &gt&gt; $body</div>";
}
if($pager != ""){
   echo "<p>$$pager</p>";
}
?>
