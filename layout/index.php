<!DOCTYPE html>
<html>
<head>
	<title>UJIAN TENGAH SEMESTER</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS; ?>css/style.css"">
</head>
<body>
<div class="container">
	<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location: login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>
	<div class="header">
		<img src="<?php echo ASSETS; ?>image/header.jpg">	
	</div>
		
	<div class="menu">
		<a href="index.php">HOME</a>
		<a href="index.php?page=tampil_category">CATEGORY</a>
		<a href="index.php?page=tampil_post">POST</a>
		<a href="index.php?page=tampil_photos">PHOTOS</a>
		<a href="index.php?page=tampil_album">ALBUM</a>
		<a href="logout.php">LOGOUT</a>
	</div>
	
	<div class="main">
		<?php
			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "main.php";
			}
		?>
	</div>

	<div class="footer">
		Copyright &copy; 2020. Programmed Puspa Ramadhani 
	</div>
</div>
</body>
</html>