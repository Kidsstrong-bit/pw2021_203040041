<!--  NAMA : GILANG RAMADHAN
      NRP : 203040041
      SHIFT JUMAT 10:00 - 11:00 
-->
<?php 
$pemainBola = [
    "Cristiano Ronaldo" => "Juventus",
    "Lionel Messi" => "Barcelona",
    "Luca Modric" => "Real Madrid",
    "Mohammad Saleh" => "Liverpool",
    "Neymar Jr" => "Paris Saint German",
    "Sadio Mane" => "Liverpool",
    "Zlatan Ibrahimovic" => "Ac Milan"
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3c</title>
    <style>
        .tabel {
            font-family: arial;
            font-size: 16px;
            border: 2px solid black;
            padding: 10px;
            width: 30%;
        }
    </style>
</head>
<body>
    <div class="tabel">
        <h3>Daftar pemain bola terkenal dan clubnya</h3>
        <table>
            <?php foreach($pemainBola as $pBola => $club) : ?>
                <td><b><?= $pBola; ?></b></td>
                <td>:</td>
                <td><?= $club; ?></td>
                <tr></tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>