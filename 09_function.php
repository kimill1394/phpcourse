<!-- function 기능, 함수

 함수의 사용 목적
- 재사용성
- 유지보수성
- 소스 가독성

 사용하기 위해서? 선 정의 후 사용!

 함수의 정의(def)
function 함수이름(인수, 인수...) {
  내용;
  return 반환값;
}

 함수의 사용
함수이름(인수); -> 인수에는 argument/parameter가 있다ㅎㅎ
인수들은 함수블록 내에서 지역변수로서 역할함

 변수 사용영역
지역변수: 특정 블럭 내부에서만 사용될 수 있는 변수
전역변수: global변수라고도 하며 블럭 외부에서 사용 가능
          $_GET 등등
          혹은 global 키워드를 사용한!
 -->



<?php


function LeeJinA($max, $min) {
  $total = $min+$max;
  return $total;
}


$avalue = 2;
$bvalue = 70;

$result = LeeJinA($avalue, $bvalue);
echo "{$result}입니다.";


$globalvalue;

function variable() {

}

 ?>
