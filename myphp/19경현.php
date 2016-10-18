<h3>8월의 예정</h3>
<?php
   showStyleTag();
   $yoteiArr = array(13=>"조별문화체험",14=>"조별문화체험",
                  15=>"조별문화체험",29=>"기업견학",1=>"일본도착");
   showCalender(2016,8,$yoteiArr);

   function showCalender($year,$mon,$yoteiArr){
      $dayArr = array('일','월','화','수','목','금','토');
      $colArr = array(0=>"#fff0f0",6=>"#f0f0ff");
      $cur = strtotime("$year-$mon-1");
      echo "<table>";
      for(;;){
         $cur_mon = intval(date('m',$cur));
         if($cur_mon > $mon){break;}
         $d = date("d",$cur);
         //$cur변수의 일자구하기
         $w = date("w",$cur);
         //$cur변수의 요일 구하기
         $dayName = $dayArr[$w];
         $color = isset($colArr[$w])?$colArr[$w]:"white";
         $i = intval($d);
         $yoteiStr = isset($yoteiArr[$i])?$yoteiArr[$i]:"없음";

         echo "<tr style='background-color:$color'>";
         echo "<td>$d</td><td>$dayName</td><td>$yoteiStr</td>";
         echo "</tr>";

         $cur += 24*60*60;
      }
      echo "</table>";
   }

   function showStyleTag(){
      echo <<<MYSTYLE
      <style>
         table{
            border-top:solid 1px black;
            blrder-collapse: collapse;
            border-spacing:0;
         }
         td{
            border-bottom: solid 1px black;
            padding:6px;
            margin:0;
         }
      </style>
MYSTYLE;
   }
?>
