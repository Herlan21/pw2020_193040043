<?php

session_start();
if (isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

require "function.php";

$id_mhs = $_GET['id_mhs'];
$mhs = query("SELECT * FROM mahasiswa WHERE id_mhs = $id_mhs")[0];

if (isset($_POST['ubah'])) {

  if (ubah($_POST) > 0) {
    echo "<script>
        alert('Data berhasil diubah');
        document.location.href = 'admin.php';
    </script>";
  } else {
    echo "<script>
        alert('Data gagal diubah');
        document.location.href = 'admin.php';
    </script>";
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Ubah data Mahasiswa</title>
</head>

<body>

  <form action="" method="POST">
    <input type="hidden" name="id_mhs" value="<?= $mhs['id_mhs']; ?>">

    <div class="form-group">
      <label for="foto">Foto</label>
      <input name="foto" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Masukkan Foto" value="<?= $mhs['foto']; ?>">
      <small id="emailHelp" class="form-text text-muted">Silahkan Masukkan Foto</small>
    </div>

    <div class="form-group">
      <label for="nama">Nama Mahasiswa</label>
      <input name="nama" type="text" class="form-control" placeholder="Masukkan Nama Mahasiswa" value="<?= $mhs['nama']; ?>">
    </div>


    <div class="form-group">
      <label for="nrp">NRP</label>
      <input name="nrp" type="text" class="form-control" placeholder="Masukkan NRP" value="<?= $mhs['nrp']; ?>">

    </div>


    <div class="form-group">
      <label for="email">Email</label>
      <input name="email" type="text" class="form-control" placeholder="Masukkan Email" value="<?= $mhs['email']; ?>">
    </div>


    <div class="form-group">
      <label for="jurusan">Jurusan</label>
      <input name="jurusan" type="text" class="form-control" placeholder="Masukkan Jurusan Mahasiswa" value="<?= $mhs['jurusan']; ?>">
    </div>

    <button type="submit" class="btn btn-primary" name="ubah">Ubah Data</button>

  </form>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>