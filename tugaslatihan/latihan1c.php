<?php
$a = "A";
$b = "B";
$c = "C";
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            display: inline-block;
            text-align: center;
            vertical-align: middle;
            line-height: 50px;
            font-weight: bold;
            margin: 2px;
        }
        .baris {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

<div class="baris">
    <div class="kotak"><?php echo $a; ?></div>
</div>
<div class="baris">
    <div class="kotak"><?php echo $a; ?></div>
    <div class="kotak"><?php echo $b; ?></div>
</div>
<div class="baris">
    <div class="kotak"><?php echo $a; ?></div>
    <div class="kotak"><?php echo $b; ?></div>
    <div class="kotak"><?php echo $c; ?></div>
</div>

</body>
</html>