<?php
include "app/controller.php";
include "app/user.php";

$user = new app\user();

if ($_POST['btn-simpan']) {
	$user->input();
	header("location:dashboard.php?page=user_tampil");
}

if ($_POST['btn-update']) {
	$user->update();
	header("location:dashboard.php?page=user_tampil");
}
