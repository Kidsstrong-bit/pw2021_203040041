<?php
require 'functions.php';

if (isset($_POST["register"])) {
    
    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('Registrasi Berhasil');
                document.location.href = 'login.php';
                </script>";
    } else {
        echo "<script>
                alert('Registrasi Gagal');
                </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register Page</title>
</head>
</html>
<body>
	<form action="" method="post">
		<div class="form-element">
		<h2>Welcome Ghost shop!</h2>
			<input type="text" name="username" id="username" placeholder="Username" required />
			<input type="password" name="password" id="password" placeholder="Password" required />
			<input type="submit" name="register id="register" value="REGISTER" />
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
h2{
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