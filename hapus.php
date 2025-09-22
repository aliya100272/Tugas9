<?php
include "koneksi.php";

$id = $_GET['id'];

$sql = mysqli_query($koneksi, "DELETE FROM ekskul WHERE id_ekskul='$id'");

if ($sql) {
    header("Location: index.php");
} else {
    echo "Gagal menghapus data: " . mysqli_error($koneksi);
}
?>
