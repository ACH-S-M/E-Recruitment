<?php 
$host = "localhost";
$user = "root";
$password = "10012005";
$db = "rekrutmen";
$koneksi = mysqli_connect($host, $user, $password, $db);

if (!$koneksi) {
    die("Koneksi Gagal !" .mysqli_connect_error());
}
?>