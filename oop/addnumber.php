<?php

class addNumber{
  protected $num;
  public $ab = 3;
  public function addnum($num){
    $this->num += $num;
  }
  public function getNum() {
    return $this->num;
  }

  public function prtab() {
    print "super = ".$this->ab;
  }
}


class super extends addNumber {
  private $record;
  public $ab = 7;

  public function getRecord() {
    $this->record();
    return $this->record;
  }

  public function record() {
    $this->record = $this->num;
  }

  // public function getRecord($int) {
  //   $this->record = $int;
  //   return $this->record;
  // }

  public function prtab() {
    print "sub = ".$this->ab;
    parent::prtab();
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

     $obj = new super();

    //  $obj->addnum(30);
    // //  $obj->record();
    //  $record = $obj->getRecord();
    //  print "num = {$obj->getNum()}<br>";
    //  print "record = $record<br>";
    //
    //  $obj->addnum(100);
    // //  $obj->record();
    //  $record = $obj->getRecord();
    //  print "num = {$obj->getNum()}<br>";
    //  print "record = $record<br>";
    //
    //
    //  $record = $obj->getRecord(1);
    //  print "num = {$obj->getNum()}<br>";
    //  print "record = $record<br>";


    $obj->prtab();

      ?>
   </body>
 </html>
