<?php

class TestTest {
  public function __construct(){
    print __CLASS__ .'인스탄스가 생성됩니다. <br>';
  }
  public function __destruct(){
    print __CLASS__ .'인스탄스가 파기됩니다. <br>';
  }
}

 ?>
