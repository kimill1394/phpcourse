<?php


if(isset($_POST['mode']) {

} else {
  show_main_form();
}




function show_main_form() {

  $script=$_SERVER['SCRIPT_NAME'];


  echo <<<MAINFORM

  <div name='main_form_top' style='display: right; height: 15px'>
    <input type='submit'
  </div>

MAINFROM;


}






 ?>
