<!--  NAMA : GILANG RAMADHAN
      NRP : 203040041
      SHIFT JUMAT 10:00 - 11:00 
-->
<?php
// Untuk mengecek apakah ada id yang dikiri, jika tidak kembali ke index.php
if(!isset($_GET['id'])) {
    header("Location: ../index.php");
    exit;
}
require 'functions.php';

// Mengambil id dari url 
$id = $_GET['id'];

// Melakukan query dengan parameter id yang diambil dari url
$barang = query("SELECT * FROM barang WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>GHOST SHOP</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="..css/materialize.min.css"  media="screen,projection"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
      <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
        <div class="container">
            <div class="row">
                <div class="col s8 m7">
                    <div class="card-center">
                        <div class="card-image">
                        <div class="parallax">
                        <img class"materialboxed" width="300" height="420" src="../assets/img/<?= $barang["foto"]; ?>"></div>
                        </div>
                        <br>
                        <span class="card-title center"><b><?= $barang["nama"]; ?></span>
                    <div class="card-content">
                        <p><?= $barang["detail"]; ?></p>
                        <p><?= $barang["size"]; ?></p>
                    </div>
                        <div class="card-action">
                        <a href="../index.php">Back</a>
                        </div>
                    </div>
                </div>
            </div> 
        </div>                
    </body>
</html>
