<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - Latihan 1</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            border: 1px solid black;
            display: inline-block;
            text-align: center;
            line-height: 30px;
            margin: 2px;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php
$baris = 5;
$kolom = 5;

for ($i = 1; $i <= $baris; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "<div class='kotak'>$j</div>";
    }
    echo "<div class='clear'></div>";
}
?>

</body>
</html>