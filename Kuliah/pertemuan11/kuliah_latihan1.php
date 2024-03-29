<?php 
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>
    
    <div class="container">
      <h1>Daftar Mahasiswa</h1>
        <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama</th>
            <th scope="col">NPM</th>
            <th scope="col">Email</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; foreach($mahasiswa as $mhs) : ?>
          <tr>
            <th scope="row" class="align-middle"><?= $i++; ?></th>
            <td class="align-middle">
              <img src="img/<?= $mhs["gambar"]; ?>" height="50" class="rounded-circle">
            </td>
            <td class="align-middle"><?= $mhs["nama"]; ?></td>
            <td class="align-middle"><?= $mhs["npm"]; ?></td>
            <td class="align-middle"><?= $mhs["email"]; ?></td>
            <td class="align-middle"><?= $mhs["jurusan"]; ?></td>
            <td class="align-middle">
              <a href="" class="btn badge bg-warning">edit</a>
              <a href="hapus.php?id=<?= $mhs["id"]; ?>" class="btn badge bg-danger" onclick=" return confirm('yakin?')";> delete</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>