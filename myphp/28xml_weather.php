<?php


// camel표기법
$weatherDataUrl = "http://weather.livedoor.com/forecast/rss/area/400010.xml";
$s = trim(@file_get_contents($weatherDataUrl));
// @에러 발생 시 오류 표시 안함
// echo $s;

$xml = simplexml_load_string($s)

// xml_load_string($s);
// // print_r($xml);


foreach ($variable as $key => $value) {
  # code...
}

$title = $xml -> channel -> title;
//echo $title;
// php내부에서 xml객체에 요소 접근하는 방법
$arrayElement = $xml -> channel -> item[3];


foreach ($xml -> channel -> item as $val)  {
  $val_title = strval($val -> title);
  echo"= $val-title<br>();
}


 ?>
