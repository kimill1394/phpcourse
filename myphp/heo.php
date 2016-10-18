<style>
 h3{background-color:red; color:white; padding:8px;}
 </style>
 <?php
  $weatherUrl = "http://weather.livedoor.com/forecast/rss/area/400010.xml";
  $saveFile = "commnet.log";

  $m = isset($_GET['m'])?$_GET['m']:"";
  switch($m){
      case "write": writeComment(); break;
      case "show": display(); break;
      default: display(); break;
  }

  function display(){
      global $weatherUrl;
      $info    = load_log();
      $tag = date("Y-m-d");
      if(empty($info[$tag])){ // info라는 객체안에 tag라는 키를 가진 값이 있나??  true ==> 값이없다
          $s = trim(@file_get_contents($weatherUrl));
          $xml = simplexml_load_string($s);
          $list = array();
          foreach($xml->channel->item as $val){
              $list[] = strval($val ->title); //순서대로 값이 들어간다.
          }
          $info[$tag] = array("yohou"=>$list);
          save_log($info);
      }
      //본격적인 화면 출력
      $info = array_reverse($info); //배열을 거꾸로 만들어줌
      $self = $_SERVER['SCRIPT_NAME'];
      echo count($info);
      foreach($info as $key=>$val){
          $yohou_h = htmlspecialchars(implode("\n",$val['yohou']));//뒤에있는 요소에 앞에 문자열을 붙인다.
          //split 도 한번 보기
          echo "<h3>$key</h3>";
          echo "<pre>$yohou_h</pre>";
          echo " <form action='$self'>";
          echo "<input type='hidden' name='m' value='write'/>";
          echo "<input type='hidden' name='tag' value='$key'/>";
          echo "코멘트";
          echo "<input type='text' name='memo' value=''/>";
          echo "<input type='submit' value='쓰기'/>";
          echo " </form>";

          $comment = isset($val["comment"])?$val["comment"]:array();
          foreach($comment as $row){
              $row_h = htmlspecialchars($row);
              echo "<div>☞{$row_h}</div>";
          }
      }
  }

  function load_log(){
      global $saveFile;
      $info = array();// 배열선언
      if(file_exists($saveFile)){ //파일존재 검사
          $info = unserialize(file_get_contents($saveFile));//문자열로된 것을 객체로 다시
      }
      return $info;
  }
  function save_log($info){
      global $saveFile;
      file_put_contents($saveFile,serialize($info));

  }
  function writeComment(){
      $info = load_log();
      $tag = isset($_GET["$tag"])?$_GET["$tag"]:"";
      $memo = isset($_GET["$memo"])?$_GET["$memo"]:"";

      if(empty($info[$tag]["comment"])){
          $info[$tag]["comment"] = array();
      }
      $info[$tag]["comment"][] = $memo;
      save_log($info);
      header("Location:".$_SERVER['SCRIPT_NAME']);
  }
  ?>
