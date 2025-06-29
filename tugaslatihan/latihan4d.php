<?php

$negara_asean = array(
    array("Negara" => "Indonesia", "Ibukota" => "D.K.I. Jakarta", "Kode Telepon" => "+62"),
    array("Negara" => "Singapura", "Ibukota" => "Singapura", "Kode Telepon" => "+65"),
    array("Negara" => "Malaysia", "Ibukota" => "Kuala Lumpur", "Kode Telepon" => "+60"),
    array("Negara" => "Brunei", "Ibukota" => "Bandar Seri Begawan", "Kode Telepon" => "+673"),
    array("Negara" => "Thailand", "Ibukota" => "Bangkok", "Kode Telepon" => "+66"),
    array("Negara" => "Laos", "Ibukota" => "Vientiane", "Kode Telepon" => "+856"),
    array("Negara" => "Filipina", "Ibukota" => "Manila", "Kode Telepon" => "+63"),
    array("Negara" => "Myanmar", "Ibukota" => "Naypyidaw", "Kode Telepon" => "+95")
);

echo "<h2>Daftar Negara ASEAN:</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Negara</th><th>Ibukota</th><th>Kode Telepon</th></tr>";
foreach ($negara_asean as $negara) {
    echo "<tr>";
    echo "<td>" . $negara["Negara"] . "</td>";
    echo "<td>" . $negara["Ibukota"] . "</td>";
    echo "<td>" . $negara["Kode Telepon"] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>