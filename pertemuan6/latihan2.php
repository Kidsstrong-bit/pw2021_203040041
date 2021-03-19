<?php
/*
Gilang Ramadhan
203040041
https://github.com/Kidsstrong-bit/pw2021_203040041
Pertemuan 6 - 20 Maret 2021
Mempelajari Mengenai associative array
*/
// $mahasiswa = [
//     ["Gilang Ramadhan", "203040041", "gilangyouth1@gmail.com", "Teknik Informatika"],
//     ["Genta Nugraha""203040099", "gentan@gmail.com", "Teknik Industri"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$barang = [
    [
        "nama"=>"Anti Social Social Club Shirt",
        "detail"=>"Solid colors: 100% Cotton; Heather Grey: 90% Cotton, 10% Polyester; All Other Heathers: 50% Cotton, 50% Polyester",
        "sizeChart"=>"S, M , L , XL, XXL",
        "harga"=>"$19.99",
        "stokBarang"=>"6",
        "gambar"=>"assc1.jpg",
    ],
    [
        "nama"=>"Retro Great Wave Japanese Vaporwave Cat 90's Aesthetic Gift T-Shirt",
        "detail"=>"Solid colors: 100% Cotton; Heather Grey: 90% Cotton, 10% Polyester; All Other Heathers: 50% Cotton, 50% Polyester",
        "sizeChart"=>"S, M , L , XL, XXL",
        "harga"=>"$18.99",
        "stokBarang"=>"4",
        "gambar"=>"assc2.jpg",
    ],
    [
        "nama"=>"Anti-Social Hoodie in Japanese White Text Pullover Hoodie",
        "detail"=>"olid colors: 80% Cotton, 20% Polyester; Heather Grey: 78% Cotton, 22% Poly; Dark Heather: 50% Cotton, 50% Polyester",
        "sizeChart"=>"S, M , L , XL, XXL",
        "harga"=>"$29.97",
        "stokBarang"=>"10",
        "gambar"=>"assc3.jpg",
    ],
    [
        "nama"=>"Anti Social Club 3D Mask Adjustable Mouth Cover with Filter and Nose Clip for Mens Womans",
        "detail"=>"100% polyster, Resists 99% Of The Dust, Pollen, Gas, Chemicals, Sawdust, Gas, Smoke. Our Design Can Provide An Excellent Ventilation And Smooth Breathing Without Resistance.",
        "sizeChart"=>"M",
        "harga"=>"1000000",
        "stokBarang"=>"30",
        "gambar"=>"assc4.jpg",
    ],
    [
        "nama"=>"Antisocial ~ Old English Font Pullover Hoodie",
        "detail"=>"Solid colors: 80% Cotton, 20% Polyester; Heather Grey: 78% Cotton, 22% Poly; Dark Heather: 50% Cotton, 50% Polyester",
        "sizeChart"=>"S, M , L , XL, XXL",
        "harga"=>"$31.99",
        "stokBarang"=>"8",
        "gambar"=>"assc5.jpg",
    ],
    [
        "nama"=>"Riot Society Men's Graphic or Embroidered Hoodie Hooded Sweatshirt",
        "detail"=>"50% Polyester / 50% Cotton",
        "sizeChart"=>"S, M , L , XL, XXL",
        "harga"=>"$55.50",
        "stokBarang"=>"15",
        "gambar"=>"assc6.jpg",
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazing</title>
</head>
<body>
  <h1>Hey, Welcome to Amazing Shop </h1>
  <?php foreach ($barang as $brg) : ?>
        <ul>
            <li><img src="img/<?= $brg["gambar"]?>"</li>
            <li>Nama : <?= $brg["nama"];?></li>
            <li>Detail : <?= $brg["detail"];?></li>
            <li>Size Chart : <?= $brg["sizeChart"];?></li>
            <li>Harga : <?= $brg["harga"];?></li>
            <li>Stok Barang : <?= $brg["stokBarang"];?></li>
        </ul>  
        <?php endforeach; ?>
</body>
</html>