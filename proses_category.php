<?php
include_once "app/controller.php";
include_once "app/category.php";

$category = new app\category();

if ($_POST['tsimpan']) {
	$category->input();
	header("location:dashboard.php?page=tampil_category");
}

if ($_POST['tedit']) {
	$category->update();
	header("location:dashboard.php?page=tampil_category");
}

if ($_GET['delete-id']) {
	$category->delete($_GET['delete-id']);
	header('location:dashboard.php?page=tampil_category');
}

?>