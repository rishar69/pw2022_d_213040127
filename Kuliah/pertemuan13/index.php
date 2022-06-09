<?php 
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

// query sesuai keyword pencarian
if(isset($_GET["cari"])){
  $keyword = $_GET['keyword'];
  $query = "SELECT * FROM mahasiswa
              WHERE nama like '%$keyword%' OR npm LIKE 'keyword' OR npm LIK E '%keyword%'";
  $mahasiswa = query($query);
} 

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

            <form action="" method="get" class="mt-4">
              <div class="input-group mb-3 mt-3">
                  <input type="text" class="form-control" name="keyword" placeholder="Masukan Keyword...." autocomplete="off">
                  <button class="btn btn-primary" type="submit" name="cari" > 
                    cari
                  </button>
              </div>
            </form>

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
              <a href="ubah.php?id=<?= $mhs["id"]; ?>" class="btn badge bg-primary">Ubah</a>
              <a href="hapus.php?id=<?= $mhs["id"]; ?>" class="btn badge bg-danger" onclick=" return confirm('yakin?')";> Hapus</a>
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