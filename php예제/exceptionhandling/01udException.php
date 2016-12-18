<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
// import 필요 없이 사용가능
class ZeroDivisonException extends Exception{
  public function getMessage1(){
    return "Code : ".$this->getcode(). "메시지 : ". $this->gerMessage();
  }
}
class NumberFormatException extends Exception{

}
class Division{
  public static function divider($a,$b){
    if($b===0){
      throw new ZeroDivisonException("0으로 못나눔");
    }
    if(!is_numeric($a) || !is_numeric($b)){ // is_numeric $a가 숫자인가를 물어본다.
      throw new NumberFormatException("인수는 숫자로 입력해야합니다.");
    }
    return $a/$b;
  }
}
  try {
    print Division::divider(1,0).'<br>';
  } catch (ZeroDivisonException $e) {
    print $e->getMessage();
  }catch (NumberFormatException $e){
    print $e->getMessage();
  }

?>
</body>
</html>
