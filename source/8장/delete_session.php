<?
   session_start();

   unset($_SESSION['userid']);
   unset($_SESSION['username']);
   unset($_SESSION['time']);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
</head>
<body>
<h3>�� ������ ����</h3>
<table width="400" border="1">
<tr><td>���̵�</td><td>�̸�</td><td>����ð�</td></tr>
<tr>
    <td><?=$_SESSION['userid'] ?> &nbsp;</td>
    <td><?=$_SESSION['username'] ?> &nbsp;</td>
    <td><?=$_SESSION['time'] ?> &nbsp;</td>
</tr>
</table>
</body>
</html>
