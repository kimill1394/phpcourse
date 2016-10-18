<?php


$goods = array("치약", "충전기", "수건", "우산", "여권", "전원어댑터", "멀티탭", "공유기", "랜선", "개념", "돈");


if (isset($_GET['goods'])) {
  show_form();
  show_item();
} else {
  show_form();
}


function show_form () {
  global $goods;
  // 글로벌 선언, 외부에 있는 요소를 어떤 메서드 내부에서 쓸 수 있도록~
  $options = "";

  foreach($goods as $v) {
    $options .= "<option value='{$v}'>{$v}</option>";
    // 문자열 덧셈
  }
  echo <<<EF
  <form>
    <select name = 'goods'>
    <option>구매 희망 상품 선택</option>
    {$options}
    </select>
    <input type = 'submit' value="구매">
  </form>
EF;
}

function show_item () {
  $goods = $_GET["goods"];
  $goods_html = htmlspecialchars($goods);
  echo "상품<{$goods}>을/를 구매함";
}




 ?>
