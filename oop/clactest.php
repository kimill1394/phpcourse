<?php

class Test{
  public $number;

  public function calc($p1, $p2) {
    $this->number = $p1+$p2;
    // $this 현재 객체
    // -> 객체 참조 연산자
    // 객체 참조시 프로퍼티는 $ 없이
  }
}

 ?>
