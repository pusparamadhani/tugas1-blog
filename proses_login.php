<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $query = $koneksi->prepare("SELECT * FROM tb_user WHERE user_name = '$username' AND user_password = '$pass'");
   $query->execute();
   $hasil = $query->fetchAll();
   foreach($hasil as $row)
   {

   }
   if ($hasil>0)
   {
    $_SESSION['username']=$row['user_name'];
    header('location:dashboard.php');
   }
   else
   {
    header('location:login.php');
   }
   ?>