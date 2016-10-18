<?php

echo "<br>".__FILE__;
  // 현재 php파일의 경로 상수

echo "<br>".dirname(__FILE__);


$target_dir = dirname(__FILE__);
$target_file = $target_dir."/test.txt";
file_put_contents($target_file, "세월은 화살과 같이 날아간다.");


$str = file_get_contents($target_file);

echo "<br> 파일로부터 읽은 내용: ".$str;


$txt = file_get_contents("old.txt");
echo "<br>$txt";
$txt = str_replace("old@yjc.ac.kr", "new@yjc.ac.kr");
echo "<br>$txt";
file_put_contents("new.txt", $txt);

 ?>
