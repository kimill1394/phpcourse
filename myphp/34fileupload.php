<?php
// $_FILES[속성]
// 1) $_FILES['upfile']['name']
          # 클라이언트로부터 전해받은 파일명
          # 클라이언트 컴퓨터상의 파일명(업로드 된)
// 2) $_FILES['upfile']['type']
          # 업로드된 파일의 MIME타입(신용불가능)
// 3) $_FILES['upfile']['size']
          # 업로드 된 파일의 크기 (byte단위)
// 4) $_FILES['upfile']['tmp_name']
          # 업로드 된 파일이 보존되어 있는 임시파일명(서버상)
// 5) $_FILES['upfile']['error']
          # 업로드시에 발생된 에러 정보를 저장
// upfile ==> <input name='upfile' type='file'>



if(isset($_FILES['upfile'])) {
  save_file_func();
} else {
  show_form();
}

function save_file_func() {
  $tmp_file = $_FILES['upfile']['tmp_name'];
  $upload_filename = $_FILES['upfile']['name'];

  $save_filename = dirname(__FILE__)."/".$upload_filename;
  // echo $save_filename;

  if (!is_uploaded_file($tmp_file)) {
    echo "업로드 실패, 파일이 바르지 않음";
    exit;
  }

  $type = $_FILES['upfile']['type'];

  if ($type == 'image/jpeg') {
    echo "uploaded file is jpg";
  } else {
    echo "uploaded file isnt jpg<br>";
  }

  // $finfo = finfo_open(FILEINFO_MIME_TYPE);
  // $type = finfo_file($finfo, $tmp_file);
  // echo $type;

  if (!move_uploaded_file($tmp_file, $save_filename)) {
      echo "진짜 업로드 실패함";
      exit;
  }

  echo "<h1>업로드 성공!!</h1>";

  $uploadfileurl = "http://127.0.0.1/myphp/".$upload_filename;
  echo "<a href='$uploadfileurl'>파일보기</a>";

}


function show_form () {
  $script = $_SERVER['SCRIPT_NAME'];
  $maxSize = 3*1024*1024; // limit 3MB
  echo <<<UPLOADFORM
    <form action='$script' method='post' enctype='multipart/form-data'>
    <!-- base64_encode 자주 쓴대요~ -->
      file upload: <br>
      <input type='hidden' name='MAX_FILE_SIZE' value='$maxSize'>

      <!-- if dont use MAX_FILE_SIZE
          set file size on upload_max_filesize=5M in php.ini -->

      <input type='file' name='upfile'>
      <input type='submit' value='upload'>
     </form>
UPLOADFORM;
}


 ?>
