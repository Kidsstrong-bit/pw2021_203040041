<?php
/*
Gilang Ramadhan
203040041
https://github.com/Kidsstrong-bit/pw2021_203040041
Pertemuan 7 - 23 Maret 2021
GET & POST
*/
// Cek apakah tidak ada data di $_GET
if( !isset ($_GET["nama"]) || 
!isset($_GET["nrp"]) || 
!isset($_GET["email"]) || 
!isset($_GET["jurusan"]) || 
!isset($_GET["gambar"]) ) {

    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nrp"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke daftar Mahasiswa</a>
</body>
</html>