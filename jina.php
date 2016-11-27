<!-- <?php

$link = mysql_connect("localhost", "jina", "jina");
mysql_select_db("jinabase");
$result = mysql_query("select * from member");
while($array = mysql_fetch_array($result)) {
  echo $array['id'];
}
mysql_close($link);

 ?> -->



<!-- <?php

$dns = "mysql:host=localhost;dbname=jinabase";
$pdo = new PDO($dns, "jina", "jina");
$stt = $pdo->prepare("select * from member where id = :id",
          array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
$stt->execute(array(":id"=>'sh'));
while ($result = $stt->fetch(PDO::FETCH_ASSOC)) {
echo $result['id'];
}

?> -->


<?php



?>
