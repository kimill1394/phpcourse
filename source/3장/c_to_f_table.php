<?
    	echo "
	    <html>
            <body>
            <h5>�� ������ ȭ���� ����</h5>
            <table border='1'width='300'>   
	    <tr align='center'><td width'150'>����</td><td>ȭ��</td></tr>
	    ";

    	for ($c=-15; $c<=35; $c=$c+5)
    	{
       	    $f = $c * 9 / 5 + 32;
       	    echo "<tr align='center'><td>$c</td><td>$f</td></tr>";
	}

 	echo "
	     </table>
	     </body>
	     </html>
	";
?>


