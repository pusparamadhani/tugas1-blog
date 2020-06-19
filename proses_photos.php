<?php
include_once "app/controller.php";
include_once "app/photos.php";

$photos = new app\photos();

if ($_POST['tsimpan']) {
	$photos->input();
	header("location:dashboard.php?page=tampil_photos");
}

if ($_POST['tedit']) {
	$photos->update();
	header("location:dashboard.php?page=tampil_photos");
}

if ($_GET['delete-id']) {
	$photos->delete($_GET['delete-id']);
	header('location:dashboard.php?page=tampil_photos');
}

 ?>