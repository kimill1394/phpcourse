<?php

$param = "";
  if(isset($_GET["param"])) $param = $_GET["param"];
  switch($param) {
    case "big-qr": show_qrcode(300); break;
    case "small-qr": show_qrcode(150); break;
    default: show_form(); break;
  }

  function show_form()
  {
    echo <<<END_FORM
    <form>
    <h3>QR코드로 변환하고 싶은 문자열과 이미지 크기 설정</h3>
    <input type='text' name='url'>
      <select name = 'param'>
        <option value="big-qr"> 크게 </option>
        <option value="samll-qr"> 작게 </option>
      </select>
      <input type ='submit' value = 'qr코드생성'>
    </form>
END_FORM;
// here document
  }

  function show_qrcode($size) {
    $url = urlencode($_GET['url']);
    $api = "http://chart.apis.google.com/chart?cht=qr&";
    $src = $api."chs={$size}x{$size}&chl={$url}";
    echo "<img src='$src'/>";
  }
 ?>
