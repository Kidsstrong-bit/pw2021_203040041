<?php
session_start();

if (!isset($_SESSION['login'])) {
  header('Location: login.php');
  exit;
}
require 'functions.php';


// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];



// Query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

// Cek apakah tombol ubah sudah di tekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil diubah');
            document.location.href = 'index.php'
          </script>";
  } else {
    echo "Data Gagal diubah";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>

<body>

    <h3>Form Ubah Data Mahasiswa</h3>

    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
        <ul>
            <li>
                <label>
                    Nama :
                    <input type="text" name="nama" autofocus required value="<?= $mhs['nama']; ?>">
                </label>
            </li>

            <li>
                <label>
                    NRP :
                    <input type="text" name="nrp" required value="<?= $mhs['nrp']; ?>">
                </label>
            </li>

            <li>
                <label>
                    Email :
                    <input type="text" name="email" required value="<?= $mhs['email']; ?>">
                </label>
            </li>

            <li>
                <label>
                    Jurusan
                    <input type="text" name="jurusan" required value="<?= $mhs['jurusan']; ?>">
                </label>
            </li>

            <li>
                <label>
                    Gambar :
                    <input type="text" name="gambar" required value="<?= $mhs['gambar']; ?>">
                </label>
            </li>
            <li>
                <button type="submit" name="ubah">Ubah Data!</button>
            </li>
        </ul>
    </form>

</body>

</html>