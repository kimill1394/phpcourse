<?php
require_once "11A2.php";
class B2 extends A2{
  public $lastName;
  public function __construct($firstName,$lastName){
      parent::__construct($firstName);
      $this->lastName=$lastName;
  }
}
 ?>
