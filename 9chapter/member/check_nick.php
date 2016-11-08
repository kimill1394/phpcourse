<meta charset="euc-kr">
<?php
   if(!$_GET['nick'])
   {
      echo("닉네임을 입력하시오.");
   }
   else
   {
      include "../lib/PDOmanagement.php";

      try {
        $dbo = connect();
        $sql = "select * from member where nick=:nick ";
        $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
        $stt -> execute(array(":nick"=>$_GET['nick']));
        if ($stt->rowCount() > 0)
          echo "사용 중인 nick";
        else
          echo "사용 가능한 nick";

        $dbo = NULL;
      } catch (PDOExeption $e) {
        exit("에러가 발생했어요 TT");
      }
    }
?>
