<?php

require_once "01AddNumber.php";

class AddNumberSub extends AddNumber{
  private $record;

  public function getRecord(){
    return $this->record;
  }
  public function record(){
    $this->record = $this->num;
    // 부모의 모든 멤버를 받아왔기 때문에 사용가능
  }
}

 ?>
