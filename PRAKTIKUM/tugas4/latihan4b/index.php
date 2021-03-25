<!--  NAMA : GILANG RAMADHAN
      NRP : 203040041
      SHIFT JUMAT 10:00 - 11:00 
-->
<?php
require 'php/functions.php';
// Melakukan query ke database
$barang = query("SELECT * FROM barang")

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
   <title>GHOST SHOP</title>
</head>
<body>
 <!--JavaScript at end of body for optimized loading-->
 <script type="text/javascript" src="js/materialize.min.js"></script>
    <div class="container">
    <div class="h2">Welcome to Ghost Shop!</div>
        <table class="highlight - centered striped responsive-table cyan accent-2">
            <thead>
                <tr class="cyan darken-4">
                    <th>No.</th>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Size</th>
                    <th>Price</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach($barang as $brg) : ?>
                    <tr>
                    <td><?= $i ?></td>
                        <td>
                        <div class="parallax">
                        <img class"materialboxed" width="250" src="assets/img/<?= $brg["foto"]; ?>"></div>
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
    </div>
    </div>
</body>
</html>