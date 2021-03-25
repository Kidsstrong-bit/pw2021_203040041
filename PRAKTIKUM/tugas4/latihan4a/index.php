<!--  NAMA : GILANG RAMADHAN
      NRP : 203040041
      SHIFT JUMAT 10:00 - 11:00 
-->
<?php
// Connect ke database
$conn = mysqli_connect("localhost", "root", "");

// Memiih database yang digunakan
mysqli_select_db($conn, "pw_tubes_203040041");

// Mengambil data dari database (query)
$result = mysqli_query($conn, "SELECT * FROM barang");
if (!$result) {
    echo mysqli_error($conn);

}

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
                <?php while($barang = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                    <td><?= $barang["id"]; ?></td>
                        <td>
                        <div class="parallax">
                        <img class"materialboxed" width="250" src="assets/img/<?= $barang["foto"]; ?>"></div>
                        </div>
                        </td>
                        <td><b><?= $barang["nama"]; ?></td>
                        <td><?= $barang["detail"]; ?></td>
                        <td><?= $barang["size"]; ?></td>
                        <td>Rp.<?= $barang["harga"]; ?></td>
                        <td><?= $barang["stok"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    </div>
</body>
</html>