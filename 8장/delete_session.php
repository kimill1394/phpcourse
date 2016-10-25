<?php
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
<h3>세션 삭제</h3>
<table width="400" border="1">
<tr><td>id</td><td>name</td><td>time</td></tr>
<tr>
    <td><?php if(isset($_SESSION['userid'])) $_SESSION['userid']; ?>&nbsp;</td>
    <td><?php if(isset($_SESSION['userid'])) $_SESSION['username']; ?>&nbsp;</td>
    <td><?php if(isset($_SESSION['userid'])) $_SESSION['time']; ?>&nbsp;</td>
</tr>
</table>
</body>
</html>
