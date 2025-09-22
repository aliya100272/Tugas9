<?php include "koneksi.php"; ?>
<?php
$id = $_GET['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM ekskul WHERE id_ekskul=$id");
$data = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Ubah Data</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container py-4">
  <h2 class="mb-4">Ubah Data Ekskul</h2>
  <form method="POST">
    <div class="mb-3">
      <label class="form-label">Nama Ekskul</label>
      <input type="text" name="nama_ekskul" class="form-control" value="<?= $data['nama_ekskul'] ?>" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Nama Siswa</label>
      <input type="text" name="nama_siswa" class="form-control" value="<?= $data['nama_siswa'] ?>" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Kelas</label>
      <input type="text" name="kelas" class="form-control" value="<?= $data['kelas'] ?>" required>
    </div>
    <button type="submit" name="update" class="btn btn-success">Update</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
  </form>

  <?php
  if (isset($_POST['update'])) {
      $nama_ekskul = $_POST['nama_ekskul'];
      $nama_siswa  = $_POST['nama_siswa'];
      $kelas       = $_POST['kelas'];

      $sql = "UPDATE ekskul SET nama_ekskul='$nama_ekskul', nama_siswa='$nama_siswa', kelas='$kelas' WHERE id_ekskul=$id";
      if (mysqli_query($koneksi, $sql)) {
          echo "<script>alert('Data berhasil diupdate'); window.location='index.php';</script>";
      } else {
          echo "Error: " . mysqli_error($koneksi);
      }
  }
  ?>
</body>
</html>
