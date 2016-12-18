<?php

class SamCls{
  private $values = array();
  public function disp(){
    print "<pre>";
    print_r($this->values);
    // 배열의 값 출력
    print "</pre>";
  }
  // public function __set($name,$value){
  //   print "{$name}에 {$value}를 설정합니다. <br>";
  //   $this->values{$name}=$value;
  // }
  // public function __get($name){
  //   print "{$name}의 값은 {$this->values[$name]}입니다. <br>";
  //   return $this->values{$name};
  // }
}

 ?>
