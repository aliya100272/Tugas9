<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Ekskul</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container py-4">
  <h2 class="mb-4">Daftar Ekskul</h2>
  <a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Data</a>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>Nama Ekskul</th>
        <th>Nama Siswa</th>
        <th>Kelas</th>
        <th>No Hp</th>
        <th>Umur</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = mysqli_query($koneksi, "SELECT * FROM eskul");
      while ($data = mysqli_fetch_assoc($sql)) {
          echo "<tr>
                  <td>{$data['id']}</td>
                  <td>{$data['Nama_ekskul']}</td>
                  <td>{$data['Nama_siswa']}</td>
                  <td>{$data['Kelas']}</td>
                  <td>{$data['No_Hp']}</td>
                  <td>{$data['umur']}</td>
                  <td>
                    <a href='ubah.php?id={$data['id']}' class='btn btn-warning btn-sm'>Ubah</a>
                    <a href='hapus.php?id={$data['id']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Yakin mau hapus?');\">Hapus</a>
                  </td>
                </tr>";
      }
      ?>
    </tbody>
  </table>
</body>
</html>
