<?php
$host = "localhost";
$user = "root"; 
$pass = "3087045478";  // kosongkan kalau tidak ada password
$db   = "db_xirpl1_18_1";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
