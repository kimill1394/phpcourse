<?
   	//2013�� 3�� 10���� �������� ������Ͽ� ���� �� ���� ����ϱ�

   	$now_year=2013;
   	$now_month=3;
   	$now_day=10;

   	$birth_year=1990;
   	$birth_month=3;
   	$birth_day=30;

   	if($birth_month < $now_month)  
      	   $age= $now_year - $birth_year;
   	else if($birth_month == $now_month)
   	{ 
      	   if($birth_day <= $now_day)
         	$age= $now_year - $birth_year;
      	   else
         	$age= $now_year - $birth_year-1;
   	} 
   	else
      	   $age= $now_year - $birth_year-1;

   	echo "���� ��¥ : $now_year �� $now_month �� $now_day ��<br>";
   	echo "������� : $birth_year �� $birth_month �� $birth_day �ϻ�<br>";
   	echo "�� ���� : $age ��";
?>
