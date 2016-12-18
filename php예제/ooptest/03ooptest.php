3. php에서의 オーバーロード(오버로딩)
オーバーロード(오버로딩) : 메소드 처리를 상황에 따라 다른 처리가 가능하도록
                         프로파티나 메소드를 동적으로 작성하기 위한 것
* Magic Method
  이름 , 파라미터(パラメーター) , 반환 , 호출 , 타이밍만 정해진 함수
  내용은 없음 => 프로그래머가 내용 작성을 해야 함
  // http://php.net/manual/kr/language.oop5.magic.php *

__construct() : 생성된 객체 반환
__destruct() : 소멸되었을 때

* __call() , __callStatic() [중요]
* __get() , __set()
* __isset() , __unset()

// isset : 변수의 내용이 셋팅이 되어 있는가
// unset : 변수의 값을 제거

__sleep() , __wakeup() , __toString() , __invoke()
__set_state() , __clone() and __debugInfo()

1) 정의하지 않은 프로파티의 처리
__get() , __set() ,
__isset() , __unset()

2) 정의 하지 않은 메소드의 처리 : Method Overloading
__call() , __callStatic()
 일반메소드   정적메소드

3) Late Static Bindings : 지연 정적 Binding
__CLASS__ : 현재의 클래스명을 저장한 변수
스코프지정자            스코프                 사용가능 장소
클래스명::           지정한클래스                클래스안 , 밖
self::           self::작성된 클래스            클래스안
parent::       parent::작성한 スーパー클래스     サブ클래스
static::        직근(直近)의 비전송호출 클래스    클래스안




































>
