<?php
// Aktifkan error reporting untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$username = "xirpl1-18"; // Ganti dengan username database Anda
$password = "3087045478"; // Ganti dengan password database Anda
$database = "db_xirpl1-18_1";

// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Membuat tabel jika belum ada
$sql = "CREATE TABLE IF NOT EXISTS hp (
    id_ekskul INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama_ekskul VARCHAR(255) NOT NULL,
    nama_siswa VARCHAR(200) NOT NULL,
    kelas VARCHAR(20) NOT NULL
)";

if (!mysqli_query($conn, $sql)) {
    echo "Error creating table: " . mysqli_error($conn);
}
?>