<?php 
session_start();
if(!isset($_SESSION["login"])){
  header("location: login.php");
  exit;
}
require 'function.php';

$kategori = query("SELECT * FROM kategori");


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
      <div class=" container-fluid warna-font-navbar">
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
              <a class="nav-link" href="logout.php">Logout</a>
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
   
      <div class="container bubblegum">
        <div class="row" >
        </div>
      </div>

      <!--carousel -->
        <div class="container">
            <div class="row">
              <div class="col">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <?php foreach($kategori as $ktgr) : ?>
    <div class="carousel-item active">
      <img class="img-fluid" src="img/bgkate/<?= $ktgr['gambar']; ?>" class="d-block w-100" alt="">
    </div>
    <?php endforeach; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>
  <div class="row">
  <div class="container mt-5 ">
      <div class="pt-2 pb-2 mb-3 "  style="background-color:rgb(240, 173, 181);">
        <h3 class="text-center" style="color:white ;"> Sweets Category</h3>
      </div>
      <div class="row text-center row-container justify-content-start">
        <?php foreach($kategori as $category) : ?>
        <div class=" mt-2 ps-2 pe-2 col-lg-3 col-md-3 col-sm-2 col-6">
          <div class="category-menu">
            <a href=""><img class="img-fluid" src="img/icon/<?=$category["icon"]; ?>" alt="" class="mt-2" /></a>
            <p><?= $category["nama_kategori"]; ?></p>
          </div>          
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
        </div>
      <!-- end of carousel -->

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
