<html>
<body>
<h3>�� ������ ǥ</h3>
<table border='1' width='600'>
<tr bgcolor='#ccccc' align='center'>
<td>2��</td>
<td>3��</td>
<td>4��</td>
<td>5��</td>
<td>6��</td>
<td>7��</td>
<td>8��</td>
<td>9��</td>
</tr>
<?
	for($b=1; $b<=9; $b++)
	{
	    echo "<tr align='center'>";

	    for($a=2; $a<=9; $a++)
	    {
		$c = $a * $b;

		echo "<td>{$a}x{$b}=$c</td>";
	    }
        
            echo "</tr>";
 	}
?>
</table>
</body>
</html>