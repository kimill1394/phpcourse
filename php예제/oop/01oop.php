2004년 php5부터 객체지향 php대응
1. 클래스 정의 : 멤버를 가짐

class 클래스명 {
  $프로파티1;
  ...
  $프로파티n;

  메소드1{실행처리...}
  ...
  메소드n{실행처리...}

  생성자{
    실행처리...
  }
  소멸자{ //$dbo=NULL
    실행처리...
  }

}

2. 프로파티 정의
   아쿠세스수식자 $프로파티명;

아쿠세서(access)수식자)

1) public : 클래스내외부에서 접근가능(사용가능)
2) protected : 클래스내, 자식클래스(서브,상속받은)에서 접근가능
3) private : 클래스내에서만 접근가능

3. 메소드 정의
아쿠세스수식자 function 메소드명(파라메타리스트){
  실행처리...
}
4. 클래스 사용
1) 인스턴스화 : 객체 생성
  $인스턴스핸들변수(객체핸들-참조-변수) = new클래스명();
  $obj1 = new Test();
  $obj2 = &obj1; // $ -주소연산자

  obj1 ----> 10번지 : Test객체
  10번지                ^
                        |
                        |
  obj2  ----------------|
  10번지

2) 멤버 접근 (->: arrow 연산자)
1> 프로퍼티접근
    $인스턴스핸들변수 -> 프로파티명; // $없음 주의
2> 메소드 호출
    $인스턴스핸들변수 -> 메소드명(인수리스트);

5. 생성자/소멸자(constructor/destructor)

1) 생성자(constructor) : 인스턴스 될 때 반드시 호출, 미정의시 빈 생성자가 호출된다.

public function __construct(파라미터리스트){
       // 호출은 'new 클래스명();' 으로 한다.
  실행처리...
}
// 161110

2) 소멸자 : 인스턴스가 파기 되었을 때 후 처리를 수행
            리소스(resource , 메모리 자원)의 해방(릴리즈,release)을 수행
public function __destruct(){
  //후처리 : resource release
}

6. 정적 멤버 : static
   특징
    - 인스턴스화 하기 전에 클래스의 이름으로 접근 가능
        (클래스명::정적멤버, self::정적멤버)
    - 인스턴스에서 공유 된다.
    - 정적메소드 내에서는 정적멤버만 사용 가능
1) 정적 프로파티 : public stati $프로파티명 = 값;
  ex> public static $pi = 3.14
2) 정적 메소드 :
   내부에서 $this 사용 불가, 정적프로파티만 사용가능
   public static function 정적메소드(파라메타리스트){
   // 실행처리
}

7. 클래스 정수(객체정수) / 자바(static,final)
  const 정수명 = 값;
1)정수명 앞에 $ 없음
2) 엑세스 수식자가 없음
3) 엑세서는 self:: 정수명으로 사용

# define() : 일반 php 코딩시 사용
  const : 클래스내에서 상수 정의 사용

  * 객체지향 3대장 : 캡슐화 , 다형성 , 인캡슐레이션(? , 간접적) *

8. encapsulation (카푸세루카 , 캡슐화)

프로파티를 외부에서 함부로 접근 하지 못하게 함

1) private $프로파티명; // private한 메소드도 정의
2) Getter/Setter 메소드





























.
