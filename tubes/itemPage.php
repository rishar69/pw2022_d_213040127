<?php 
require 'function.php';

$id = $_GET["id"];
$produk = query("SELECT * FROM produk WHERE id_barang =$id");


if( isset($_POST["search"])){
      echo "<script>       
              document.location.href = 'shop.php';
          </script>";
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
    <!-- end of navbar -->
    <div class="container gap"></div>
   
    <!-- item -->

      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-6 col-sm-6">
            <img class="m img-fluid" src="img/candy/<?=$produk[0]["gambar"];?>" alt="">
          </div>
          <div class="col-lg-5 col-md-6 col-sm-1">
              <h1 class="text-center mt-5 "><?=$produk[0]["nama"];?></h1>
                <p class="mt-5 text-md-start"><?=$produk[0]["dekripsi"];?></p>
                <h3 style="color: green ;">Rp.<?=$produk[0]["harga"];?></h3>
                <input class=" mb-1 mt-5 form-control" id="32" placeholder="Qty" type="number" style="width:70px ;">
                <button class="btn  btn-outline-dark">
                      Buy Now
                  </button>
                  <button class="btn  btn-outline-dark">
                      Add To Cart
                  </button>
              </div>
              <div class="row">
                <div class="col">
                <div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle mt-5" data-bs-toggle="dropdown" aria-expanded="false">
    Menu
  </button>
  <ul class="dropdown-menu">
  <li><a class="dropdown-item" href="hapus.php?id=<?= $id ?> " onclick="return confirm('Are You Sure?');">Delete Product</a></li>
  <li><a class="dropdown-item" href="ubah.php?id=<?= $id ?>">Edit</a></li>
  </ul>
</div>
                </div>
              </div>
        </div>
      </div>

    <!-- end of item -->

    <!-- footer -->
    <footer style="background-color:pink ; height: 100px ;">
      <div  class="container p-5 mt-5">
        <div class="row ">
          <div class="col-md-6">
            <img class="img-fluid" style="width:150px ;" src="img/sugar.png" alt="">
          </div>
        </div>
      </div>
    </footer>
    <!-- end of footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
