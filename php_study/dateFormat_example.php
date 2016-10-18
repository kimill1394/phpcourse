<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>How to encode date by dateFormat</title>
  </head>
  <body>

    <a href="http://php.net/manual/en/function.date.php"> php.net </a>
    <?php

      echo "<h3> DAY </h3>";

      $date = date('D');
      echo "D:　　".$date."<br>";

      $date = date('d');
      echo "d:　　".$date."<br>";

      $date = date('j');
      echo "j:　　".$date."<br>";

      $date = date('l');
      echo "l:　　".$date."<br>";

      $date = date('N');
      echo "N:　　".$date."<br>";

      $date = date('S');
      echo "S:　　".$date."<br>";

      $date = date('w');
      echo "w:　　".$date."<br>";

      $date = date('z');
      echo "z:　　".$date."<br>";

      echo "<h3> WEEK </h3>";

      $date = date('W');
      echo "W:　　".$date."<br>";

      echo "<h3> MONTH </h3>";

      $date = date('F');
      echo "F:　　".$date."<br>";

      $date = date('m');
      echo "m:　　".$date."<br>";

      $date = date('M');
      echo "M:　　".$date."<br>";

      $date = date('n');
      echo "n:　　".$date."<br>";

      $date = date('t');
      echo "t:　　".$date."<br>";

      echo "<h3> YEAR </h3>";

      $date = date('L');
      echo "L:　　".$date."<br>";

      $date = date('o');
      echo "o:　　".$date."<br>";

      $date = date('Y');
      echo "Y:　　".$date."<br>";

      $date = date('y');
      echo "y:　　".$date."<br>";

      echo "<h3> TIME </h3>";

      $date = date('a');
      echo "a:　　".$date."<br>";

      $date = date('A');
      echo "A:　　".$date."<br>";

      $date = date('B');
      echo "B:　　".$date."<br>";

      $date = date('g');
      echo "g:　　".$date."<br>";

      $date = date('G');
      echo "G:　　".$date."<br>";

      $date = date('h');
      echo "h:　　".$date."<br>";

      $date = date('H');
      echo "H:　　".$date."<br>";

      $date = date('i');
      echo "i:　　".$date."<br>";

      $date = date('s');
      echo "s:　　".$date."<br>";

      $date = date('u');
      echo "u:　　".$date."<br>";

      echo "<h3> TIMEZONE </h3>";

      $date = date('e');
      echo "e:　　".$date."<br>";

      $date = date('I');
      echo "I:　　".$date."<br>";

      $date = date('O');
      echo "O:　　".$date."<br>";

      $date = date('P');
      echo "P:　　".$date."<br>";

      $date = date('T');
      echo "T:　　".$date."<br>";

      $date = date('Z');
      echo "Z:　　".$date."<br>";

      echo "<h3> FULL DATE/TIME </h3>";

      $date = date('c');
      echo "c:　　".$date."<br>";

      $date = date('r');
      echo "r:　　".$date."<br>";

      $date = date('U');
      echo "U:　　".$date."<br>";

     ?>

  </body>
</html>
