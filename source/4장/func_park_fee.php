<?
   	function cal_fee1($day, $age)       // �Ϲ� ����� ��� ���ϱ�
   	{
      	    if ( $day == "�ְ�" )
      	    {
	        if ($age> 12 && $age < 65)
        	    $money = 26000;
                else
             	    $money = 19000;
       	    }
      	    else
	    {
         	if ($age> 12 && $age < 65)
             	    $money = 21000;
         	else
             	    $money = 16000;
      	    }
      
      	    return $money;
   	}

   	function cal_fee2($day, $age)       // �����̿�� ��� ���ϱ�
   	{
      	    if ( $day == "�ְ�" )
      	    {
         	if ($age> 12 && $age < 65)
             	    $money = 33000;
            	else
             	    $money = 24000;
      	    }
      	    else
      	    {
         	if ($age> 12 && $age < 65)
             	    $money = 28000;
         	else
             	    $money = 21000;
      	    }
      
      	    return $money;
   	}

   	function cal_fee3($age)       // 2�� �����̿�� ��� ���ϱ�
   	{
       	    if ($age> 12 && $age < 65)
          	$money = 55000;
       	    else
          	$money = 40000;

      	    return $money;
   	}

   	function cal_fee4($age)       // �޺�� ��� ���ϱ�
   	{
   	    if ($age> 12 && $age < 65)
          	$money = 54000;
       	    else
          	$money = 40000;

      	    return $money;
   	}

   	// $category�� 1=> �����, 2=> �����̿��, 3=> 2�� �����̿��, 4=> �޺�� �ǹ�

   	$category = 1;       // ����� ����� ���ϰ��� ��
   	$age = 13;
   	$day = "�߰�";

   	if( $category == 1 )
       	    $fee = cal_fee1($day, $age);

   	elseif ( $category == 2 )
            $fee = cal_fee2($day, $age);

   	elseif ( $category == 3 )
       	    $fee = cal_fee3($age);

   	else
       	    $fee = cal_fee4($age);

      
   	if( $category == 1 )
       	    $cat = "�Ϲ� �����";

   	elseif ( $category == 2 )
       	    $cat = "�����̿��";

   	elseif ( $category == 3 )
       	    $cat = "2�� �����̿��";
        else
       	    $cat = "�޺��";

   	echo "���� : $cat<br>";

	if ($category == 1 || $category==2)
	    echo "�� : $day<br>";
   	
	echo "���� : $age ��<br>";
   	echo "����� : $fee ��";
?>