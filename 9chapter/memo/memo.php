<?php session_start();

$scale = 3;
require_once "../lib/PDOmanagement.php";

$sql = "select * from memo order by num desc";
$pdo = connect();
$stt = $pdo -> prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
$total_record = $stt->rowCount();

if ($total_record%$scale == 0)
    $total_page = floor($total_record/$scale);
else $total_page = floor($tptal_record/$scale)+1;


if (!isset($_GET['page'])) $page = 1;
else $page = $_GET['page'];

$start = ($page-1)*$scale;
$number = $total_record-$start;



?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/common.css" media="screen" title="no title">
    <link rel="stylesheet" href="../css/memo.css" media="screen" title="no title">
  </head>
  <body>
    <div id="wrap">
      <div id="header">
        <?php require_once "../lib/top_login2.php" ?>
      </div>  <!-- end of header -->

      <div id="menu">
        <?php require_once "../lib/top_menu2.php" ?>
      </div>  <!-- end of menu -->

    <div id="content">
      <div id="col1">
        <div id="left_menu">
          <?php require_once "../lib/left_menu.php" ?>
        </div>
      </div>
      <div id="col2">
        <div id="title"><img src="../img/title_memo.gif" alt=""></div>
        <div id="memo_row1">
          <form action="insert.php" name="memo_form" method="post">
            <div id="memo_writer"><span><?php echo $_SESSION['usernick'] ?></span></div>
            <div id="memo1"><textarea name="content" id="" cols="95" rows="6"></textarea></div>
            <div id="memo2"><input type="image" src="../img/memo_button.gif"></div>
          </form>
        </div>
        <?php for ($i=$start; $i<$start+$scale && $i < $total_record ; $i++) {
            $row = $stt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_ABS, $i);
            $memo_id = $row['id'];
            $memo_num = $row['num'];
            $memo_date = $row['regist_day'];
            $memo_nick = $row['nick'];
            $memo_content = str_replace("\n", "<br>", $row['content']);
            $memo_content = str_replace(" ", "&nbsp;", $memo_content);
        ?>
        <div id="memo_writer_title">
          <ul>
            <li id="writer_title1"><?php echo $number; ?></li>
            <li id="writer_title2"><?php echo $memo_nick; ?></li>
            <li id="writer_title3"><?php echo $memo_date; ?></li>
            <li id="writer_title4">
              <?php if($_SESSION['userid']=="admin" || $_SESSION['userid']==$memo_id)
                echo "<a href='delete.php?num=$memo_num'> [삭제] </a> "?>
            </li>
          </ul>
        </div>
        <div id="ripple">
          <div id="ripple1">덧글</div>
          <div id="ripple2">
            <?php
              $sql = "select * from memo_ripple where parent=:memo_num";
              $memo_num_stt = $pdo->prepare($sql, [":memo_num"=>$memo_num]);
              while ($result = $memo_num_stt->fetch()) {
                $ripple_num = $row_ripple['num'];
                $ripple_id = $row_ripple['id'];
                $ripple_nick = $row_ripple['nick'];
                $ripple_content = str_replace("\n", "<br>", $row_ripple['content']);
                $ripple_content = str_replace(" ", "&nbsp;", $ripple_content);
                $ripple_date = $row_ripple['regist_day'];
            ?>
            <div id="ripple_title">
              <ul>
                <li><?php echo $ripple_nick ?>&nbsp;&nbsp;&nbsp;<?php echo $ripple_date ?></li>
                <li id="mdi_del">
                  <?php if($_SESSION['userid']=='admin'||$_SESSION['userid']==$ripple_id)
                    echo "<a href='delete_ripple.php?num=$ripple_num'> 삭제 </a> "; ?>
                </li>
              </ul>
            </div>
            <div id="ripple_comment">
              <?php echo $ripple_content; ?>
            </div>
            <?php } ?>
            <form action="insert_ripple.php" name="ripple_form" method="post">
              <input type="hidden" name="num" value="<?php echo $memo_num ?>">
              <div id="ripple_insert">
                <div id="ripple_textarea">
                  <textarea name="ripple_content" id="" cols="80" rows="3"></textarea>
                </div>
                <div id="ripple_button"><input type="image" src="../img/memo_ripple_button.png"></div>
              </div>
            </form>
          </div>
          <div class="clear"></div>
          <div class="linespace_10"></div>
          <?php $number--; } $pdo = null; ?>
          <div id="page_num"> ◀ 이전 &nbsp;&nbsp;&nbsp;&nbsp;
            <?php for($i=1; $i<=$total_page; $i++)
                    if ($page==$i)
                      echo "<b> $i </b>";
                    else echo "<a href='memo.php?page=$i'> $i </a> ";
            ?>
            &nbsp;&nbsp;&nbsp;&nbsp; 다음 ▶
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>
