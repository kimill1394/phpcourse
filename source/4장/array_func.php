<?
 	// array() 함수를 20명의 학생에 대한 영어 성적의 합계와 평균
 
    	$eng_score = array(87, 76, 98, 87, 87, 93, 79, 85, 88, 63,
                            74, 84, 93, 89, 63, 99, 81, 70, 80, 95);
 
    	$sum=0;
 
    	for($a=0; $a<20; $a++)
    	{
           $sum = $sum + $eng_score[$a];  // 20명의 학생의 성적의 누적 합
    	}
    
    	$avg = $sum/20;				// 평균 구하기
 
    	echo "학생들 영어 점수 : ";   
 	for($a=0; $a<20; $a++)			// 입력된 학생들의 영어 성적 출력
 	    echo $eng_score[$a]." ";
 
 	echo "<br>";                                 // 줄 바꿈
 
    	echo("합계 : $sum, 평균 : $avg");
?>