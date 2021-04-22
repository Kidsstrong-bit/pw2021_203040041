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
                        ('', 'foto', 'nama', 'detail', 'size', 'harga', 'stok')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// function untuk menghapus data berdasarkan id
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM barang WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// function untuk mengubah data
function ubah($data)
{
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $nama = htmlspecialchars($data['nama']);
    $detail = htmlspecialchars($data['detail']);
    $size = htmlspecialchars($data['size']);
    $harga = htmlspecialchars($data['harga']);
    $stok = htmlspecialchars($data['stok']);
    $foto = htmlspecialchars($data['foto']);

    $query = "UPDATE barang2
        SET
        img = '$foto',
        nama = '$nama',
        detail = '$detail',
        size = '$harga',
        stok = '$stok',
        WHERE id = '$id'
        ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// function registrasi
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username apakah sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah digunakan');
                </script>";
                return false;
    }

    // enskripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
?>