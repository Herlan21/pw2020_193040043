<?php
require 'functions.php';

$id = $_GET['id'];

$mahasiswa = query("SELECT * FROM mahasiswa WHERE id_mhs = $id");

if (!isset($_GET['id'])) {
  header("location : latihan3.php");
  exit;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <div class="container">
    <div class="gambar">
      <li><img src="assets/img/<?= $mahasiswa['foto']; ?>" width="300px" align="center"></li>
    </div>

    <ul>

      <li>NRP : <?= $mahasiswa['nrp']; ?></li>
      <li>Nama: <?= $mahasiswa['nama']; ?></li>
      <li>Email :<?= $mahasiswa['email']; ?></li>
      <li>Jurusan :<?= $mahasiswa['jurusan']; ?></li>

    </ul>

    <button class="tombol-kembali"><a href="latihan3.php">Kembali</a></button>
  </div>
</body>

</html>