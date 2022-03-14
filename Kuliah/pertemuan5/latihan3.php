<?php

//  representasi data mahasiswa

$mahasiswa = [
   ["Harish Arya Revano", "213040127", "harisharyarevano@gmail.com", "Teknik Informatika"],
     ["Yudha Prasetya", "213040128", "yudha@gmail.com", "Teknik Informatika" ],
    ["siapaaja", "213040129", "siapaajah@gmail.com", "Teknik Informatika" ]
 ];


 ?>
 <?php foreach($mahasiswa as $mhs){ ?>

 <ul>
    <li>Nama: <?php echo $mhs[0]?></li>
   <li>NPM: <?php echo $mhs[1]?> </li>
  <li>E-mail: <?php echo $mhs[2]?></li>
   <li>Jurusan:<?php echo $mhs[3]?></li>
</ul>
<?php } ?> 