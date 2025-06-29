<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2c</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            display: inline-block;
            text-align: center;
            line-height: 30px;
            margin: 2px;
            border: 1px solid #000;
        }
        .clear {
            clear: both;
        }
        .ganjil {
            background-color: #003;
            color: #fff;
        }
        .genap {
            background-color: #999;
        }
    </style>
</head>
<body>

<?php
$baris = 5;

for ($i = 1; $i <= $baris; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        // Cek apakah baris ganjil atau genap
        if ($i % 2 == 1) {
            $kelas = "ganjil";
        } else {
            $kelas = "genap";
        }
        echo "<div class='kotak $kelas'>$j</div>";
    }
    echo "<div class='clear'></div>";
}
?>

</body>
</html>