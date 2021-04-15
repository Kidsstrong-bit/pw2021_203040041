<!--  NAMA : GILANG RAMADHAN
      NRP : 203040041
      SHIFT JUMAT 10:00 - 11:00 
-->
<?php
// fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040041");

    return $conn;
}

// function untuk melakukan query dan memasukkannya kedalam array
function query($sqL)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sqL");
    $barang = [];
    while ($brg = mysqli_fetch_assoc($result)) {
        $barang[] = $brg;
    }
    return $barang;

}

// function untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $nama = htmlspecialchars($data['detail']);
    $nama = htmlspecialchars($data['size']);
    $nama = htmlspecialchars($data['harga']);
    $nama = htmlspecialchars($data['stok']);
    $nama = htmlspecialchars($data['foto']);

    $query = "INSERT INTO barang
                        VALUES
                        ('', '$foto', 'nama', 'detail', 'size', 'harga', 'stok')";
    mysqli_quey($conn, $query);

    return mysqli_affected_rows($conn);
}
?>