
<!-- /파일쓰기 주의사항
// 파일쓰기
1. 경로에 파일 쓰기(권한, 생성) 가능한지
2. 파일이 존재하는지
3. 파일에 쓰기가 가능한지
3. 파일 쓰기

//파일 읽기
1. 파일 존재 여부 조사
2. 읽을 수 있는 파일인지 조사
3. 파일 읽기 -->


<?php>

$target_dir = dirname(__FILE__);
$target_file = $target_dir."/tetst''kp

"

if (@is_writable($target_dir)) {
  echo "경로에 파일 쓰기가 불가능 :{$target_dir}"
  exit;
}

if (file_exists($target_file)) {
  if (!is_writable($target_file)) {
    echo "파일은 존재하나 쓰기 불가능임: {$target_file}";
  }
}

file_put_contents($target_file, "에뤌마ㅑㅈ댕");

if (!file_exists($target_file) {

  echo "파일이 존재하지 않음: $target_file";
  exit;
}


if (!is_readable($target_file)){
  echo " 파일을 읽을 수 없음: $target_file";]
  exit;
}

$result = file_get_contents($target_file);

echo "읽은내용: $result";



}
