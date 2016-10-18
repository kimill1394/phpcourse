<?php


require_once '12_DBManager.php';
# include(반환이 안되면 워닝!), include_once, require(반환이 안되면 에러!)
# once -> 필요없는 검사를 여러번 할 거 없이 한 번만~
# 즉, 저 파일을 딱 한번 포함하고 실행되어야만 한다는 의미의 문장임니당



try {
  $dbo=connect();
  $sql='INSERT INTO user_data VALUES(:id, :name, :zipcode, :address, :tel, :email)';
                                        # 이게 플레이스 홀더
  $pdostt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
  $pdostt->execute(array(':id'=>$_POST['id'], ':name'=>$_POST['name'], ':zipcode'=>$_POST['zipcode'], ':address'=>$_POST['address'], ':tel'=>$_POST['tel'], ':email'=>$_POST['email']));
} catch(PDOException $e) {
  exit("에러발생: {$e->getMessage()}")
}



 ?>
