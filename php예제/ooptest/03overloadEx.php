<?php
class SampleC{
  private $values = array();
  public function disp(){
    print "<pre>";
    print_r($this->values);
    print "</pre>";
  }
  public function __set($name,$value){
    print "{$name}에 {$value}를 설정합니다. <br>";
    $this->values{$name}=$value;
  }
  public function __get($name){
    if(!isset($this->values[$name])){
      print "{$name}는 존재 하지 않습니다.. <br>";
    }else{
      print "{$name}의 값은 {$this->values[$name]}입니다. <br>";
      return $this->values{$name};
    }
  }
  public function __isset($name){
    return empty($this->values[$name]);
    // empty $name에 내용이 없으면 true / 0이 아닌 값은 false
    // http://php.net/manual/kr/function.empty.php
  }
  public function __unset($name){
    unset($this->values[$name]);
    // 지우고 끝
  }
  public function test_0(){
    return $this->values['mem'];
  }
  public function test_1($val){
    $this->values['mem']=$val;
  }
  public function test_2($val,$val2){
    $this->values['mem']=$val.">>>>>".$val2;
  }
   public function __call($name,$param){
  //   // $name : 호출한 함수이름
  //   // $param : 인수리스트 배열
  //   if (count($param)==0) { // $name()
  //     return $this->values[$name];
  //   }else{
  //     if (count($param)==1)
  //     $this->values{$name}=$param[0];
  //     if(count($param)==2)
  //     $this->values{$name}=$param[0]." : ".$param[1];
  //     // $name($param)
  //   }
  if($name='test'){
      if(count($param)==0){
        return $this->test_0();
      }else if(count($param)==1){
        $this->test_1($param[0]);
      }else{
        $this->test_2($param[0],$param[1]);
      }
    }
  }
}
 ?>
