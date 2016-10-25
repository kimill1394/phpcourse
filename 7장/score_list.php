<?php
    // $connect = mysql_connect("localhost","kdhong","1234"); // DB 연결
    // mysql_select_db("kdhong_db", $connect);                // DB 선택
    $dsn = 'mysql:host=localhost;dbname=jinabase;';
    $user = 'jina';
    $passwd = 'jina';

    try {
      $pdo = new PDO($dsn, $user, $passwd);
      echo "입력 성공<br>";
    } catch (PDOExeption $e) {
      // exit("DB접속불가: {$e->getMessage()}");
      echo "err!";
    }






if (isset($_GET['mode'])) {
    if ($_GET['mode'] == "insert")                       	   // 데이터 입력 모드
    {
        $sum = $_POST['sub1'] + $_POST['sub2'] + $_POST['sub3'] + $_POST['sub4'] + $_POST['sub5'];           // 합계 구하기
        $avg = $sum/5;                           		// 평균 구하기

        $sql = "insert into stud_score (name, sub1, sub2, sub3, sub4, sub5, sum, avg) values";
        // $sql .= "('$name', $sub1, $sub2, $sub3, $sub4, $sub4, $sum, $avg)";
        $sql .= "(:name, :sub1, :sub2, :sub3, :sub4, :sub5, :sum, :avg)";



        // $result = mysql_query($sql, $connect);
        $pdostt = $pdo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
        try {
          $pdostt->execute(array(':name'=>$_POST['name'], ':sub1'=>$_POST['sub1'], ':sub2'=>$_POST['sub2'], ':sub3'=>$_POST['sub3'], ':sub4'=>$_POST['sub4'], ':sub5'=>$_POST['sub5'], ':sum'=>$sum, ':avg'=>$avg));
          echo "입력 성공!2";
        } catch (PDOExeption $e) {
          exit("ERR!");
        }
    }
  } else {
    echo "값 없음";
  }
?>

<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<h3>1) 성적 입력 하기</h3>

<form action="score_list.php?mode=insert" method='post'>
<table width="720" border="1" cellpadding="5">
    <tr><td> 이름 : <input type="text" size="6" name="name">&nbsp;
             과목1 : <input type="text" size="3" name="sub1">&nbsp;
             과목2 : <input type="text" size="3" name="sub2">&nbsp;
             과목3 : <input type="text" size="3" name="sub3">&nbsp;
             과목4 : <input type="text" size="3" name="sub4">&nbsp;
             과목5 : <input type="text" size="3" name="sub5">
	</td>
       <td align="center">
	    <input type="submit" value="입력하기">
       </td>
    </tr>
 </table>
 </form>

<p>
<h3>2) 성적 출력 하기</h3>
<p><a href ="score_list.php?mode=big_first">[성적순 정렬]</a>
   <a href ="score_list.php?mode=small_first">[성적역순 정렬]</a></p>
<p>
 <!-- 제목 표시 시작 -->
 <table width="720" border="1" cellpadding="5">
 <tr align="center" bgcolor="#eeeeee">
 <td>번호</td>
 <td>이름</td>
 <td>과목1</td>
 <td>과목2</td>
 <td>과목3</td>
 <td>과목4</td>
 <td>과목5</td>
 <td>합계</td>
 <td>평균</td>
 <td>&nbsp;</td>
 </tr>
 <!-- 제목 표시 끝 -->

 <?php
 // select 문 수행
    if ($_GET['mode'] == "big_first")          // 성적순 정렬(내림차순)
       $sql = "select * from stud_score order by sum desc";
    else if ($_GET['mode'] == "small_first")   // 성적순 정렬(오름차순)
       $sql = "select * from stud_score order by sum";
    else
       $sql = "select * from stud_score";
    // $result = mysql_query($sql);
    $pdostt = $pdo->prepare($sql);
    // 플레이스 홀더 없으니까 안해도 됨~!!!!!!
    $pdostt->execute();

    $count = 1;                        // 화면 출력 시 일렬번호

 // DB 데이터 출력 시작
    // foreach ($result as $row) {
    while($row = $pdostt->fetch()) {
       $avg = round($row['avg'], 1);
       $num = $row['num'];

       echo "<tr align='center'>
          <td> $count     </td>
       		<td> $row[name] </td>
       		<td> $row[sub1] </td>
       		<td> $row[sub2] </td>
       		<td> $row[sub3] </td>
       		<td> $row[sub4] </td>
       		<td> $row[sub5] </td>
       		<td> $row[sum]  </td>
       		<td> $avg  </td>
       		<td> <a href='score_delete.php?num=$num'>[삭제]</a></td>
	      </tr>
             ";

       $count++;
 // DB 데이터 출력 끝
}
     $pdo = null;                   // DB 접속 끊기
 ?>

 </table>
