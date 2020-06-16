<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header("Location: index.php"); }
   require_once("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">
</head>
<body>
		<div class="box-login" align="center">
			<h2>SILAHKAN LOGIN</h2>
			<form action="proses_login.php" method="POST">
				<tr>
				<td><img src="layout/assets/image/login3.png" width="30px"></td>
				<td><input type="text" name="username" placeholder="Masukkan Username"><br></td>
			</tr>
			<tr>
				<td><img src="layout/assets/image/pas.png" width="30px"></td>
				<td><input type="password" name="password" placeholder="Masukkan Password"><br></td>
			</tr>

			<td>
				<input type="submit" name="masuk" value="Login"><br>
			</td>
			<tr><td class="belum punya" colspan="2" align="center">Belum Punya Akun? <a href="daftar.php"> <b>Daftar</b></a></td><tr>
			</form>
		</div>
</body>
</html>