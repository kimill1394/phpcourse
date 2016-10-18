<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div style="font-size: 32px;">
      <?php
        $no = rand(1,5);
        switch ($no) {
          case 1:
            $msg = "사랑합니다.";
            break;
          case 2:
            $msg = "감사합니다.";
            break;
          case 3:
            $msg = "좋아합니다.";
            break;
          case 3:
            $msg = "행복합니다.";
            break;

          default:
            $msg = "하이욤";
            break;
        }

        echo $msg;


        $no = rand(1,3);
        switch ($no) {
          case 1:
            $file = "https://blog.outsider.ne.kr/attach/1/x2911957660.jpg.pagespeed.ic.yRnEaL2uJf.jpg";
            break;
          case 2:
            $file = "http://cfile29.uf.tistory.com/image/23245D495618805D14923A";
            break;
          case 3:
            $file = "https://kldp.org/files/haskell_development_environment_with_atom_and_cabal.png";
            break;
        }

        echo "<br><img src={$file}>";
       ?>

    </div>
  </body>
</html>
