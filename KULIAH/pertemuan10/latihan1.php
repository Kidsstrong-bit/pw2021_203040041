<!-- Nama : Gilang Ramadhan
     Nrp  : 203040041
     Kelas : B
     Github : https://github.com/kidsstrong-bit/pw2021_203040041
     -->
     ?>
<?php
// Koneksi ke database dan pilih database
$conn = mysqli_connect('localhost', 'root', '', 'pw_203040041');
// Query ini tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// Ubah data ke dalam array
// $row = mysqli_fetch_row($result); // Array numerik
// $row = mysqli_fetch_assoc($result); // Array associative
// $row = mysqli_fetch_array($result); // keduanya

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

// Tampung kedalam variable
$mahasiswa = $rows;
?>
DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>


<body>
    <h3>Daftar Mahasiswa</h3>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>Nrp</th>
            <th>Nama</th>
            <th>Emailr</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>

        <?php
    $i = 1;
    foreach ($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><img src="img/<?= $mhs['gambar']; ?>" width="60"></td>
            <td><?= $mhs['nrp']; ?></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['email']; ?></td>
            <td><?= $mhs['jurusan']; ?></td>
            <a href="">ubah</a> | <a href="">hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>