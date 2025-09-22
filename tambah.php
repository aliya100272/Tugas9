<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container py-4">
  <h2 class="mb-4">Tambah Data Ekskul</h2>
  <form method="POST">
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

      $sql = "INSERT INTO ekskul (nama_ekskul, nama_siswa, kelas) VALUES ('$nama_ekskul', '$nama_siswa', '$kelas')";
      if (mysqli_query($koneksi, $sql)) {
          echo "<script>alert('Data berhasil ditambahkan'); window.location='index.php';</script>";
      } else {
          echo "Error: " . mysqli_error($koneksi);
      }
  }
  ?>
</body>
</html>
