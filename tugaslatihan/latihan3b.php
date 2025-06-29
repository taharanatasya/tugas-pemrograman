<?php

// Contoh penggunaan isset()
$nama = "Naufal Satria";
$umur; // Variabel umur tidak diinisialisasi

if (isset($nama)) {
  echo "Variabel \$nama sudah diset dan bernilai: " . $nama . "<br>";
} else {
  echo "Variabel \$nama belum diset.<br>";
}

if (isset($umur)) {
  echo "Variabel \$umur sudah diset dan bernilai: " . $umur . "<br>";
} else {
  echo "Variabel \$umur belum diset.<br>";
}


// Contoh penggunaan empty()
$kota = "Jakarta";
$alamat = ""; // String kosong
$nilai = 0; // Nilai numerik 0


if (empty($kota)) {
  echo "Variabel \$kota kosong.<br>";
} else {
  echo "Variabel \$kota tidak kosong dan bernilai: " . $kota . "<br>";
}

if (empty($alamat)) {
  echo "Variabel \$alamat kosong.<br>";
} else {
  echo "Variabel \$alamat tidak kosong dan bernilai: " . $alamat . "<br>";
}

if (empty($nilai)) {
  echo "Variabel \$nilai kosong.<br>";
} else {
  echo "Variabel \$nilai tidak kosong dan bernilai: " . $nilai . "<br>";
}

// Ringkasan Perbedaan
echo "<br><b>Ringkasan Perbedaan:</b><br>";
echo "isset(): Mengecek apakah variabel telah didefinisikan (ada atau tidak).<br>";
echo "empty(): Mengecek apakah variabel telah didefinisikan DAN bernilai kosong (false, 0, string kosong, array kosong).<br>";

?>