<?php 

// array associative 
// array yang yang key nya berpasangan dengan sebuah string


$mahasiswa = [
    ["nama" => "Harish Arya Revano",
    "npm" => "213040127",
    "email" => "harisharyarevano@gmail.com",
    "prodi" => "Teknik Informatika",
    "gambar" => "shirt6.jfif"
],

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
   $num = 1;
    


  ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
      <h1>Daftar Mahasiswa</h1>
      <table class="table">
  <thead>                       
    <tr>
      <th scope="col">No</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Prodi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($mahasiswa as $mhs) : ?>  
  <tr >
      <th class="align-middle"  scope="row"><?= $num; $num++; ?></th>
      <td><img src="img/<?php echo $mhs["gambar"] ?>" height="80px" class="rounded-circle"></td>
      <td class="align-middle"><?= $mhs["nama"]; ?></td>
      <td class="align-middle"><?= $mhs["email"]; ?></td>
      <td class="align-middle"><?= $mhs["prodi"]; ?></td>
      <td class="align-middle">
          <a href="" class="btn badge bg-secondary">Edit</a>
          <a href="" class="btn badge bg-dark">Delete</a>
        </td>
    </tr>
        <?php endforeach ?>
  </tbody>
</table>
  </div>


    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>