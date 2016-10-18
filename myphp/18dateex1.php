<?php


date_default_timezone_set("Asia/Seoul");
// date.timzone = Asia/Seoul로 되 있으면 안 해도 도ㅚㅁ
// UNIX Epoch(POSIX)시간 = 리눅스 표준 시간

$now = time();
echo $now;

function show_div($color, $str) {

$str = htmlspecialchars($str);
echo "<div style = 'color:$color;'>$str</div>";
}


show_div("red", date("y/m/d", $now));
show_div("red", date("h:i:s", $now));
show_div("blue", date("y-m-d", $now));
show_div("blue", date("y년 m월 d일", $now));
show_div("cyan", date("y년 m월 j일", $now));
show_div("green", date("H시i분s초", $now));
show_div("blown",date("y/m/d l", $now));
show_div("cyan", date("c", $now));
show_div("cyan", date("r", $now));


 echo date("Y-m-d H:i:s")."<br>";
 echo strftime("%Y-%m-%d %H:%M:%S")."<Br>";


$today = time();
$result = $now+3*24*60*60;

echo "오늘은 ".date("Y년m월d일", $today)."<br>";
echo "3일 후는 ".date("Y년m월d일", $result)."<br>";

$result = $today-5*24*60*60;

echo "5일 전은 ".date("Y년m월d일", $result)."<br>";


// strtotime()
// maketime()




 ?>
