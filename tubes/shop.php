<?php 
require 'function.php';

$produk = query("SELECT * FROM produk ");

if(isset($_POST["search"])){
  $produk = cari($_POST["keyword"]);
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sugar Candy</title>
    <link rel="stylesheet" href="stylesheet.css" />
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  </head>
  <body">
    <!-- Navbar -->
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
              <a class="nav-link" href="index.php#aboutus">About</a>
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
    <!-- end of navbar -->
    <div class="conrainer" style="height:100px ;"></div>
  <!-- button -->
  <div class="container">
    <div class="row">
        <div class="col">
  <a href="tambah.php" type="button" class="btn btn-outline-dark mt-5 ">Add Product</a>
  <a href="tambah.php" type="button" class="btn btn-outline-dark mt-5 ">+</a>
  </div>
 
  <!-- end of button -->
  <!-- togle category -->
  <!-- end of togle category -->
  <!-- item -->
  <div class="container ">
         <div class="row">
           <?php foreach( $produk as $prdk ):  ?> 
            <div class="col-lg-3 col-md-3 col-sm-4 col-6">
             <div class="card text-center mt-5">
              <a class="nav-link" href="itemPage.php?id=<?= $prdk["id_barang"] ?>">
              <img src="img/candy/<?= $prdk["gambar"] ?> ?>" class="card-img-top" alt="">
               <div class="card-body">
                <h5 class="card-title"><?= $prdk["nama"] ?></h5>
                <div class="icon">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <p class="card-text">Rp.<?= $prdk["harga"] ?></p>
                 </a>
                 <div data-bs-display="static" class="btn-group mt-2" style="background-color:pink; color:black;">
                 <a type="button" href="itemPage.php?id=<?= $prdk["id_barang"] ?>"  class="btn ps-5 pe-5 ">Buy Product</a>
                  <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">                  </button>
                  <ul class="dropdown-menu ">
                    <li><a class="dropdown-item" href="hapus.php?id=<?= $prdk["id_barang"] ?> " onclick="return confirm('Are You Sure?');">Delete Product</a></li>
                    <li><a class="dropdown-item" href="ubah.php?id=<?= $prdk["id_barang"] ?>">Edit</a></li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
           <?php endforeach ; ?>
      </div>
    </div> 
  <!-- end of item -->
       
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
