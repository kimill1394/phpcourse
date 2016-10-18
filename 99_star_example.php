<?php


echo "<table border ='1' width ='640'>";

for ($i=1; $i<=10; $i++) {
  echo "<tr>";

  for ($j=1; $j<=10; $j++) {
    echo "<td>";

    if ($j>=11-$i) {
      echo "*";
    }

    echo "</td>";
  }

  echo "</tr>";
}

echo "</table>";



 ?>
