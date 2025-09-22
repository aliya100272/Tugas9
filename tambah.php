<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Ekskul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4">Tambah Data Ekskul</h2>
    <form method="post" class="card p-4 shadow-sm">
        <div class="mb-3">
            <label class="form-label">Nama Ekskul</label>
            <input type="text" name="nama_ekskul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Siswa</label>
            <input type="text" name="nama_siswa" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Kelas</label>
            <input type="text" name="kelas" class="form-control" required>
        </div>
        <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $nama_ekskul = $_POST['nama_ekskul'];
        $nama_siswa  = $_POST['nama_siswa'];
        $kelas       = $_POST['kelas'];

        $sql = mysqli_query($koneksi, "INSERT INTO ekskul (nama_ekskul, nama_siswa, kelas) 
                                       VALUES ('$nama_ekskul', '$nama_siswa', '$kelas')");
        if ($sql) {
            echo "<div class='alert alert-success mt-3'>Data berhasil disimpan</div>";
        } else {
            echo "<div class='alert alert-danger mt-3'>Gagal menyimpan data</div>";
        }
    }
    ?>
</div>
</body>
</html>
