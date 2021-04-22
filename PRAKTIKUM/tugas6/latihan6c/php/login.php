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
	if ($hash === hash('sha256', $row['id'], false)) {
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
</head>
</html>
<body>
	<form action="" method="post">
		<div class="form-element">
		<?php if (isset($error)) : ?>
			<p style="color: red; font-style: italic;">Username or password wrong</p>
		<?php endif; ?>
		<h2>Welcome Ghost shop!</h2>
			<input type="text" name="username" id="username" placeholder="Username" required />
			<input type="password" name="password" id="password" placeholder="Password" required />
			<input type="submit" id="submit" value="Let me in" />
			<div class="registrasi">
			<h3> Register <a href="registrasi.php">here</a></h3>
</div>
</form>
</body>
<style>
html{
width: 100%;
height: 100%;
overflow: hidden;
}
body {
width: 30%;
height:30%;
background: #465151;
}
h2, h3{
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
</html>