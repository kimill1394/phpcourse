<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      body {
        font-size: 28px;
        background-color: #cccccc;
      }
    </style>
  </head>
  <body>
    <h1>인치에서 센티미터로 변환하는 프로그램</h1>
    <?php

    if(isset($_POST["inch"])){
      $inch = $_POST["inch"];
      $inch = floatval($inch);

      $cm = 2.54*$inch;
      echo "<div>
        (결과) {$inch}인치 = {$cm} 센치
      </div>";
    } else {

    $self = $_SERVER["SCRIPT_NAME"]; // 현재 파일(05~)url주소
                                    // ./05unit-change.php
                                    // 닷넷에서 검색 ㄱㄱ~ 속성 다나옴
        echo "<form action='{$self}' method='post'>";
        echo "<input type='text' name='inch' value=''>";
        echo "<input type='submit' value='계산'>";
        echo "</form>";

   }
?>
  </body>
</html>
