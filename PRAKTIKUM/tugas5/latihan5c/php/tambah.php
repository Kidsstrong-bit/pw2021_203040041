<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Added successfully!');
                    document.location.href = 'admin.php';
                </script>";
    
    } else {
        echo "<script>
                    alert('Added successfully!');
                    document.location.href = 'admin.php';
                </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update Outfit</title>
</head>
<body>
<h3>Form Update Outfit</h3>
<form action="" method="post">
    <ul>
        <li>
        <label for="nama">Name :</label><br>
        <input type="text" name="nama" id="nama" required><br><br>
        </li>
        <li>
        <label for="detail">Details :</label><br>
        <input type="text" name="detail" id="detail" required><br><br>
        </li>
        <li>
        <label for="size">Size :</label><br>
        <input type="text" name="size" id="size" required><br><br>
        </li>
        <li>
        <label for="harga">Price :</label><br>
        <input type="text" name="price" id="price" required><br><br>
        </li>
        <li>
        <label for="stok">Stock :</label><br>
        <input type="text" name="stok" id="stok" required><br><br>
        </li>
        <label for="foto">Image :</label><br>
        <input type="file" name="foto" id="foto" required/></td></tr>
        <br><br><br>
        <button type="submit" name="update">Update</button>
        <button type="submit">
            <a href="index.php" style="text-decoration: none; color: black;">Back</a>
        </button>
    </ul>
</body>
</html>