<?php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
  exit;
}

require "function.php";

$id = $_GET["id"];
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id_mhs = $id")[0];

?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Mahasiswa</title>
  <link rel="stylesheet" href="../css/mycss.css">
</head>

<body>

  <div class="container bg-warning">
    <div class="row">
      <div class="col-md-5">
        <img class="p-5" src="../assets/<?= $mahasiswa["foto"]; ?>" alt="" style="max-height:500px">
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-5 keterangan pt-5">
        <p class="arrival text-center">NEW</p>
        <h2><?= $mahasiswa["nama"] ?></h2>
        <p><?= $mahasiswa["nrp"] ?></p>
        <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
        <p><b>Email : </b><?= $mahasiswa["email"] ?></p>
        <p><b>Jurusan</b> : <?= $mahasiswa["jurusan"] ?></p>
        <p><b>deskripsi</b> : </p>
      </div>
    </div>
  </div>

  <button type="button" class="btn btn-primary btn-lg bg-light ml-5 "><a href="admin.php">Kembali</a></button>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>