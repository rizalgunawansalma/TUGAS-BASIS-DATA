<?php
$host     = "localhost";
$user     = "root";
$password = "";
$database = "rizal gunawan_311910798";



$koneksi   = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno($koneksi)) {
   //this for show failed

   echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
?>
