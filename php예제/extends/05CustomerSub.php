<?php

require_once "04Customer.php";
class CustomerSub extends Customer{
  public function show($name,$country){
    print "이름은 {$name} 이고 <br>";
    print "국적은 {$country} 입니다. <br>";
  }
}
 ?>
