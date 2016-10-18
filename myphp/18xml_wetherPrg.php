<style>
  h3 {background-color: red; color: white; padding: 8px;}
</style>


<?php

$weatherDataUrl = "http://weather.livedoor.com/forecast/rss/area/400010.xml";
$saveFile = "comment.log";

$m = isset($_GET['m'])? $_GET['m']: "";
switch($m){
  case 'write':
    writeComment();
    break;
  case 'show':
    displwy();
    break;
  default:
    display();
    break;
}


function display(){
  global $weatherDataUrl;
  $info = load_log();
  $tag = date('Y-m-d');

  if (empty($info[$tag])){
    $s= trim(@file_get_contents($weatherDataUrl));
    $xml = simplexml_load_string($s);
    $list = array();
    foreach ($xml->channel->item as $val) {
      $list[] = strval($val ->title);
    }

    $info[$tag] = array("예보"=> $list);
    save_log($info);
  }
  // 준비 끝 출력 시작


  $info = array_reverse($info);
  $self = $_SERVER['SCRIPT_NAME'];

  foreach ($info as $key => $value) {
    $yohou_h = htmlspecialchars(implode("\n",$value['예보']));
    // deplode
    // split

    echo "<h3>$key</h3>";
    echo "<pre>$yohou_h</pre>";
    echo "<form action='$self' method='get'>";
    echo "<input type = 'hidden' name='m' value = 'write'>";
    echo "<input type = 'hidden' name='tag' value = '$key'>";
    echo "comment: ";
    echo "<input type = 'text' name='memo' value = ''>";
    echo "<input type ='submit' value = '쓰기'>";
    echo "</form>";

    $comment = isset($value["comment"])?$value["comment"]:array();
    foreach ($comment as $row => $value) {
      $row_h = htmlspecialchars($row);
      echo "<div>☞{$row_h}</div>";
    }
  }

}

function load_log() {

   global $savefile;

   $info = array();

   if(file_exists($savefile)) {
     $info = unserialize(file_get_contents($savefaile));


   }

   return $info;

}

function save_log($info) {
  global $saveFile;
  file_put_contents($saveFile, serialize($info));
}

function writeComment() {
  echo "쓰는 메서드";
  $info = load_log();
  $tag = isset($_GET["$tag"])?$_GET["$tag"]:"";
  $memo = isset($_GET["$memo"])?$_GET["$memo"]:"";

  if(empty($info[$tag]["comment"])) {
    $info[$tag]["comment"] = array();
  }
  $info[$tag]["comment"][] = $memo;
  save_log($info);

  header("location: ".$_SERVER['SCRIPT_NAME']);
}
 ?>
