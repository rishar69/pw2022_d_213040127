<?php

// // array multi dimensi
// // array dalam array

// $array = [10, "harish", true, [1,2,3,4]];
// // mencetak array di dalam array
// echo $array[3][1]."<hr>";

// // matriks

// $matriks = [[1,2,3],[4,5,6],[7,8,9]];

// foreach ($matriks as $baris){
//     foreach($baris as $kolom){
//         echo $kolom;
//     }
//     echo"<br>";
// }
?>

<?php
// pengulangan pada array
// for / foreach

$angka = [1,2,3,5,6,7,8,9];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align :center;
            line-height: 50px;
            margin: 3px;
            float: left;

        }
        .clear{clear:both}
    </style>
</head>
<body>
    <?php for ( $i = 0; $i < count($angka); $i++){  ?>
    <div class="kotak"><?php echo $angka [$i]; ?></div>
    <?php } ?>
    <div class="clear">

     
    </div>
    <?php foreach($angka as $number ) { ?> 
            <div class="kotak"><?php echo $number ?></div>
            <?php } ?> 

        <div class="clear"></div>

        <?php  foreach($angka as $number) : ?>
            <div class="kotak"><?= $number ?></div>
        <?php endforeach ; ?>
        
</body>
</html>