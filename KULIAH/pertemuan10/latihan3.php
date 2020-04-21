<?php
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3 align="center">Daftar Mahasiswa</h3>

  <a href="">Tambah Data Mahasiswa</a>
  <br><br>

  <table border="1" cellpadding="10" cellspacing="0" align="center">
    <tr>
      <th>Id</th>
      <th>Nama</th>
      <th>Gambar</th>
      <th>Aksi</th>

    </tr>
    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $mhs['nama']; ?></td>
        <td><img src="assets/img/<?= $mhs['foto']; ?>" width="75"></td>
        <td>
          <a href="detail.php?id=<?= $mhs['id_mhs']; ?>">Lihat detail</a>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>
</body>

</html>