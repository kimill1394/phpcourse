<?php

class CapsuleCls {
  const PI = 3.14;
  private $radius;
  private $height;

  public function setRadius($r) {
    $this->radius = $r;
  }
  public function setHeight($h) {
    $this->height = $h;
  }


  public function getRadius() {
    return $this->radius;
  }
  public function getHeight() {
    return $this->height;
  }

  public function calVolum(){
    $area = pow($this->radius, 2)*self::PI;
    return $area*$this->height;
  }
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
$obj = new CapsuleCls();
$obj->setRadius(10);
$obj->setHeight(50);
print "반지름:<t> {$obj->getRadius()}<br>";
print "높이:<t> {$obj->getHeight()}<br>";
print "부피:<t> {$obj->calVolum()}<br>";


     ?>
  </body>
</html>
