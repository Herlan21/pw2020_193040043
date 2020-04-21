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

  <table border="1" cellpadding="10" cellspacing="0" align="center">
    <tr>
      <th>Id</th>
      <th>Nama</th>
      <th>Nrp</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Gambar</th>
      <th>Aksi</th>

    </tr>
    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $m['nama']; ?></td>
        <td><?= $m['nrp']; ?></td>
        <td><?= $m['email']; ?></td>
        <td><?= $m['jurusan']; ?></td>
        <td><img src="assets/img/<?= $m['foto']; ?>" width="85"></td>
        <td>
          <a href="">Ubah</a> | <a href="">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>
</body>

</html>