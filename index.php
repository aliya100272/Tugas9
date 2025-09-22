<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Ekskul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Ekskul</h2>
    <a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Data</a>
    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama Ekskul</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM ekskul ORDER BY id_ekskul ASC");
        while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>
                <td>".$row['id_ekskul']."</td>
                <td>".$row['nama_ekskul']."</td>
                <td>".$row['nama_siswa']."</td>
                <td>".$row['kelas']."</td>
                <td>
                    <a href='ubah.php?id=".$row['id_ekskul']."' class='btn btn-warning btn-sm'>Ubah</a>
                    <a href='hapus.php?id=".$row['id_ekskul']."' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin hapus?\")'>Hapus</a>
                </td>
            </tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
