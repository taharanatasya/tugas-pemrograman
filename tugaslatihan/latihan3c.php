<?php
// Membuat function untuk menghitung pangkat
function pangkat($angka, $pangkat) {
    return pow($angka, $pangkat);
}

// Contoh penggunaan
$bilangan = 5;
$pangkatnya = 4;
$hasil = pangkat($bilangan, $pangkatnya);

// Tampilkan hasil ke layar
echo "$bilangan pangkat $pangkatnya = $hasil";
?>