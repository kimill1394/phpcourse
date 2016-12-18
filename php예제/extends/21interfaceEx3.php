<?php

require_once '19interfaceEx.php';
require_once '20interfaceEx2.php';

class SubC2 extends Super2 implements ISample{
  public function Multi ($n){
    if(self::NUM>$n){
      $this->val = $n*2;
    }else{
      $this->val = $n;
    }
  }
  public function Divi($n){
    // 기능은 없어도 몸체는 만들어야됨
    if(ISample::NUM<$n){
      $this->val = $n/2;
    }else{
      $this->val = $n;
    }
  }
}

 ?>
