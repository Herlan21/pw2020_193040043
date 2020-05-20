<?php
require '../php/function.php';
$buku = cari($_GET['keyword']);
?>

<div class="album py-5 bg-light">
  <div class="container">

    <div class="row pt-5 pl-5 ">

      <?php if (empty($buku)) : ?>

        <h1 align="center">Data Tidak Ditemukan</h1>

      <?php else : ?>
        <?php foreach ($buku as $bk) : ?>


          <div class="col-md-6 pb-3">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0"><?= $bk["judul_buku"] ?></h3>
                <h5 class="mb-0"><?= $bk["pengarang"] ?></h5>
                <div class="mb-1 text-muted"><?= $bk["tahun_terbit"] ?></div>
                <p class="card-text mb-auto"><?= $bk["deskripsi"] ?></p>
                <a href="review.php?id=<?= $bk['id_buku']; ?>"><button type="button" class="btn btn-success mt-0 " style="width: 100px;">lebih lanjut</button></a>
              </div>

              <div class="col-auto d-none d-lg-block  ">
                <img src="../assets/<?= $bk["cover"] ?>" class="rounded mx-auto " style="width: 173px;" alt="Responsive image">

                </svg>
              </div>
            </div>
          </div>

        <?php endforeach; ?>
      <?php endif; ?>


    </div>
  </div>












  <!-- 
<div class="container">
  <section class="buku">

    <div class="row pt-5">

      <?php if (empty($buku)) : ?>

        <h1 align="center">Data Tidak Ditemukan</h1>

      <?php else : ?>
        <?php foreach ($buku as $bk) : ?>

          <figure class="snip1253"><a href="php/review.php?id=<?= $bk['id_buku']; ?>"></a>
            <div class="image-fluid mb-5"><img src="assets/<?= $bk["cover"] ?>" alt="Responsive image" /></div>
            <figcaption>
              <div class="date"><span class="day">28</span><span class="month">Oct</span></div>
              <h3><?= $bk["judul_buku"] ?></h3>
              <p>
                I don't need to compromise my principles, they don't have the slightest bearing on what happens to me anyway.
              </p>
            </figcaption>
          </figure>

        <?php endforeach; ?>
      <?php endif; ?>

    </div>

  </section>
</div> -->