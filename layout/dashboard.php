<!DOCTYPE html>
<html>
<head>
	<title>BUBLEGUM SHOP</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS; ?>css/style.css"">
</head>
<body>
<div class="container">
	<div class="header">
		<img src="<?php echo ASSETS; ?>image/header.jpg">	
	</div>
		
	<div class="menu">
		<a href="dashboard.php?page=tampil_category">CATEGORY</a>
		<a href="dashboard.php?page=tampil_post">POST</a>
		<a href="dashboard.php?page=tampil_photos">PHOTOS</a>
		<a href="dashboard.php?page=tampil_album">ALBUM</a>
		<a href="dashboard.php?page=user_tampil">USER</a>
		<a href="logout.php">LOGOUT</a>
	</div>
	
	<div class="main">
		<?php
			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "dashboard_main.php";
			}
		?>
	</div>

	<div class="footer">
		Copyright &copy; 2020. Programmed Puspa Ramadhani 
	</div>
</div>
</body>
</html>