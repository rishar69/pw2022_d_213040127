<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna{
            background-color: red;
        } 
    </style>
</head>
<body>

    <table border="1" cellpadding="10" cellspacing="0"> 
         <?php
            // for ($i = 1; $i <= 3; $i++){
            // echo "<tr>";
            // for($j = 1; $j <= 5; $j++)
            //     echo "<td> $i,$j </td>";
            // echo "</tr>";
            // }
            ?>    
        <?php for($i = 1; $i <= 5; $i++):  ?>
        <?php if ($i % 2 == 1) : ?>
            <tr class="warna">
        <?php else : ?>
            <tr>
        <?php endif; ?> 
            
                <?php for ( $j = 1; $j <= 5 ; $j++ ) :  ?>
                    <td> <?= "$i, $j"  ?> </td>
                    <?php endfor; ?>
        </tr>
            <?php endfor; ?>
    </table>



</body>
</html>

<?php 
// Pengulangan
// for
// while 
// do..while
// foreach : Pengulangan khusus array 

// for ( $i = 0; $i < 5; $i++){
//     echo "hello world!"."<br>";
// }


// $i = 0;
// while($i < 5 ){
//     echo "hello world!" . "<br>";
//     $i++;
// }

// $i=0;
// do{
//     echo "hello world!" . "<br>";
//     $i++;
// }while($i < 5  ); 

?>
    