<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<?
    $connect = mysql_connect("localhost","kdhong","1234");
    mysql_select_db("kdhong_db", $connect);

    $sql = "insert into biz_card (num, name, company, tel, hp, address)";
    $sql .= " values (1, '������', '�̷�����', '031-276-1829', ";
    $sql .= " '010-8723-2837', '��⵵ ���ν� �Ű��� 388-23 ����')";

    $result = mysql_query($sql);

    if ($result) 
	echo "���ڵ� ���� �Ϸ�!";
    else
	echo "���ڵ� ���� ����! ���� Ȯ�� ���!";

    mysql_close($connect);
?>