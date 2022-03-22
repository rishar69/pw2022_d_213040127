<?php

//  representasi data mahasiswa

$mahasiswa = [
      ["nama" => "Harish Arya Revano",
      "npm" => "213040127",
      "email" => "harisharyarevano@gmail.com",
      "prodi" => "Teknik Informatika"],

      [ "nama" => "Yudha Prasetya",
      "npm" => "213040128",
      "email" => "yudha@gmail.com",
      "prodi" => "Teknik Informatika" ],

    ["nama" =>  "siapaaja",
     "npm" => "213040129",
     "email" => "siapaajah@gmail.com",
     "prodi" => "Teknik Informatika" ],

    ["nama" =>  "siapaaja",
     "npm" => "213040129", 
     "email" => "siapaajah@gmail.com", 
     "prodi" => "Teknik Informatika" ]
 ];

// var_dump($mahasiswa);
 ?>
 <?php foreach($mahasiswa as $mhs){ ?>

 <ul>
    <li>Nama: <?php echo $mhs["nama"]?></li>
    <li>NPM: <?php echo $mhs["npm"]?> </li>
    <li>E-mail: <?php echo $mhs["email"]?></li>
   <li>Jurusan:<?php echo $mhs["prodi"]?></li>
</ul>
<?php } ?> 