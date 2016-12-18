<?php

class CapsulCls {

  const PI = 3.14;
  private $radius; // 반지름
  private $height; // 높이

  public function setRadius($r){
    $this->radius=$r;
  }
  public function setHeight($h){
    $this->height=$h;
  }
  // Setter의 정의
  public function getRadius($r){
      return $this->radius;
  }
  public function getHeight($h){
      return $this->height;
  }
  // Getter의 정의
  public function calcVolume(){
    $area = pow($this->radius,2)*self::PI;
    return $area*$this->height/3;
  }
  // 원뿔의 부피
}
 ?>
