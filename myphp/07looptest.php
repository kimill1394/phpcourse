<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      body {
        font-size: 28px;
        background-color: #CCC;
      }
    </style>
  </head>
  <body>
    <form class="" method="get">
        <select class="" name="year">
          <option>생년을 선택하시오</option>
          <?php
            $this_year = date("Y");
            $end_year = $this_year-100;
            $y = $this_year;

            while ($y >= $end_year) {
              echo "<option value='$y'> 서기{$y}년</option>";
              $y--;
            }
           ?>
        </select>
        <input type='submit' value="계산"/>
   </form>
        <?php
          if(isset($_GET['year']))
            echo "올해".($this_year-intval($_GET['year']))."세입니다";

         ?>
  </body>
</html>
