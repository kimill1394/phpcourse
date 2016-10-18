<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        if (isset($_POST['weight'])) {
          $tall = $_POST["tall"];
          $weight = $_POST["weight"];

          $BMI = $weight/pow($tall, 2);
          $BMI = round($BMI, 2);
          $avgW = ($tall-100)*0.9;
          $fat = $weight/$avgW*100;
          $fat = round($fat, 2);
          echo "<div>
            (결과) BMI지수는 {$BMI}이고, 비만도는 {$fat}이다.
          </div>";
        } else {
          $self = $_SERVER["SCRIPT_NAME"];
          echo "<h1>키와 몸무게를 입력하세욥</h1>";
          echo "<form action='{$self}' method='post'>
           <input type='text' name='tall'>
           <input type='text' name='weight'>
           <input type='submit' value='계산'>
           </form>";
        }
     ?>


  </body>
</html>
