<?
   session_start();

   echo "���� ����!!!<p>";

   $_SESSION['userid'] = "kdhong";
   $_SESSION['username']  = "ȫ�浿";
   $_SESSION['time']    = time();   // time()�� ���� �ð�

   echo '3���� ���� ���� ��� �Ϸ�!!!<br>';

   echo $_SESSION['userid']."<br>";
   echo $_SESSION['username']."<br>";
   echo $_SESSION['time']."<br>";
?> 
