<?php


$array = array("바나나", "딸기", "수박", "망고");

foreach ($array as $index) {
	echo $index."<br>";
}


$과일2 = array("바나나"=>100, "딸기"=>200);


foreach($과일2 as $과일명 => $과일값){

	echo $과일명.": ".$과일값."<br>";
}





 ?>
