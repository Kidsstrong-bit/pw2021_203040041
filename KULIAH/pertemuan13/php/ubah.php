<!-- Nama : Gilang Ramadhan
     Nrp  : 203040041
     Kelas : B
     Github : https://github.com/kidsstrong-bit/pw2021_203040041
     -->
<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// Jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// Ambil id dari url
$id = $_GET['id'];

// Query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

// Cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil diubah');
            document.location.href = 'index.php';
         </script>";
  } else {
    echo "Data gagal diubah!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah data Mahasiswa</title>

</head>

<body>
  <h3>Form ubah data mahasiswa</h3>
  <form action="" method="POST" enctype="multipart/form-data">
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

      <label>
        Jurusan :
        <input type="text" name="jurusan" required value="<?= $mhs['jurusan']; ?>">
      </label>
      </li>
      <li>
        <input type="hidden" name="gambar_lama" value="<?= $mhs['gambar']; ?>">
      </li>
      <li>
      <li>
        <label>
          Gambar :
          <input type="file" name="gambar" class="gambar" onchange="previewImage()">
        </label>
        <img src="../img/blank.php<?= $mhs['gambar']; ?>" width="120" style="display: block;" class="img-preview">
      </li>

      <li>
        <button type="submit" name="ubah">Ubah Data!</button>
      </li>
    </ul>
  </form>
  <script src="js/script.js"></script>
</body>

</html>