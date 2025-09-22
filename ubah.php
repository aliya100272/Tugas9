<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Ekskul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4">Ubah Data Ekskul</h2>
    <?php
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM ekskul WHERE id_ekskul='$id'");
    $row = mysqli_fetch_assoc($data);
    ?>

    <form method="post" class="card p-4 shadow-sm">
        <div class="mb-3">
            <label class="form-label">Nama Ekskul</label>
            <input type="text" name="nama_ekskul" class="form-control" value="<?= $row['nama_ekskul']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Siswa</label>
            <input type="text" name="nama_siswa" class="form-control" value="<?= $row['nama_siswa']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Kelas</label>
            <input type="text" name="kelas" class="form-control" value="<?= $row['kelas']; ?>" required>
        </div>
        <button type="submit" name="update" class="btn btn-warning">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $nama_ekskul = $_POST['nama_ekskul'];
        $nama_siswa  = $_POST['nama_siswa'];
        $kelas       = $_POST['kelas'];

        $sql = mysqli_query($koneksi, "UPDATE ekskul SET 
                        nama_ekskul='$nama_ekskul',
                        nama_siswa='$nama_siswa',
                        kelas='$kelas'
                        WHERE id_ekskul='$id'");
        if ($sql) {
            echo "<div class='alert alert-success mt-3'>Data berhasil diupdate</div>";
        } else {
            echo "<div class='alert alert-danger mt-3'>Gagal mengupdate data</div>";
        }
    }
    ?>
</div>
</body>
</html>
