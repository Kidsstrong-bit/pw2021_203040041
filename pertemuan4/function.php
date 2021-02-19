<?php
/*
Gilang Ramadhan
203040041
https://github.com/Kidsstrong-bit/pw2021_203040041
Pertemuan  - 19 Februari 2021
Mengimplementasikan FUNCTION pada PHP
*/
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Sore", "Gilang"); ?></h1>
    
</body>
</html>