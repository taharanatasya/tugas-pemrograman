<?php
$baris = 15;
$kolom = 5;

echo "<table border='1' cellpadding='3' cellspacing='0'>";

for ($i = 1; $i <= $baris; $i++) {
  echo "<tr>";
  for ($j = 1; $j <= $kolom; $j++) {
    echo "<td>Baris " . $i . " Kolom " . $j . "</td>";
  }
  echo "</tr>";
}

echo "</table>";
?>