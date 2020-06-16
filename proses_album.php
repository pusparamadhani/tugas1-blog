<?php
include_once "app/controller.php";
include_once "app/album.php";

$album = new album();

if ($_POST['tsimpan']) {
	$album->input();
	header("location:index.php?page=tampil_album");
}

if ($_POST['tedit']) {
	$album->update();
	header("location:index.php?page=tampil_album");
}

if ($_GET['delete-id']) {
	$album->delete($_GET['delete-id']);
	header('location:index.php?page=tampil_album');
}

 ?>