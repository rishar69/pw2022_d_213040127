<?php
//superglobal
// variabel dari PHP
// merupakan array associative

$mahasiswa = [
    ["nama" => "Harish Arya Revano",
    "npm" => "213040127",
    "email" => "harisharyarevano@gmail.com",
    "prodi" => "Teknik Informatika",
    "gambar" => "shirt6.jfif" ],

    [ "nama" => "Yudha Prasetya",
    "npm" => "213040128",
    "email" => "yudha@gmail.com",
    "prodi" => "Teknik Informatika",
    "gambar" => "shirt7.jfif"
],

  ["nama" =>  "siapaaja",
   "npm" => "213040129",
   "email" => "siapaajah@gmail.com",
   "prodi" => "Teknik Informatika",
   "gambar" => "shirt8.jpg"
],

  ["nama" =>  "siapaaja",
   "npm" => "213040129", 
   "email" => "siapaajah@gmail.com", 
   "prodi" => "Teknik Informatika", 
   "gambar" => "shirt9.jfif"
   ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data mahasiswa</h1>
    <ul>
    <?php 
    foreach($mahasiswa as $mhs): ?>
    <li><a href="latihan2.php?nama=<?=$mhs["nama"]?>&nrp=<?=$mhs["nrp"]?>&email=<?= $mhs["email"]?>"><?=$mhs["nama"];?></a></li>
   <?php endforeach; ?>
   </ul>
</body>
</html>