<? php


// 1) 파일열기
// - fopen()
// http://php.net/manual/en/function.fopen.php
// 파일핸들 = fopen(파일명, 열기옵션);
//  옵션
// -r : 파일 읽기모드
// -w : 파일 쓰기모드(덮어씌우기. 초기화)
// -a : 파일 추가모드(파일 포인터가 EOF로 이동됨)
// -r+, w+
// 반환값: 파일 핸들

$handle_r = fopen("old.txt","r");
$handle_w = fopen("new1.txt","w");


// 2) 파일사용


while(!feof($handle_r)){
  $line = fgets($handle_r);
  $line = str_replace("old@","new@", $line);
  fwrite($habbler_w, $line);
  }




// 3) 파일닫기

fclose($handler_r);
fclose($handler_w);

?>
