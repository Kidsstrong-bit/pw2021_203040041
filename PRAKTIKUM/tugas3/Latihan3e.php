<!--  NAMA : GILANG RAMADHAN
      NRP : 203040041
      SHIFT JUMAT 10:00 - 11:00 
-->
<?php 
$barang = [
    [
        "nama"=>"Anti Social Social Club China Flag Hoodie",
        "detailBarang"=>"Solid colors: 80% Cotton, 20% Polyester; Heather Grey: 78% Cotton, 22% Poly; Dark Heather: 50% Cotton, 50% Polyester",
        "sizeChart"=>"Unisex Small, Unisex Medium, Unisex Large, Unisex XL, Unisex 2XL",
        "harga"=>9980000,
        "stokBarang"=>10,
        "foto"=>"assc.png"
    ]
];
$barangKedua = [
    [
        "namaKu"=>"Anti Social Distancing Club Pullover Hoodie",
        "detailBarangKu"=>"Solid colors: 80% Cotton, 20% Polyester; Heather Grey: 78% Cotton, 22% Poly; Dark Heather: 50% Cotton, 50% Polyester",
        "sizeChartKu"=>"Unisex Small, Unisex Medium, Unisex Large, Unisex XL, Unisex 2XL",
        "hargaKu"=>9980000,
        "stokBarangKu"=>5,
        "fotoKu"=>"assc2.jfif"
    ],
];

function rupiahIDR($duit){
    return "Rp" . number_format($duit,2,',','.');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASSC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>

</head>

<body>
    <div class="container mt-5 mb-5">
        <table id="cari" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Detail Barang</th>
                    <th>Size Chart</th>
                    <th>Harga</th>
                    <th>Stok Barang</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($barang as $dagang => $barang) : ?>
                <tr>
                    <td><?= $dagang+1; ?></td>
                    <td><?= $barang["nama"]; ?></td>
                    <td><?= $barang["detailBarang"]; ?></td>
                    <td><?= $barang["sizeChart"]; ?></td>
                    <td><?= rupiahIDR($barang["harga"]) ?></td>
                    <td><?= $barang["stokBarang"]; ?></td>
                    <td>
                        <figure class="image is-128x128">
                            <img src="img/<?= $barang["foto"]; ?>" alt="">
                        </figure>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php foreach($barangKedua as $dagang => $barangKedua) : ?>
                <tr>
                    <td><?= $dagang+2; ?></td>
                    <td><?= $barangKedua["namaKu"]; ?></td>
                    <td><?= $barangKedua["detailBarangKu"]; ?></td>
                    <td><?= $barangKedua["sizeChartKu"]; ?></td>
                    <td><?= rupiahIDR($barangKedua["hargaKu"]) ?></td>
                    <td><?= $barangKedua["stokBarangKu"]; ?></td>
                    <td>
                        <figure class="image is-100x100">
                            <img src="img/<?= $barangKedua["fotoKu"]; ?>" alt="">
                        </figure>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            
        </table>
    </div>
    

    <script type="text/javascript">
    $(document).ready(function() {
        $('#cari').DataTable();
    });
    </script>
</body>

</html>