<?php
    $buku = [[ 
                 "cover"        => "assets/11.jpg",
                 "judul_buku"   => "Sebelas,Sebelas" ,
                 "tahun_terbit" => 2018 ,
                 "pengarang"    => "Fiersa Besari" ,
                 "harga"        => "Rp.100.000" ],
                
                 ["cover"       => "assets/catatanjuang.jpg",
                 "judul_buku"   => "Catatan Juang" ,
                 "tahun_terbit" => 2017 ,
                 "pengarang"    => "Fiersa Besari" ,
                 "harga"        => "Rp.150.000" ],
                
                 ["cover"       => "assets/konspirasialamsemesta.jpg" ,
                 "judul_buku"   => "Konspirasi Alam Semesta" ,
                 "tahun_terbit" => "2017" ,
                 "pengarang"    => "Fiersa Besari" ,
                 "harga"        => "Rp.125.000" ],
                
                 ["cover"       => "assets/gariswaktu.jpg",
                 "judul_buku"   => "Garis Waktu" ,
                 "tahun_terbit" => "2016" ,
                 "pengarang"    => "Fiersa Besari" ,
                 "harga"        => "Rp.130.000" ],
                
                 ["cover"       => "assets/arahlangkah.jpg",
                 "judul_buku"   => "Arah Langkah" ,
                 "tahun_terbit" => "2018" ,
                 "pengarang"    => "Fiersa Besari" ,
                 "harga"        => "Rp.145.000" ],
                
                 ["cover"       => "assets/koboykampus.jpg",
                 "judul_buku"   => "Koboy Kampus" ,
                 "tahun_terbit" => "2019" ,
                 "pengarang"    => "Pidi Baiq" ,
                 "harga"        => "Rp.200.000" ],
                
                 ["cover"       => "assets/dilan.jpg",
                 "judul_buku"   => "Dilan" ,
                 "tahun_terbit" => "2014" ,
                 "pengarang"    => "Pidi Baiq" ,
                 "harga"        => "Rp.90.000" ],

                 ["cover"       => "assets/hilangarah.jpg",
                 "judul_buku"   => "Hilang Arah" ,
                 "tahun_terbit" => "2018" ,
                 "pengarang"    => "Sdavincii" ,
                 "harga"        => "Rp.77.000" ],

                 ["cover"       => "assets/milea.jpg",
                 "judul_buku"   => "Milea : Suara dari Dilan" ,
                 "tahun_terbit" => "2016" ,
                 "pengarang"    => "Pidi Baiq" ,
                 "harga"        => "Rp.95.000" ],

                 ["cover"       => "assets/pisaubatu.jpg",
                 "judul_buku"   => "Hanya Salju dan Pisau Batu" ,
                 "tahun_terbit" => "2010" ,
                 "pengarang"    => "Pidi Baiq" ,
                 "harga"        => "Rp.85.000" ],
            ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Latihan 4d</title>
        
            <style>
                img{
                    width: 200px;
                    }

        </style>
</head>

<body>   
<div class="text">
    <?php
    $no = 1;
    ?>

        <table border="2px" cellpadding="10px" cellspacing="0px">

            <tr>
            <td><h3>No</h3></td>
            <td><h3>Cover</h3></td>
            <td><h3>Judul Buku</h3></td>
            <td><h3>Tahun terbit</h3></td>
            <td><h3>Pengarang</h3></td>
            <td><h3>Harga</h3></td>
            </tr>

                <?php foreach ($buku as $bk) :?>
                    <tr>
                       
                        <td><?php echo $no;?></td>
                        <?php $no++ ?>
                        <td><img src="<?php echo "$bk[cover]" ; ?>"></td>
                        <td><?php echo "$bk[judul_buku]" ; ?></td>
                        <td><?php echo "$bk[tahun_terbit]" ; ?></td>
                        <td><?php echo "$bk[pengarang]" ; ?></td>
                        <td><?php echo "$bk[harga]" ; ?></td>

                    </tr>
                <?php endforeach; ?>


        </table>
    </div>
</body>
</html>