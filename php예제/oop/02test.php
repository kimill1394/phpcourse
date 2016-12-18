<?php
  class Test {
    public $number;

    public function calc($p1,$p2){
      $this->number=$p1+$p2;
      // $this : 현재 자신 객체
      // -> : 객체 참조연산자
      // 객체 참조시 프로퍼티앞에 $ 안적음
    }
  }
  # instanceof : $객체핸들변수 instanceof 클래스명  
 ?>
