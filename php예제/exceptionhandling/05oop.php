<<<예외처리>>>
try{
  //예외가 발생 하는 것으로 예측되는 부분
}catch(예외객체파라미터){
  //예외가 발생했을 때 실행 코트
}

프로그래머가 예외를 발생시키고 싶을때
throw new 예외클래스명();

* 예외의 최상위 클래스 : Exception *
// http://php.net/manual/kr/class.exception.php

/* 프로퍼티 */
protected string $message ;
protected int $code ;
protected string $file ;
protected int $line ;

/* 메소드 */
public __construct ([ string $message = "" [, int $code = 0 [, Throwable $previous = NULL ]]] )
final public string getMessage ( void )
final public Exception getPrevious ( void )
final public mixed getCode ( void )
final public string getFile ( void )
final public int getLine ( void )
final public array getTrace ( void )
final public string getTraceAsString ( void )
public string __toString ( void )
final private void __clone ( void )

1) 예외처리 코드 : Divide by zero

2) 예외의 カスタマイズ(커스터마이즈) : Exception 클래스를 계승한 사용자 정의
                                    예외 클래스를 작성 하는것이다.

3) php 5버전 미만 에서는
  // set_error_handler를 참조해야한다. http://php.net/manual/kr/function.set-error-handler.php

<<<Namespace>>>
이름공간 : 이름의 충돌 방지
1.정의
namespace 이름공간명;
2.이름공간에서 클래스에 대한 접근
  이름공간명\클래스명
3.이름공간의 임포트(자바를 했기 때문에 임포트란 단어를 이해하기 쉬울라고 사용해놓은것임)
// 깃허브
  use 이름공간명\클래스명;

16/11/29
반드시 폴더 구조를 따를 필요는 없지만 소스코드가 길면 관리가 힘드니까 따르는게 좋다.





























.
