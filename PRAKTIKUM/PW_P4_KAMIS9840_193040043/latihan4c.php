<?php
    $pemain = [[ "nama" => "Cristiano Ronaldo" ,
                "klub" => "Juventus" ],
               
                ["nama" => "Lionel Messi" ,
                "klub"=> "Barcelonan" ],
                
                ["nama" => "Luca Modric"  ,
                "klub" => "Real Madrid" ],
                
                ["nama" => "Mohammad Salah", 
                "klub" => "Liverpool" ], 
                
                ["nama" =>"Neymar Jr" ,
                "klub" => "Paris Saint Germain "], 
                
                ["nama" => "Sadio Mane", 
                "klub" => "Liverpool"], 
                
                ["nama" => "Zlatan Ibrahimovic", 
                "klub" => "Ac Milan"],
                ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan 4c</title>
</head>

<body>

<tr><h3>Daftar Pemain Bola Terkenal Beserta Klubnya</h3></tr>   
    
    <table cellpadding="5" cellspacing="0" border="0">
    
    <?php foreach ($pemain as $p) { ?>
     <tr>
        
        <td><?= $p ["nama"] ?></td>
        <td>:</td>
        <td><?= $p ["klub"] ?></td>
        
        </tr>
            <?php }  ?>
    </table>
    
</body>
</html>