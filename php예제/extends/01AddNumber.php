<?php

class AddNumber{ // base class , 부모클래스 , 슈퍼클래스
  protected $num;
  public function add($num){
    $this->num+=$num;
  }
  public function getNum(){
    return $this->num;
  }
}
 ?>
