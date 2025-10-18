<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
// variable data koneksi
$host = "localhost";
$user = "xirpl1-18";
$pass = "3087045478"; 
$db   = "db_xirpl1-18_1";

// perintah koneksi
$koneksi = mysqli_connect($host, $user, $pass, $db);

// cek status koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
