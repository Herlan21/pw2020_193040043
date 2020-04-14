<?php 
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require "function.php";

$id = $_GET["id"];
$buku = query("SELECT * FROM buku WHERE id = $id")[0];

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Latihan 5c</title>
    <link rel="stylesheet" href="../css/mycss.css">
  </head>
  
  <body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="../assets<?= $buku["cover"]; ?>" alt="">
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 keterangan">
                <p class="arrival text-center">NEW</p>
                <h2><?= $buku["judul_buku"] ?></h2>
                <p><?= $buku["pengarang"] ?></p>
                <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                <p><b>Tahun Terbit : </b><?= $buku["tahun_terbit"] ?></p>
                <p><b>Penerbit</b> : <?= $buku["harga"] ?></p>
                <p><b>deskripsi</b> : </p>
            </div>
        </div>
    </div>

<button class="tombol-kembali"><a href="../index.php">Kembali</a></button>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>