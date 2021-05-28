<?php
// fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "tubes_203040041");

    return $conn;
}

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

// Add data
function tambah($data)
{
    $conn = koneksi();

    $images = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama']);
    $detail = htmlspecialchars($data['detail']);
    $size = htmlspecialchars($data['size']);
    $harga = htmlspecialchars($data['harga']);
    $stok = htmlspecialchars($data['stok']);

    $query = "INSERT INTO barang
                        VALUES
                        ('', 'gambar', 'nama', 'detail', 'size', 'harga', 'stok')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    echo mysqli_error($conn);

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
    $gambar = htmlspecialchars($data['foto']);

    $query = "UPDATE barang
        SET
        images = '$gambar',
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

//function login
function login($data)
{
    $conn = koneksi();
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    if($user = query("SELECT * FROM user WHERE username = '$username'")[0]) {
        // cek password
        if(password_verify($password, $user['password'])) {
        // session
            $_SESSION['login'] = true;

        // admin
        if($user['status'] == 'admin') {
            $_SESSION['status'] = 'admin';
            header("Location: php/admin.php");
            exit;
        }
        else{
            $_SESSION['status'] = 'user';
            header("Location: ../index.php");
            exit;
            }
        }
    }
}
?>