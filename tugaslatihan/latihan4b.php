<?php
$negara_asean = array("Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand");

echo "<h2>Daftar Negara ASEAN awal:</h2><ul>";
foreach ($negara_asean as $negara) {
  echo "<li>$negara</li>";
}
echo "</ul>";


// Menambahkan negara baru
$negara_baru = array("Laos", "Filipina", "Myanmar");
$negara_asean = array_merge($negara_asean, $negara_baru);


echo "<h2>Daftar Negara ASEAN baru:</h2><ul>";
foreach ($negara_asean as $negara) {
  echo "<li>$negara</li>";
}
echo "</ul>";

?>