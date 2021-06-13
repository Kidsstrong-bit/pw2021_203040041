<?php
$mahasiswa = [["Gilang Ramadhan", "203040041", "Teknik Informatika", "Gilangyouth1@gmail.com"],
["Gilang R", "203040042", "Teknik Informatika", "Gilangyouth2@gmail.com"],
["Gilang", "203040043", "Teknik Informatika", "Gilangyouth3@gmail.com"]

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>