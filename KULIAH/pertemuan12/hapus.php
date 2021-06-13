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
// Jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// Mengambil Id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
            alert('Data Berhasil dihapus');
            document.location.href = 'index.php'
          </script>";
} else {
  echo "Data Gagal dihapus";
}
?>