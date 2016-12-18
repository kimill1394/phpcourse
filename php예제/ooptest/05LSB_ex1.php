<?php
class LSB_A{
  public static function test(){
    print __CLASS__.': 안녕 PHP!<br>'; //__CLASS__는 현재 클래스 이름을 알 수 있다.
  }

  public function testAccess(){
    //self::test();
    static::test();
  }
}
 ?>
