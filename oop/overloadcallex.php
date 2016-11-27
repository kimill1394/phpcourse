


<?php

class SampleC {
  private $values = array();
  public function disp() {
    print "<pre>";
    print_r($this->values);
    print "</pre>";
  }
  public function __set($name, $value) {
    $this->$value[$name]=$value;
  }
  public function __get($name) {
    if(!isset($this->values[$name])) print "{$name}은/는 존재한다<br>";
    else print "{$name}의 값은 {$this->values[$name]}<br>";
  }
  public function __isset($name) {
    // isset과 empty는 동작이 다른데 어떻게 이렇게?
    // 있지만 비어있는 경우를 처리하기 위해서는?
    // 실제 isset은 어떻게 생겼낭ㅁ
    return empty($this->values[$name]);
    # 있으면 false 없으면 true
  }
  public function __unset($name) {
    unset($this->values[$name]);
  }
  public function __call($name, $param) {
    // 함수이름, 배열
    // if (count($param) == 0)
    //   return $this->values[$name];
    // else {
    //   if (count($param) == 1)
    //     $this->values[$name]=$param[0];
    //   else if (count($param) == 2)
    //     $this->values[$name]=$param[0]." : ".$param[1];
    // }

    if($name='test') {
      if(count($param) == 0) $this->test_0();
      else if (count($param) == 1) $this->test_1($param[0]);
      else if (count($param) == 2) $this->test_2($param[0], $param[1]);
    }
  }

  public function test_0() {
    print_r($this->values["mem"]."<br>"); # 이건 되고
    // return $this->values["mem"]; # 이건 왜 안되지욤? >> 리턴이 어디로 되겠니 바부야 ㅎ.ㅎ
  }

  public function test_1($val) {
    $this->values["mem"]=$val;
  }

  public function test_2($val1, $val2) {
    $this->values["mem"]=$val1." >>>>> ".$val2;
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

     $obj = new SampleC();
     $obj->test("김영진");
     $obj->test();
     $obj->test("김영진", "이영진"); # __Call = member / 매개변수 = param(array)
     $obj->test();



      ?>
   </body>
 </html>
