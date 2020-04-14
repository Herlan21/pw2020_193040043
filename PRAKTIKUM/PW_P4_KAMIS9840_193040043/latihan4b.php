<?php
    $pemain = ["Mohammad Salah" , "Cristiano Ronaldo" , "Lionel Messi" , "Zlatan Ibrahimovic" , "Neymar Jr"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan 4b</title>
</head>

<body>

<h3>Daftar pemain bola terkenal</h3>
<ol>        
    <?php
            foreach($pemain as $p){
            echo "<li>$p</li>";
        }
    ?>
</ol>

        <?php
            $pemain[] = "Luca Modric";
            $pemain[] = "Sadio Mane";
            sort($pemain);
        ?>

                <h3>Daftar pemain bola terkenal baru</h3>
                <ol>        
                    <?php
                    foreach($pemain as $p){
                    echo "<li>$p</li>";
                    }
                ?>
</ol>
</body>
</html>