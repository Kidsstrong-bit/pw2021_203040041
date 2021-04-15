<?php
// Menghubungkan dengan file PHP lainnya
require 'functions.php';

// Melakukan query
$barang  = query("SELECT * FROM barang");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="..css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
   <title>Admin Panel</title>
</head>
<body>
 <!--JavaScript at end of body for optimized loading-->
 <script type="text/javascript" src="js/materialize.min.js"></script>
    <div class="container">
    <h3>Welcome, Admin!</h3>
        <table class="highlight - centered striped responsive-table cyan accent-5">
        <div class="add">
            <a href="tambah.php">Add Outfit</a>
        </div>
            <thead>
                <tr class="cyan darken-2">
                    <th>No.</th>
                    <th>Option</th>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Size</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach($barang as $brg) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td>
                            <a href=""><button>Change</button></a>
                            <a href="hapus.php?id=<? $brg['id'] ?>" onclick="return confirm('Delete ?')"><button>Delete</button></a>
                        </td>
                        <td>
                        <div class="parallax">
                        <img class="materialboxed" width="250" src="../assets/img/<?= $brg["foto"]; ?>"></div>
                        </div>
                        </td>
                        <td><b><?= $brg["nama"]; ?></td>
                        <td><?= $brg["detail"]; ?></td>
                        <td><?= $brg["size"]; ?></td>
                        <td>Rp.<?= $brg["harga"]; ?></td>
                        <td><?= $brg["stok"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
    </table>
</body>
</html>