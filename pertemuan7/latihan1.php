<!-- 
Gilang Ramadhan
203040041
https://github.com/Kidsstrong-bit/pw2021_203040041
Pertemuan 7 - 23 Maret 2021
GET & POST
 -->
<!-- Variabel Superglobals / TIPE ARRAY ASSOCIATIVE
$_GET (1)
$_POST (2)
$_REQUEST
$_SERVER
$_SESSION (3)
$_COOKIE (4)
$_ENV -->

<?php
// Variabel Scope / lingkup variabel
// $x = 10;


// function tampilX() {
//     global $x; // untuk mencari $x diluar funcion
//     echo $x;
// }

// tampilX();

// CONTOH SUPERGLOBALS
// GET

$mahasiswa = [
    [
        "nama" => "Gilang Ramadhan",
        "nrp" => "203040041", 
        "email" => "gilangyouth1@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "man-profile.png"
    ],
    [
        "nama" => "Resha Alicia", 
        "nrp" => "203040099", 
        "email" => "reshaalicia21@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "woman-profile.png"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET 203040041</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach ( $mahasiswa as $mh ) : ?>
        <li>
        <a href="latihan2.php?nama=<?= $mh["nama"]; ?>
        &nrp=<?= $mh["nrp"]; ?>&email=<?= $mh["email"]; ?>
        &jurusan=<?= $mh["jurusan"]; ?>
        &gambar=<?= $mh["gambar"]; ?>"><?= $mh["nama"]; ?></li></a>

        
    <?php endforeach; ?>
        </ul>
</body>
</html>