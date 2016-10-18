<?php

$list = array("애플"=>300, "바나나"=>130, "오렌지"=>200);
// file_put_contents("fruit.txt", $list);
// $read_list = file_get_contents("fruit.txt");
// echo $read_list["바나나"];

// php에ㅓㅅ 데이터를 파일에 저장할 때는 시리얼라이즈 해서 저장해야 하고 데이터를 읽으려면 언시리얼라이즈 해야 한다. 위 예제는 직렬화가 되지 않은 객체를 쓰고 지우는 데서 난 오류


$serial_list = serialize($list);
file_put_contents("fruit.txt", $serial_list);
$read_list = file_get_contents("fruit.txt");
$unserial_list = unserialize($read_list);


echo "시리얼 예제: ".$unserial_list["바나나"]."<br>";

$json_encode_data = json_encode($list);
file_put_contents("fruits1.txt", $json_encode_data);
$readdata = file_get_contents("fruits1.txt");
$json_decode_data = json_decode($readdata);

echo "JSON 예제: ".$json_decode_data->{'바나나'}."<br>";
 ?>
