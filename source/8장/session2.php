<?
   session_start();

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
    <td><?=$userid ?></td>
    <td><?=$username ?></td>
    <td><?=$time ?></td>
</tr>
</table>
</body>
</html>
