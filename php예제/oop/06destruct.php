<?php

class DestructCls {
  public $num1;
  public $num2;
  public function __construct($a,$b){
    $this->num1=$a;
    $this->num2=$b;
  }
  public function __destruct(){
    print "인스턴스가 파기되었음.";
  }
}

 ?>
