

<h3>8월의 예정</h3>

<?php

showStyleTag();
$yotei = array(13=>"조별문화체험", 14=>"조별문화체험", 15=>"조별문화체험", 29=>"기업견학");

showCalendar(2016,8,$yotei);


  function showCalendar($year, $month, $argyotei) {
    $dayArray = array("일", "월", "화", "수", "목", "금", "토");
    $colorArray = array(0=>"#fff0f0", 6=>"#f0f0ff");
    $cur = strtotime("$year-$month-1");
    echo "<table>";
    for (;;) {
      $cur_mon = intval(date("m", $cur));
      if($cur_mon>$month) break;
      $d = date("d", $cur);
      $w = date("w", $cur);
      //cur변수의 요일값

      $day = $dayArray[$w];
      $color = isset($colorArray[$w])?$colorArray[$w]:"white";
      $i = intval($d);
      $yoteichar = isset($argyotei[$i])?$argyotei[$i]:"없음";


      echo "<tr style = 'background-color:$color'>";
      echo "<td>$d</td><td>$day</td><td>$yoteichar</td>";
      echo "</tr>";

      $cur += 24*60*60;
    }
    echo "</table>";
  }


  function showStyleTag() {
    echo <<<MYSTYLE
    <style>
    table {
      border-top: solid 1px black;
      border-collapse: collapse;
      border-spacing: 0;
    }

    td {
      border-bottom: solid 1px black;
      padding: 6px;
      margin: 0;
    }
    </style>
MYSTYLE;
  }

 ?>
