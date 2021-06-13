<!-- Nama : Gilang Ramadhan
     Nrp  : 203040041
     Kelas : B
     Github : https://github.com/kidsstrong-bit/pw2021_203040041
     -->
<?php
session_start();

if (!isset($_SESSION['login'])) {
  header('Location: login.php');
  exit;
}
require 'function.php';
// Ambil id dari URL
$id = $_GET['id'];
// Query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>

<body>
    <h3>Detail Mahasiswa</h3>
    <ul>
        <li><img width="200px" src="img/<?= $mhs['gambar']; ?>"></li>
        <li>NRP : <?= $mhs['nrp']; ?></li>
        <li>Nama : <?= $mhs['nama']; ?></li>
        <li>Email : <?= $mhs['email']; ?></li>
        <li>Jurusan : <?= $mhs['jurusan']; ?></li>
        <li><a href="ubah.php?id=<?= $m['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $m['id']; ?>"
                onclick="return confirm('apakah anda yakin?')">hapus</a></li>
        <li><a href="index.php">Kembali ke daftar mahasiswa</a></li>
    </ul>
</body>

</html>