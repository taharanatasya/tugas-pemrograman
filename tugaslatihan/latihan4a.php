<?php
$warna = ["hijau", "kuníng", "kelabu", "merah muda" , "biru" ,];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Balonku</title>
    <style>
        body {
            font-family: 'Courier New', monospace;
            line-height: 1.4;
            white-space: pre;
        }
        .highlight {
            background-color: yellow;
            padding: 0 1px;
        }
    </style>
</head>
<body>
Balonku ada lima.
Rupa-rupa warnanya
<span class="highlight"><?= $warna[0] ?></span>, <span class="highlight"><?= $warna[1] ?></span>, <span class="highlight"><?= $warna[2] ?></span>, <span class="highlight"><?= $warna[3] ?></span>, dan <span class="highlight"><?= $warna[4] ?></span>,
Meletus balon <span class="highlight"><?= $warna[0] ?></span> DOR!!!
Hatiku sangat kacau...
</body>
</html>