<!-- Nama : Gilang Ramadhan
     Nrp  : 203040041
     Kelas : B
     Github : https://github.com/kidsstrong-bit/pw2021_203040041
     -->
<?php
session_start();

if (isset($_SESSION['login'])) {
  header("Location: ../index.php");
  exit;
}

require 'functions.php';

// Ketika tombol login ditekan
if (isset($_POST['login'])) {
  $login = login($_POST);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <h3>Form Login</h3>
  <?php if (isset($login['error'])) : ?>
    <p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
  <?php endif; ?>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Username :
          <input type="text" name="username" autofocus autocomplete="off" required>
        </label>
      </li><br>
      <li>
        <label>
          Password :
          <input type="password" name="password" required>
        </label>
      </li><br>
      <li>
        <button type="submit" name="login">Login</button>
      </li>
      <li>
        <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
      </li>
    </ul>
  </form>
</body>

</html>