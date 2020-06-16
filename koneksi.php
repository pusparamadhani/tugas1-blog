<?php
$dbhost = "localhost";
$dbname="utssem6";
$dbuser="root";
$dbpass="";

try {

	$koneksi= new PDO ("mysql:host=" . $dbhost . ";dbname=" . $dbname . "", $dbuser, $dbpass);

	$koneksi->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

} catch (PDOException $e) {
	echo "Koneksi Gagal".$e->getMessage();
}

 ?>