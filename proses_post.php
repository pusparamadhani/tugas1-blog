<?php
require_once "inc/config.php";

$post = new app\post();

if ($_POST['tsimpan']) {
	$post->input();
	header("location:index.php?page=tampil_post");
}

if ($_POST['tedit']) {
	$post->update();
	header("location:index.php?page=tampil_post");
}

if ($_GET['delete-id']) {
	$post->delete($_GET['delete-id']);
	header('location:index.php?page=tampil_post');
}

 ?>