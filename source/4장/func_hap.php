<?
    	// hap($a, $b) �Լ��� $a���� $b ������ ���� ���Ѵ�.

    	function hap($a, $b)
    	{
            $sum=0;
            while($a <= $b)
            {
                $sum=$sum+$a;
                $a++;
            }
            return $sum;
     	}

     	$from = 1;
     	$to   = 100;
	
	$total = hap($from, $to); 
     	echo("$from ���� $to ������ �� : $total");
?>
