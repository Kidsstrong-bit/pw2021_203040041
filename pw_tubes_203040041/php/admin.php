<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

// Menghubungkan dengan file PHP lainnya
require 'functions.php';

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $barang = query("SELECT * FROM barang WHERE
                nama LIKE '%keyword%' OR
                barang LIKE '%keyword%' OR
                detail LIKE '%keyword%' ");
                                    
} else {
    $barang  = query("SELECT * FROM barang");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
</head>
<body>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <div class="container">
    <h3>Welcome, Admin!</h3>
        <div class="logout">
            <a class="btn btn-dark my-2 mb-3" href="logout.php">Logout</a>
        </div>
    <table class="table table-dark table-striped">
        <div class="add">
            <a class="btn btn-dark my-3 mb-3" href="tambah.php">Add Outfit</a><br>
        </div>
        <form action="" method="get">
            <input type="text" name="keyword" autofocus>
            <a class="btn btn-dark my-4" type="submit" name="cari">Search</a>
        </form>
            <thead>
                <tr>
                <th>No.</th>
                    <th>Option</th>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Size</th>
                    <th>Price</th>
                    <th>Stock</th>
                </tr>
            </thead>
        <tbody>
        <?php if (empty($barang)) : ?>
                <tr>
                    <td colspan="7">
                        <h1>Outfit not found</h1>
                    </td>
                </tr>
                <?php else : ?>
                <?php $i = 1; ?>
                <?php foreach($barang as $brg) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td>
                            <div class="ubah"><a class="btn btn-success" href="ubah.php?id=<?= $brg['id'] ?>">Change</a></div>
                            <div class="delete"><a class="btn btn-danger my-4" href="hapus.php?id=<?= $brg['id'] ?>" onclick="return confirm('Delete ?')">Delete </a></div>
                        </td>
                        <td>
                        <div class="parallax">
                        <img class="rounded mx-auto d-block" src="../assets/images/<?= $brg['gambar']; ?>" alt="">
                        </div>
                        </td>
                        <td><b><?= $brg["nama"]; ?></td>
                        <td><?= $brg["detail"]; ?></td>
                        <td><?= $brg["size"]; ?></td>
                        <td><?= $brg["harga"]; ?></td>
                        <td><?= $brg["stok"]; ?></td>
                    </tr>
                    <?= $i++; ?>
                <?php endforeach; ?>
                <?php endif; ?>
        </tbody>
</table>
</body>
</html>