 <?php
    $pemain = [[ "nama"   => "Cristiano Ronaldo" ,
                 "klub"   => "Juventus" ,
                 "Main"   => "100" ,
                 "Gol"    => "76" ,
                 "Assist" => "30"   ],
                
                 ["nama"   => "Lionel Messi" ,
                  "klub"   => "Barcelona" ,
                  "Main"   => "120" ,
                  "Gol"    => "80" ,
                  "Assist" => "12"  ],

                ["nama"   => "Luca Modric" ,
                 "klub"   => "Real Madrid" ,
                 "Main"   => "87" ,
                 "Gol"    => "12" ,
                 "Assist" => "48"  ],

                ["nama"  => "Mohammad Salah" ,
                "klub"   => "Liverpool" ,
                "Main"   => "90" ,
                "Gol"    => "103" ,
                "Assist" => "8"  ],

                ["nama"  => "Neymar Jr" ,
                "klub"   => "Paris Saint Germain" ,
                "Main"   => "109" ,
                "Gol"    => 56 ,
                "Assist" => "15"  ],

                ["nama"  => "Sadio Mane" ,
                "klub"   => "Liverpool" ,
                "Main"   => "63" ,
                "Gol"    => "30" ,
                "Assist" => "70"  ],

                ["nama"  => "Zlatan Ibrahimovic" ,
                "klub"   => "Ac Milan" ,
                "Main"   => "100" ,
                "Gol"    => "10" ,
                "Assist" => "12"  ],
            ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan 4d</title>
</head>

<body>   
<div class="text">
    <?php
    $no = 1; $assist = 0;

    $goal = 0; $maen = 0;
    ?>

        <table border="2px" cellpadding="8px" cellspacing="0px">

            <tr>
            <td><h3>No</h3></td>
            <td><h3>Nama</h3></td>
            <td><h3>Klub</h3></td>
            <td><h3>Main</h3></td>
            <td><h3>Gol</h3></td>
            <td><h3>Assist</h3></td>
            </tr>

                <?php foreach ($pemain as $p) :?>
                    <tr>
                       
                        <td><?php echo $no;?></td>
                        <?php $no++ ?>
                        <td><?php echo "$p[nama]" ; ?></td>
                        <td><?php echo "$p[klub]" ; ?></td>
                        <td><?php echo "$p[Main]" ; ?></td>
                        <td><?php echo "$p[Gol]" ; ?></td>
                        <td><?php echo "$p[Assist]" ; ?></td>

                        <?php $maen+="$p[Main]"?>
                        <?php $goal+="$p[Gol]"?>
                        <?php $assist+="$p[Assist]"?>
                    </tr>
                <?php endforeach; ?>

                <tr>
                <td>#</td>
                <td colspan="2" style="text-align=center">Jumlah</td>
                <td><?php echo $maen;?></td>
                <td><?php echo $goal;?></td>
                <td><?php echo $assist;?></td>
                </tr>
        </table>
    </div>
</body>
</html>