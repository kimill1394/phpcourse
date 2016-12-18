<?php
require_once "07A.php";
class B extends A{
  public function show(){
    print 'B클래스의 show()메소드 실행 <br>';
    parent::show();
  }
}
 ?>
