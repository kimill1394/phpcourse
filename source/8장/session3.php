<?
   session_start();

   $id = $_SESSION['userid'];
   $name = $_SESSION['username'];
   $time = $_SESSION['time'];

   $time = date('Y-m-d(H:i:s)', $time);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
</head>
<body>
<h3>�� ��ϵ� ������ ���</h3>
<table width="400" border="1">
<tr><td>���̵�</td><td>�̸�</td><td>����ð�</td></tr>
<tr>
    <td><?=$id ?></td>
    <td><?=$name ?></td>
    <td><?=$time ?></td>
</tr>
</table>
</body>
</html>
