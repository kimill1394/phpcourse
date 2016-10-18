<?php

$self = $_SERVER['SCRIPT_NAME'];
if(isset($_GET['size'])) {
  $size = intval($_GET['size']);
  if ($size < 12 || $size > 72) {
    echo "사이즈 지정 오류 발생"; exit;
  }

  // setcookie(var, value[, 유효기간] [, 경로][,도메인][,보안][http만 사용여부]);



$expire = time()+(24*60*60)*365;
// 유효기간 1년 지정

setcookie("size", $size, $expire);
// 쿠키삭제는 유효기간($expire)를 과거로 설정

  // 쿠키특징
  // 대개 4096bytes만 기록가능
  // 저장시 20개정도 갯수제한
  // 보안에 취약(위조 가능성이 높다)



  header("location:".$self);
  exit;
}


$size = 26;
if(isset($_COOKIE['size'])) {
  $size = intval($_COOKIE['size']);
}



echo<<<FORM

<html>
  <body style= 'font-size: $size'>
  <div style = 'background-color: yellow; text-align:rigth;'>
  문자크기:[<a href='$self?size=71'>대</a>]
  [<a href='$self?size=40'>중</a>]
  [<a href='$self?size=13'>소</a>]
  </div>
FORM;

 ?>

 <p><으먈저;ㅔ[>ㅓㅁㄷ조ㅑㄷㅇ애ㅑ멎어ㅐㅑ더야매ㅑㅇ저ㅐ엊댱머쟈읖맏ㅈ애ㅔㅇ,ㅁ자애ㅏ애]</p>
 <p><으먈저;ㅔ[>ㅓㅁㄷ조ㅑㄷㅇ애ㅑ멎어ㅐㅑ더야매ㅑㅇ저ㅐ엊댱머쟈읖맏ㅈ애ㅔㅇ,ㅁ자애ㅏ애]</으먈저;ㅔ[></p>
 <p><으먈저;ㅔ[>ㅓㅁㄷ조ㅑㄷㅇ애ㅑ멎어ㅐㅑ더야매ㅑㅇ저ㅐ엊댱머쟈읖맏ㅈ애ㅔㅇ,ㅁ자애ㅏ애]</p>
 <p><으먈저;ㅔ[>ㅓㅁㄷ조ㅑㄷㅇ애ㅑ멎어ㅐㅑ더야매ㅑㅇ저ㅐ엊댱머쟈읖맏ㅈ애ㅔㅇ,ㅁ자애ㅏ애]</으먈저;ㅔ[></p>
 <p><으먈저;ㅔ[>ㅓㅁㄷ조ㅑㄷㅇ애ㅑ멎어ㅐㅑ더야매ㅑㅇ저ㅐ엊댱머쟈읖맏ㅈ애ㅔㅇ,ㅁ자애ㅏ애]</p>
 <p><으먈저;ㅔ[>ㅓㅁㄷ조ㅑㄷㅇ애ㅑ멎어ㅐㅑ더야매ㅑㅇ저ㅐ엊댱머쟈읖맏ㅈ애ㅔㅇ,ㅁ자애ㅏ애]</으먈저;ㅔ[></p>
 <p><으먈저;ㅔ[>ㅓㅁㄷ조ㅑㄷㅇ애ㅑ멎어ㅐㅑ더야매ㅑㅇ저ㅐ엊댱머쟈읖맏ㅈ애ㅔㅇ,ㅁ자애ㅏ애]</p>
 <p><으먈저;ㅔ[>ㅓㅁㄷ조ㅑㄷㅇ애ㅑ멎어ㅐㅑ더야매ㅑㅇ저ㅐ엊댱머쟈읖맏ㅈ애ㅔㅇ,ㅁ자애ㅏ애]</으먈저;ㅔ[></p>
</body>
</html>
