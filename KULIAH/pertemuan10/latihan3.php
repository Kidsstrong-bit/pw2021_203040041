<!-- Nama : Gilang Ramadhan
     Nrp  : 203040041
     Kelas : B
     Github : https://github.com/kidsstrong-bit/pw2021_203040041
     -->
     ?>
<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h3>Daftar Mahasiswa</h3>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>

        <?php
    $i = 1;
    foreach ($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><img src="img/<?= $mhs['gambar']; ?>" width="60"></td>
            <td><?= $mhs['nama']; ?></td>
            <td>
                <a href="detail.php?id=<?= $mhs['id'] ?>">Lihat detail</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>