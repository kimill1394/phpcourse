<?php



show_header();
show_form();
show_footer();




function show_header() {
  $color = isset($_GET['color'])? htmlspecialchars($_GET['color']): "#FFF";
  echo "<html><body bgcolor='$color'>";

}

function show_footer() {
  echo "</body></html>";
}

function show_form() {
  $colorArr = array("red"=>"#f00", "green"=>"#0f0", "blue"=>"#00f", "white"=>"#fff");
  echo "<form>";
  foreach($colorArr as $colorName => $colorValue) {
    echo make_radio_btn($colorName, $colorValue);
  }
  echo "<input type='submit' value='색 변경'>";
  echo "</form>";
}

function make_radio_btn($cName, $cValue) {
  return <<<RADIO
  <input type='radio' id='$cName' name='color' value='$cValue'>
  <label form='$cName'>$cName</label>
RADIO;
}



 ?>
