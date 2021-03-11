<!--  NAMA : GILANG RAMADHAN
      NRP : 203040041
      SHIFT JUMAT 10:00 - 11:00 
-->
<?php

function gantiStyle($tulisan, $style1 = 'style1', $style2 = 'style2'){
    return "<div class=$style1>
            <p class=$style2>$tulisan</p></div>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2A</title>
    <style>
    .style1 {
        font-size: 28px;
        font-family: arial;
        color: #8c782d;
        font-style: italic;
        font-weight: bold;
    }

    .style2 {
        border: 1px solid black;
        border-radius: 6px;
        box-shadow: 0 0 3px rgba(0,0,0,.6);
        padding: 10px 10px 10px 10px;

    }
    </style>
</head>
<body>
    <?= gantiStyle("Selamat Datang di Praktikum PW"); ?>
</body>
</html>