<?php
class Calculate {
  public $tax;
  public function __construct($tax){
    $this->tax=$tax;
  }
  public function taxCalc($price){
    return $price*(1+$this->tax);
  }
}
?>
