<?php

require "function.php";

if (isset($_POST['tambah'])) {
  echo "<script>
  alert('Data Berhasil ditambah');
  document.location.href = 'admin.php';
</script>";
  if (tambah($_POST) > 0) {
  } else {
    echo "<script>
        alert('Data gagal ditambah');
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

  <title>Request Buku</title>
</head>

<body>

  <form action="" method="POST">

    <div class="form-group">
      <label for="cover">Cover</label>
      <input type="text" name="cover" class="form-control" aria-describedby="emailHelp" placeholder="Masukkan Nama Cover Buku">
      <small id="emailHelp" class="form-text text-muted">Silahkan Masukkan Judul Buku Yang Akan Anda masukan</small>
    </div>

    <div class="form-group">
      <label for="judul_buku">Judul Buku</label>
      <input type="text" name="judul_buku" class="form-control" placeholder="Masukkan Judul Buku">
    </div>


    <div class="form-group">
      <label for="pengarang">Pengarang</label>
      <input type="text" name="pengarang" class="form-control" placeholder="Masukkan Nama Pengarang">
    </div>


    <div class="form-group">
      <label for="tahun_terbit">Tahun Terbit</label>
      <input type="text" name="tahun_terbit" class="form-control" placeholder="Masukkan Tahun Terbit Buku">
    </div>


    <div class="form-group">
      <label for="harga">Harga</label>
      <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga Buku">
    </div>

    <button type="submit" class="btn btn-primary" name="tambah">Tambah Data</button>

  </form>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>