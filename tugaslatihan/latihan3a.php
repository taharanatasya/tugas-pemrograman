<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 3a</title>
    <style>
        .ganti-style {
            font-size: 28px;
            font-family: Arial, sans-serif;
            color: #1A0547;
            font-style: italic;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
// Membuat function untuk mengatur style tulisan
function ganti_style($tulisan, $kelas) {
    return "<p class='$kelas'>$tulisan</p>";
}

// Variabel isi tulisan dan kelas CSS
$tulisan = "Hello World! Here I come!";
$kelas = "ganti-style";

// Memanggil function dan menampilkan hasil
echo ganti_style($tulisan, $kelas);
?>

</body>
</html>