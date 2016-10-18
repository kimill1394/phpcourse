

<h3>8월의 예정</h3>
<?php
  showStyleTeg();
  $yotei = array(13 => "조별문화체험",14 => "조별문화체험",
                 15 => "조별문화체험",29=>"기업견학");
  showCalendar(2016,8,$yotei);

  function showCalendar($year,$month,$plan){
    $dayarray = array("일","월","화","수","목","금","토");
    $color = array(0 =>"#fff0f0",6 =>"#f0f0ff");
    $cur = strtotime("$year-$month-1");
    echo "<table>";
    for(;;){
      $cur_mon = intval(date("m",$cur));
      if($cur_mon > $month){break;}
      $d = date("d",$cur);
      $w = date("w",$cur);
      $day = $dayarray[$w];
      $colorstr = isset($color[$w])?$color[$w]:"white";
      $i = intval($d);
      $planstr = isset($plan[$i])?$plan[$i]:"없음";
      echo "<tr style = 'background-color:$colorstr'>";
      echo "<td>$d</td><td>$day</td><td>$planstr</td>";
      echo "</tr>";
      $cur +=24*60*60;
    }
    echo "</table>";
  }
  function showStyleTeg(){
    echo <<<MYSTYLE
    <style>
      table{
        border-top:solid 1px black;
        border-collapse:collapse;
        border-spacing:0;
      }
      td{
        border-bottom:solid 1px black;
        padding:6px;
        margin:0;
      }
    </style>
MYSTYLE;
  }
?>
