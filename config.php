<?php 
   $host = "localhost";
   $user = "user";
   $password = "";
   $db = "login";

   $koneksi = mysqli_connect($host, $user, $password, $db);

   if(!$koneksi) {
      die("Koneksi gagal : ".mysql_connect_error());
   }
?>