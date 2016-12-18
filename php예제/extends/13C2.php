<?php
require_once "12B2.php";
class C2 extends B2{
  public $age;
  public function __construct($firstName,$lastName,$age){
      parent::__construct($firstName,$lastName);
      $this->age=$age;
  }
  public function show(){
    print "firstName = {$this->firstName} <br>";
    print "lastName = {$this->lastName} <br>";
    print "age = {$this->age} <br>";
  }
}
 ?>
