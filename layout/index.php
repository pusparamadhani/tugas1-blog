<!DOCTYPE html>
<html>
<head>
	<title>BUBLEGUM SHOP</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS; ?>css/style.css">
</head>
<body>
<div class="container">
	<div class="header">
		<img src="<?php echo ASSETS; ?>image/header.jpg">	
	</div>
		
	<div class="menu">
		<a href="index.php">HOME</a>
		<a href="index.php?page=login">LOGIN</a>
	</div>
	
	<div class="main">
		<?php
			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "index_main.php";
			}
		?>
	</div>

	<div class="footer">
		Copyright &copy; 2020. Programmed Puspa Ramadhani 
	</div>
</div>
</body>
</html>