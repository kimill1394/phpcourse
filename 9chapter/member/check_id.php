<meta charset="euc-kr">
<?php
   if(!$_GET['id'])
   {
      echo("아이디를 입력하시오.");
   }
   else
   {
      include "../lib/PDOmanagement.php";

      try {
        $dbo = connect();
        $sql = "select * from member where id=:id ";
        $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
        $stt -> execute(array(":id"=>$_GET['id']));
        if ($stt->rowCount() > 0)
          echo "사용 중인 ID입니다";
        else
          echo "사용 가능한 ID입니다";

        $dbo = NULL;
      } catch (PDOExeption $e) {
        exit("에러가 발생했어요 TT");
      }
    }
?>
