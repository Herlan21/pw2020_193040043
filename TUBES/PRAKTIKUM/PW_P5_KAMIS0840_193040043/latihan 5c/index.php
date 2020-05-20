<?php

require "php/function.php";
$buku = query("SELECT * FROM buku");

?>

<!doctype html>
<html lang="en">

<head>
  <title>Zebag Books</title>
  <link rel="stylesheet" type="text/css" href="css/mycss.css">


  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-3">Bags Books</h1>
      <p class="lead">Tempatnya belanja novel original dan bersahabat</p>
    </div>
  </div>


  <div class="container">
    <?php foreach ($buku as $bk) : ?>
      <p class="nama">
        <a href="php/detail.php?id=<?= $bk["id_buku"] ?>" class="list-group-item list-group-item-action list-group-item-primary">

          <?= $bk["judul_buku"] ?>

        </a>
      </p>
    <?php endforeach; ?>
  </div>
  </div>








  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>