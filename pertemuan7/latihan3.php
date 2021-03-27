<!-- Gilang Ramadhan
203040041
https://github.com/Kidsstrong-bit/pw2021_203040041
Pertemuan 7 - 23 Maret 2021
GET & POST -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>POST 203040041</title>
</head>
<body>

<?php if( isset($_POST["submit"]) ) : ?>
<h1>Hallo, Selamat Datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?>


    <form action="latihan4.php" method="post">
        Masukkan nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>