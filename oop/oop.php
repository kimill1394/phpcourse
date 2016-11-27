2004년 php5부터 객체지향 php 대응

1. 클래스 정의: 멤버를 가짐
class 클래스명 {
  $프로퍼티1;
  $프로퍼티2;
  ...
  $프로퍼티n;

  메소드1{실행처리...}
  ...
  메소드n{실행처리...}

  새성자{
    실행처리...
  }

  소멸자{
    실행처리...
  }
}


2. 프로퍼티 정의
  access $pro;
    public 완전공개: 클래스 외 내부에서 접근 가능
    protected 자식공개: 클래스 내부와 자식(서브, 상속받은)클래스 접근 가능
    private 비공개: 클래스 내부에서만 접근 가능
    default 있긴 한데 안 알랴줌

3. 메소드 정의
  access function method($param...) {
    ...
  }

4. 클래스 사용
  객체 생성
    $instance = new class();
    $instance : 주소 연산자!
  멤버 접근
    -> arrow 연산자
  메소드 호출
    $instancs->method($param)

5. 생성자/소멸자
  1) 생성자: 인스턴스될 때 반드시 호출, 미정의 시 빈 생성자가 호출됨
      public function __construct($param...) {}
  2) 소멸자: 인스턴스가 파기되었을 때 후처리를 수행, 리소스(메모리 자원)의 릴리즈(해방) 수행
      public function __destruct(){}
      php 코드를 다 읽고 나면 모든 객체를 자동으로 삭제하는 것 같습니다욤 ㅎ.ㅎ


6. 정적멤버: static
  1) 정적 프로퍼티: public static $pro_name = value;
  2) 정적 메서드: public static function method_name ($param_list...) {}
    >> 인스턴스화 하기 전에 클래스 이름으로 접근 가능
            클래스명::정적멤버로 접근!! 클래스 내부에서는 self::정적멤버!
    >> 인스턴스에서 값이 공유된다
    >> 정적 메서드 내에서는 정적 프로퍼티만($this 안됨~) 사용할 수 있다

7. 클래스 정수(객체 상수)
  const 정수명 = 값;
  1) 정수명 앞에 $를 붙이지 않는다
  2) acess 수식자가 없음, 대신 acess 수식자를 self::정수명으로 사용
    define() 일반 php 코딩 사용
    const: 클래스 내에서 상수 정의 사용

8. encapsulation (카푸세루카) 프로퍼티를 외부에서 함부로 접근하지 못하도록 하는 것
  private 사용 (프로퍼티, 메서드 모드 사용 가능!)
  getter/setter 메서드








+++++



php에서 오-바-로-도
: 메서드 처리를 상황에 따라 다른 처리가 가능하도록 프로퍼티나 메소드를 동적으로 작성하기 위함
          * Magic Method: 이름, 파라메-타-, 반환, 호출 타이밍만 정해진 함수
                내용은 없음 => 프로그래머가 내용을 작성해야 한다 ㅎ.ㅎ
                language.oop5.magic.php
                __construct, __destroduct, __call() 등등...

                call, callStatic, get, set, isset, unset(프로퍼티 제겋)
                get-set: 없는 프로퍼티를 추가-읽을 때 자동으로 불리는~.~ 호호!
                정의하지 않은 메서드의 처리 call(일반 메서드) callStatic(정적 메서드)

                late static bindings 지연 정적 바인딩

                __CLASS__ : 현재의 클래스명 저장한 변수
                스코프 지정자         스코프                 사용가능장소
                클래스명::        지정한 클래스              클래스 안,밖
                self::        self::가 작성된 클래스           클래스 안
                parent::      가 작성한 클래스의 부모        서브클래스 안
                static::   직근直近의 비전송호출 클래스         클래스 안





reference 참조
1) 변수 참조 & 연산자 ㅎ.ㅎ
2) 배열의 참조
  함수의 인수
      가인수 (카리히키스우, 카비키스우, parameter, formal parameter): 함수 정의
      실인수 (지츠히키스우, argument, actual argument): 함수 호출
  함수에서 가인수에 실인수가 전달될 때
      call by value (네와타시, 아타이와타시)
      call by reference (산쇼우와타시)
3) 인스턴스의 참조
$obj1=new TestCls();
$obj2=$obj1;
$obj3=&$obj1;
객체 <- onj1, 2
obj2 <- obj3

참조카운터ㅣ 인스턴스를 참조하는 변수의 갯수를 저장하며 0이되면 인스턴스는 파ㅣㄱ됨


4) 인스턴스의 복사 clone 복사할인스ㅌㄴ스

5) 순환참조: 인스턴스가 자신의 인스턴스를 참조
$a = new TestCls();
$a->self = $a;
$a = null; // 순환참조에 의해 참조카운터가 0이 아니라 파기안됨 5.3이상







예외처리

try {
  예외가 발생할것으로 예측되는 구문
} catch (예외객체파라미터) {
  예외가 발생했을 때 실행코드
}
프로그래머가 예외를 발생시키고 싶을 때 throw new 예외클래스();

예외의 최상의 클래스: Exception

예외처리 코드 Divide by Zero
예외의 커스터마이즈

5미만 set_error(exception)_handler()






Namespace
이름공간: 이름의 충돌방지

namespace 이름공간명;
<!-- 이거라도 ㅠㅠ좀 열심히 외우세욤... -->
이름공간명\클래스명
use 이름공간명\클래스명;
