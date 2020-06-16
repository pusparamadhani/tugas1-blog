<?php
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $query = $koneksi->prepare("SELECT * FROM tb_user WHERE user_name = ?");
   $query->execute(array($username));
   if($query->rowCount() != 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Kembali</a></div>";
   } else {
     if(!$username || !$pass) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Kembali</a>";
     } else {
       $sql = $koneksi->prepare("INSERT INTO tb_user (user_name, user_password) VALUES (?, ?)");
       $simpan = $sql->execute(array($username, $pass));
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>