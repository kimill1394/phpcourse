<?   
	$tel = "010-2777-3333";

	$num_tel = strlen($tel);                      // ���ڿ��� ���� ���
	
	echo "strlen() �Լ� ��� : $num_tel<br>";
	
	$tel1 = substr($tel, 0, 3);                    // �տ��� �� ���ڸ� ������
	$tel2 = substr($tel, 4, 4);		       // �� ��° ���ڿ��� �� ���� ������
	$tel3 = substr($tel, 9, 4);		       // ��ȩ ��° ���ڿ��� �� ���� ������

	echo "substr() �Լ� ��� : $tel1 $tel2 $tel3<br>";

        $phone = explode("-", $tel);            	// ������(-)�� �������� ���ڿ� �и�

	echo "explode() �Լ� ��� : $phone[0] $phone[1] $phone[2]<br>";
?>