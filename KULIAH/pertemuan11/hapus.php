<!-- Nama : Gilang Ramadhan
     Nrp  : 203040041
     Kelas : B
     Github : https://github.com/kidsstrong-bit/pw2021_203040041
     -->
     ?>
<?php 
require 'functions.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
            alert('Data Berhasil dihapus!');
            document.location.href = 'admin.php';
          </script>";
} else {
   echo "<script>
            alert('Data Gagal dihapus!');
            document.location.href = 'admin.php';
        </script>";
}
?>