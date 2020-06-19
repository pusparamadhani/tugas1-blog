<?php
include_once "app/controller.php";
include_once "app/post.php";

$post = new app\post();

if ($_POST['tsimpan']) {
	$post->input();
	header("location:dashboard.php?page=tampil_post");
}

if ($_POST['tedit']) {
	$post->update();
	header("location:dashboard.php?page=tampil_post");
}

if ($_GET['delete-id']) {
	$post->delete($_GET['delete-id']);
	header('location:dashboard.php?page=tampil_post');
}

 ?>