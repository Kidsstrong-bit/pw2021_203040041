<?php
session_start();
require 'functions.php';

if (isset($_SESSION['username'])) {
	header("Location: admin.php");
	exit;
}
//
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
	$username = $_COOKIE['username'];
	$hash = $_COOKIE['hash'];

	// ambil username berdasarkan id
	$result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username
	if ($hash == hash('sha256', $row['id'], false)) {
		$_SESSION['username'] = $row['username'];
		header("Location: admin.php");
		exit;
	}
}
// Login
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
	// Mencocokan USERNAME dan PASSWORD
	if (mysqli_num_rows($cek_user) > 0) {
		$row = mysqli_fetch_assoc($cek_user);
		if (password_verify($password, $row['password'])) {
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['hash'] = hash('sha256', $row['id'], false);
			// jika remember me dicentang
			if (isset($_POST['remember'])) {
				setcookie('username', $row['username'], time() + 60 * 60 * 24);
				$hash = hash('sha256', $row['id']);
				setcookie('hash', $hash, time() + 60 * 60 * 24);
			}
			if (hash('sha256', $row['id']) == $_SESSION['hash']) {
				header("Location: admin.php");
				die;
		}
		header("Location: ../index.php");
		die;
		}
	}
	$error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <scrip src="js/bootstrap.min.js"></>
    <!-- Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
html{
width: 100%;
height: 100%;
overflow: hidden;
}
.container{
height: 30%;
width: 30%;
}
body {
background: #465151;
}
h2, h4{
color: #fff;
text-shadow: 0 0 10px rgba(0,0,0,0.3);
letter-spacing: 1px;
text-align: center;
}
input {
width: 100%;
line-height: 4;
margin-bottom: 10px;
background: rgba(0,0,0,0.3);
border: none;
outline: none;
font-size: 13px;
color: #fff;
text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
border: 1px solid rgba(0,0,0,0.3);
border-radius: 4px;
box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
-webkit-transition: box-shadow .5s ease;
-moz-transition: box-shadow .5s ease;
-o-transition: box-shadow .5s ease;
-ms-transition: box-shadow .5s ease;
transition: box-shadow .5s ease;
}
#submit{
background-color: #4a77d4;
padding: 20px 14px;
font-size: 15px;
line-height: normal;
}
form#login_form {
width: 30%;
margin-left: 30%;
margin-top:100px;
}
::placeholder {
color:#fff;
font-size: 18px;
padding-left: 20px;
}
</style>
<body>
<nav class="navbar navbar-dark bg-dark">
<div class="container-fluid">
    <a class="navbar-brand" href="#">Riot. </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./registrasi.php">Sign up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./login.php">Log in</a>
        </li>
</div>
    </nav>
	<div class="container">
	<form action="" method="post">
		<div class="form-element">
		<?php if (isset($error)) : ?>
			<p style="color: red; font-style: italic;">Username or password wrong</p>
		<?php endif; ?>
		<h2>Welcome!</h2>
			<input type="text" name="username" id="username" placeholder="Username" required />
			<input type="password" name="password" id="password" placeholder="Password" required />
			<div class="remember">
				<input type="checkbox" name="remember" label for="remember" value="Remember me"/>
				</div>
			<input type="submit" name="submit" value="Let me in" />
			<div class="registrasi">
			<h4> Register <a href="registrasi.php">here</a></h4>		
</div>
</form>
</div>
</body>
</html>