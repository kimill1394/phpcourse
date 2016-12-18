<<<Reference : 참조>>>
1) 프리미티브 변수의 참조
&연산자를 사용

2) 배열의 참조
함수의 인수
  가인수 (카리히키스우 , 카비키스우 , parameter , formal parameter) : 함수 정의시
  실인수 (지츠히키스우 , agument , actual argument) : 함수 호출시

함수에서 가인수에 실인수가 전달될 때 방식 : 2가지
1> call by value
   네와타시 , 아타이와타시
2> call by reference
   산시요우와타시

3) 인스탄스의 참조
$obj1 = new TestCls();
$obj2 = $obj1;
$obj3 = &$obj1;

TestCls의 인스탄스 <------#obj1
            ^              ^
            |              |
          $obj2          $obj3
* 참조 카운터 : 인스탄스를 참조하는 변수의 갯수를
               저장 , 0가되면 인스탄스는 파기 된다. *

4)인스탄스의 복사 : cloone $인스탄스참조변수;

5) 순환참조 : 인스탄스가 자신의 인스탄스를 참조하는 경우
$a = new TestCls();
$a->self = $a; // 순환참조
...
$a = null; // $a가 파기된 상태 입니다.
           // 참조카운터가 0가 아니라서 파기가 안된다.
           // php 5.3이상 , 순환참조 콜렉터가 구현되어 있다.
           // unset을 이용하여 명확히 파기하는 것을 추천한다.
           











































.
