<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>form tag example</title>
    <style>
      body { font-size: 28px; }
    </style>
  </head>
  <body>
    <?php
        $q = $_GET["q"];
        // 클라이언트가 get방식으로 요청한 요청정보를 저장하는 배열 $_GET[]
        // = 연관배열
        // post방식은 $_POST[]

        $q_html = htmlspecialchars($q);
        // 특수문자를 html엔티티로 변환
        // 표시를 위해서는 해 주느 ㄴ게 좋음~~~
        // 사실 없어도 됨니다 왜지??

        echo "<div>{$q_html}씨, 안녕하세욥</div>";
     ?>
  </body>
</html>
