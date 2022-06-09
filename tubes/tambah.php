<?php 
require "function.php";

if( isset($_POST["submit"])){
    if (tambah($_POST) > 0 ){
        echo "<script>
                alert('Data Added Succsessfuly!')       
                document.location.href = 'shop.php';
            </script>";
    }else{
      echo "<script>
                alert('Data failed to be added!')       
                document.location.href = 'tambah.php';
            </script>";
    }
}
  
$kategori = query("SELECT * FROM kategori");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
</head>
<body>
<nav class="navbar navbar-expand-lg warna-navbar fixed-top">
      <div class="container-fluid warna-font-navbar">
        <a class="navbar-brand" href="index.php">
          <img src="img/sugar.png" alt="" width="100"  />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutus">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Shop </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="shop.php">Shop</a></li>
                <li><a class="dropdown-item" href="category.php">Category</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="shop.php">Exclusive Candy</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=""><button class="btn btn-outline-light button-s" type="submit">Cart</button></a>
            </li>
          </ul>
          <form class="d-flex" role="search" method="POST" action="shop.php" >
            <input class="form-control me-2" name="keyword" type="search" placeholder="Search For Sweeets" aria-label="Search" />
            <button name="search" class="btn btn-outline-light" type="submit" >Search</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="container" style="height:150px ;"> </div>

    <div class="container">
      <h1>Add Product</h1>
        <div class="row mt-3" style="background-color: #f7e4f0 ;">
            <div class="col-8">
            <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama" class="form-label">Name</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
            <div class="mb-3">
                <label for="dekripsi" class="form-label">Description</label>
                <textarea type="text" class="form-control" id="dekripsi" name="dekripsi"  style="height:120px"> </textarea>
         
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Price</label>
                <input type="number" class="form-control" id="harga" name="harga">
            </div>         
            <div class="mb-3">
            <label for="gambar" class="form-label">Image</label>
                <img src="" id="img-preview" class="img-thumbnail" style="width:120px; display:none ; ">
                <input type="file" class="form-control" id="gambar" name="gambar" onchange="previewImage()">
                <p style="color:red ;">*Max file size 3M</p>
            </div>
            <div class="mb-3">
                <label for="id_kategori" class="form-label">Category</label>
                <select name="id_kategori" class="form-control" id="id_kategori">
                  <?php foreach($kategori as $ktgr) :?>
                    <option value="<?=$ktgr['id_kategori'];?>"><?=$ktgr['nama_kategori'];?></option>
                  <?php  endforeach; ?>
                </select>
            </div>
            <button style="background-color: pink ;" type="submit" name="submit" class="btn ">Add Product</button>
        </form>
            </div>
        </div>
        
     
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>