<?php

$conn = mysqli_connect("localhost" , "root" , "");
mysqli_select_db($conn , "tubes_193040043");
$result = mysqli_query($conn , "SELECT * FROM buku");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Latihan 5a</title>

    <link rel="stylesheet" href="css/mycss.css">
</head>

<body>
    <div class="container">
        <table cellpadding = "10" cellspacing = "0" border = "2">
            <tr>
                <th>No.</th>
                <th>Cover</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Harga</th>
            </tr>

            <?php $i = 1 ?>
            <?php while ($buku = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                    <td> <?= $i ?> </td>
                    <td><img src=assets/<?=$buku["cover"]?> <?= $buku["cover"] ?>></td>
                    <td> <?= $buku["judul_buku"] ?></td>
                    <td> <?= $buku["pengarang"] ?></td>
                    <td> <?= $buku["tahun_terbit"] ?></td>
                    <td> <?= $buku["harga"] ?></td>
                    </tr>
                    <?php $i++ ?>
            <?php endwhile; ?>
        
        </table>
    </div>
</body>
</html>