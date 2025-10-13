<?php 
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
include 'koneksi.php'; ?>
<?php
$id = $_GET['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM eskul WHERE id=$id");
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
      <input type="text" name="Nama_ekskul" class="form-control" value="<?= $data['Nama_ekskul'] ?>" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Nama Siswa</label>
      <input type="text" name="Nama_siswa" class="form-control" value="<?= $data['Nama_siswa'] ?>" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Kelas</label>
      <input type="text" name="Kelas" class="form-control" value="<?= $data['Kelas'] ?>" required>
    </div>
     <div class="mb-3">
      <label class="form-label">No Hp</label>
      <input type="text" name="No_Hp" class="form-control" value="<?= $data['No_Hp'] ?>" required>
    </div>
     <div class="mb-3">
      <label class="form-label">Umur</label>
      <input type="text" name="umur" class="form-control" value="<?= $data['umur'] ?>" required>
    </div>
    <button type="submit" name="update" class="btn btn-success">Update</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
  </form>

  <?php
  if (isset($_POST['update'])) {
      $nama_ekskul = $_POST['Nama_ekskul'];
      $nama_siswa  = $_POST['Nama_siswa'];
      $kelas       = $_POST['Kelas'];
      $No_Hp       = $_POST['No_Hp'];
      $umur        = $_POST['umur'];

      $sql = "UPDATE eskul SET Nama_ekskul='$nama_ekskul', Nama_siswa='$nama_siswa', Kelas='$kelas', No_Hp='$No_Hp', umur='$umur' WHERE id=$id";
      if (mysqli_query($koneksi, $sql)) {
          echo "<script>alert('Data berhasil diupdate'); window.location='index.php';</script>";
      } else {
          echo "Error: " . mysqli_error($koneksi);
      }
  }
  ?>
</body>
</html>
