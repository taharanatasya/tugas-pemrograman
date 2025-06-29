<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tugas 1 - Pengulangan Kategori Bilangan</title>
</head>
<body>

<h3>Pengulangan untuk mencari kategori bilangan :</h3>

<?php
// Fungsi untuk mengecek apakah suatu angka adalah bilangan prima
function isPrima($angka) {
    if ($angka <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($angka); $i++) {
        if ($angka % $i == 0) {
            return false;
        }
    }
    return true;
}

// Perulangan dari 1 sampai 20
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        // genap
        if (isPrima($i)) {
            echo "Angka $i adalah bilangan genap dan sekaligus bilangan prima<br>";
        } else {
            echo "Angka $i adalah bilangan genap<br>";
        }
    } else {
        // ganjil
        if (isPrima($i)) {
            echo "Angka $i adalah bilangan ganjil dan sekaligus bilangan prima<br>";
        } else {
            echo "Angka $i adalah bilangan ganjil<br>";
        }
    }
}
?>

</body>
</html>