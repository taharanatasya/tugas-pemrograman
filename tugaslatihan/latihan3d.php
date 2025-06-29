<?php
// Membuat function untuk menghitung faktorial
function faktorial($a) {
    $hasil = 1;
    for ($i = 1; $i <= $a; $i++) {
        $hasil *= $i;
    }
    return $hasil;
}

// Contoh penggunaan
$nilai = 5;
$hasilFaktorial = faktorial($nilai);

// Tampilkan hasil ke layar
echo "Faktorial dari $nilai = $hasilFaktorial";
?>