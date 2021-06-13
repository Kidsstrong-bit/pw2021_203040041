<!-- Nama : Gilang Ramadhan
     Nrp  : 203040041
     Kelas : B
     Github : https://github.com/kidsstrong-bit/pw2021_203040041
     -->
<?php 

// Menghubungkan dengan file php lainnya
require 'functions.php';

// Melakukan query dengan memanggil function
$mahasiswa = query("SELECT * FROM Mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
   
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>
    
</head>

    
    <a href="tambah.php">Tambah Data Mahasiswa</a>
 
    <div class="container mt-5 mb-5">
        <table id="items" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                <th>#</th>
                <th>Gambar</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Detail</th>
                <th>Aksi</th>
               
                </tr>
            </thead>
            <tbody>

                <?php foreach($mahasiswa as $mhs) : ?>
                    <tr>
                    <td><?= $mhs["id"]; ?></td>
                    <td><img src="img<?= $mhs['img']; ?>" alt="" width="100"></td>
                    <td><?= $mhs['nrp']; ?></td>
                    <td><?= $mhs['nama']; ?></td>
                    <td><?= $mhs['email']; ?></td>
                    <td><?= $mhs['jurusan']; ?></td>
                            <td><a href="detail.php?id=<?= $mhs["id"]; ?>">Pilih</td>
                        <td>
                            <a href="ubah.php?id=<?= $mhs['id'] ?>">Ubah</a>
                            <a href="hapus.php?id=<?= $mhs['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('#items').DataTable();
        } );
    </script>
</body>
</html>