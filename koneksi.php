<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
$host = "localhost";
$user = "xirpl1-18";
$pass = "3087045478"; 
$db   = "db_xirpl1-18_1";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
