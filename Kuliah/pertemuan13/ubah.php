<?php 
require 'functions.php';

// query data mahasiswa berdasarkan id
$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa where id = $id")[0];

// cek ketika tombol tambah sudah di klik
if(isset($_POST['ubah'])){
    // ubah data di tabel mahasiswa
   if( ubah($_POST) > 0){
       echo "<script>
                alert('data berhasil diubah!')       
                document.location.href = 'index.php';
            </script>";
   }
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

    <title>Ubah Data </title>
  </head>
  <body>
    
    <div class="container">
      <h1>Ubah Data </h1>
        <a class="btn btn-primary" href="index.php" >Kembali Ke data mahasiswa</a>

        <div class="row mt-3">
            <div class="col-8">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $mhs['id'] ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required value="<?= $mhs['nama']?>">
                </div>
            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="text" class="form-control" id="npm" name="npm" maxlength="9" style="width:120px" required value="<?= $mhs['npm']?>" readonly>
         
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $mhs['email']?>">
            </div>         
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $mhs['jurusan']?>">
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Gambar</label>
                <img src="" id="img-preview" class="img-thumbnail" style="width:120px; display:none ; ">
                <input type="file" class="form-control" id="gambar" name="gambar" onchange="previewImage()">
                <p style="color:red ;">*Max file size 1M</p>
            </div>
            <button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
        </form>
            </div>
        </div>
        
     
    </div>
    <script src="script.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>