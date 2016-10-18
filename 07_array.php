<?php





$dessert = array('cake', 'jelly');
$dessert[2] = 'applejuice';

foreach ($dessert as $dessertValue) {
  # code...
  echo "<div style='color: cyan'> {$dessertValue}가 먹고싶</div>";
}

// foreach ($variable as $key => $value) {
//   # code...
// }



 ?>


<!--
3. 연관배열 (連想配列)
인덱스가 문자열로 key로 작용
key와 valueㅢ 쌍으로 저장되ㅡㄴ 형태
a 선언과 초기화
$배열이름 = array(키1=>값1 ...); -->

<?php


$arrStudent = array( '1500001'=>'이진아',
                     '1500002'=>'김첨지',
                     '1500003'=>'설렁탕',
                     '1500004'=>'이진우',
                     '1500005'=>'왕청주');


foreach($arrStudent as $stdnumber => $stdname) {
  echo "<div style='color: magenta'>학번: <span style='background-color: yellow'>{$stdnumber}</span>의 학생 이름은 <b>{$stdname}</b>입니다.</div>";
}



 ?>
