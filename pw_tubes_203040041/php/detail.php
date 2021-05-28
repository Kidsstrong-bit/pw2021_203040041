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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIOT.</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
</head>
<body>
    <div class="header-background">
        <div id="nav" class="sticky-nav">

        <nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="#">Riot.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <span></span>
      <span></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <a class="btn btn-dark" href="php/login.php" type="button">Sign in</a>
      </form>
    </div>
  </div>
</nav>
        <div class="container">
            <div class="row">
                <div class="col s8 m7">
                    <div class="card-center">
                        <div class="card-image">
                        <div class="parallax">
                        <img class"img-fluid" width="231" height="251" src="../assets/images/<?= $barang["gambar"]; ?>"></div>
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
