<?
    $a = setcookie("userid", "kdhong");
    $b = setcookie("username","ȫ�浿", time()+60);
    
    if ($a and $b)
    {
        echo "��Ű 'userid'�� 'username' ���� �Ϸ�!<br>";
        echo "��Ű 'username'�� 60��(1��)�� ���ӵ�!";
    }
?>