 <?php
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
     <title>Daftar Mahasiswa</title>
 </head>
 <body>
     <?php foreach($mahasiswa as $mhs) : ?> 
        <ul>
            <li>
                <img width="100px" src="img/<?= $mhs["gambar"] ?>"> 
            </li>
            <li>Nama : <?= $mhs["nama"] ?></li>
            <li>NRP : <?= $mhs["npm"] ?></li>
            <li>Jurusan : <?= $mhs["prodi"] ?></li>
            <li>E-mail : <?= $mhs["email"] ?></li>
        </ul>
    <?php endforeach; ?>
 </body>
 </html>