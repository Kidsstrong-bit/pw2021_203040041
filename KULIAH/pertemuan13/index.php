<!-- Nama : Gilang Ramadhan
     Nrp  : 203040041
     Kelas : B
     Github : https://github.com/kidsstrong-bit/pw2021_203040041
     -->
<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: php/login.php");
    exit;
}

require 'php/functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// ketika tomdol cari diklik
if (isset($_POST['cari'])) {
    $mahasiswa = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <button><a href="./php/logout.php">Logout</a></button>
    <h3>Daftar Mahasiswa</h3>

    <a href="./php/tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="POST">
        <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian.." autocomplete="off" autofocus class="keyword">
        <button type="submit" name="cari" class="tombol-cari">Cari!</button>
    </form>
    <br>

    <div class="container">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>#</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>

            <?php if (empty($mahasiswa)) : ?>
                <tr>
                    <td colspan="4">
                        <p style="color: red; font-style: italic;">Data mahasiswa tidak ditemukan!</p>
                    </td>
                </tr>
            <?php endif; ?>

            <?php $i = 1;
            foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><img src="img/<?= $mhs['img']; ?>"></td>
                    <td><?= $mhs['nama']; ?></td>
                    <td>
                        <a href="./php/detail.php?id=<?= $m['id']; ?>">Lihat detail</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <script src="./js/script.js"></script>
</body>

</html>