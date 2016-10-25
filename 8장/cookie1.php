<?php
    $a = setcookie("userid", "jina");
    $b = setcookie("username","jina2", time()+60);
    # time() 유니스시간 = 에폭시간


    if ($a and $b)
    {
        echo "쿠키 'userid'와 'username' 생성 완료!<br>";
        echo "쿠키 'username'은 60초(1분)간 지속됨!";
    }
?>
