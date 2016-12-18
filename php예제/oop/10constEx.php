<?php

class ConstCls{

  const PI/*관례로 대문자가 좋음*/ = 3.14;
  public static function getCircleArea($radius){
    return pow/*몇승*/($radius,2)*self::PI;
  }
}

 ?>
