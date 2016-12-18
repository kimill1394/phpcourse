<?php
namespace exceptionhandling\preject\module;
// namespace 선언
// namespace관리를 위해 폴더구조로 작성해줘야한다.
// 이폴더 안에 preject\module 파일을 복사해서 넣어줘야된다.

class SamCls1{
  public function show(){
    print '이름공간 : ['.__NAMESPACE__.']'.'<br>';
    // __FILE__ (파일 업로드,파일 경로 이름),
    // __CLASS__ (클래스 경로 이름),
    //  __NAMESPACE__(네임스페이스 경로 이름)
  }
}

 ?>
