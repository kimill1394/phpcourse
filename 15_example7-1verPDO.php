<?php



require_once '12_DBManager.php';



// PDO써서 7-1번 실습
try {
  $pdo = connect();
  $sql = "insert into biz_card (num, name, company, tel, hp, address)";
  $sql .= " values (:num, :name, :company, :tel, :hp, :address)";


// echo $sql;
// 235
  $stt = $pdo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
  $result = $stt->execute(array(
    ':num'=>2,
    ':name'=>'sunwoo',
    ':company'=>'miraeTec',
    ':tel'=>'031-222-2222',
    ':hp'=>'010-222-2222',
    ':address'=>'in korea'
  ));



  if ($result)
  echo "complete";
  else
  echo "TT";

  $pdo = NULL;


} catch (PDOException $e) {
  exit("err: {$e->getMessage()}");
}


 ?>
