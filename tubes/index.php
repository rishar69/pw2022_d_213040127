<?php 
  session_start();
if(!isset($_SESSION["login"])){
  header("location: login.php");
  exit;
}
require 'function.php';

  

$categorys = [
  ["nama" => "Bubble Gum",
   "gambar" => "bubblegums.png"
],
  ["nama" => "Candy",
   "gambar" => "candys.png"
],
  ["nama" => "Candy Bar",
   "gambar" => "candybars.png"
],
  ["nama" => "Candy Cane",
   "gambar" => "candycanes.png"
],
  ["nama" => "Lolipop",
   "gambar" => "lolipops.png"
],
  ["nama" => "Gummy Bear",
   "gambar" => "gummybears.png"
],
  ["nama" => "Chocolate",
   "gambar" => "chocolates.png"
],
  ["nama" => "Others",
   "gambar" => "others.png"
]
];

$categorycandies = [
  [
    "nama" => "Gummy Bear",
    "gambar" => "gummybear.jpg",
    "deskripsi" => "Justo posuere vivamus amet curabitur proin per tincidunt montes neque. Urna cubilia fringilla hac lacinia mollis nisl. Magnis scelerisque at."
  ],
  [
    "nama" => "Candy",
    "gambar" => "candy.jpg",
    "deskripsi" => "Justo posuere vivamus amet curabitur proin per tincidunt montes neque. Urna cubilia fringilla hac lacinia mollis nisl. Magnis scelerisque at."
  ],
  [
    "nama" => "Bubble Gum",
    "gambar" => "bubblegum.jpg",
    "deskripsi" => "Justo posuere vivamus amet curabitur proin per tincidunt montes neque. Urna cubilia fringilla hac lacinia mollis nisl. Magnis scelerisque at."
  ],
  [
    "nama" => "Candy Bar",
    "gambar" => "candybar.jpg",
    "deskripsi" => "Justo posuere vivamus amet curabitur proin per tincidunt montes neque. Urna cubilia fringilla hac lacinia mollis nisl. Magnis scelerisque at."
  ]
];
$produk = query("SELECT * FROM produk ORDER BY id_barang DESC LIMIT 4");

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
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="stylesheet.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  </head>
  <body style="background-color:floralwhite">
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

      <!-- banner -->
      <div class="container-fluid banner bans">
      
    </div>
      <!-- end of banner -->

    <!-- carousel -->
    <div class="container">
      <div id="carouselExampleSlidesOnly" class="carousel slide carousel-s" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/carousel1.png" class="d-block w-100 h-1 img-carousel" alt="" />
          </div>
          <div class="carousel-item">
            <img src="img/carousel2.png" class="d-block w-100 img-carousel" alt="" />
          </div>
          <div class="carousel-item">
            <img src="img/carousel4.png" class="d-block w-100 img-carousel" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- end of carousel -->
    <!-- Category -->
    <div class="container mt-5 ">
      <div class="pt-2 pb-2 mb-3 "  style="background-color:rgb(240, 173, 181);">
        <h3 class="text-center" style="color:white ;"> Sweets Category</h3>
      </div>
      <div class="row text-center row-container justify-content-start">
        <?php foreach($categorys as $category) : ?>
        <div class=" mt-2 ps-2 pe-2 col-lg-3 col-md-3 col-sm-2 col-6">
          <div class="category-menu">
            <a href=""><img class="img-fluid" src="img/icon/<?=$category["gambar"]; ?>" alt="" class="mt-2" /></a>
            <p><?= $category["nama"]; ?></p>
          </div>          
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <!-- end of category -->
    <!-- preview -->
        <div class="container mt-5">
          <div class="row">
            <?php foreach($produk as $prdk) : ?>
            <div class="col-lg-3 col-md-3 col-sm-4 col-6">
              <a class="nav-link" href="itemPage.php?id=<?= $prdk["id_barang"] ?>">
              <div class="card text-center">
                <img src="img/candy/<?= $prdk["gambar"]; ?>" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title"><?= $prdk["nama"]; ?></h5>
                  <div class="icon">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                  <p class="card-text">Rp.<?= $prdk["harga"]; ?></p>
                  </a>
                    <a href="#" class="btn d-grid " style="background-color:pink; color:black;">Buy Product</a>
                </div>
              </div>
            </div>
            <?php endforeach ; ?> 
          </div>
        </div>
    <!-- end of preview -->
        <!-- about us  -->
      <div class="conteiner mt-5">
        <div class="row">
          <div class="col text-center">
              <h2 id="aboutus">About Us</h2>
              <img style="width: 250px;" src="img/sugar.png" class="img-fluid" alt="">
          </div>
          <div class="row ms-2 mb-5">
            <div class="col-md">
              <h4>Who we are</h4>
              <p>Suspendisse eros ipsum, malesuada non nulla sit amet, pretium malesuada quam. Duis efficitur orci in pellentesque consectetur. Morbi quis mattis ex. Nulla malesuada blandit convallis. Aliquam varius purus venenatis magna scelerisque molestie. Nulla tempor finibus finibus. Integer vel lacinia ipsum. Suspendisse faucibus elit quis gravida porta. Integer et congue dui, at ornare ante. Mauris convallis ante ut finibus elementum.</p>
            </div>
            <div class="col-md">
              <h4>How we made our candy</h4>
              <p>Suspendisse eros ipsum, malesuada non nulla sit amet, pretium malesuada quam. Duis efficitur orci in pellentesque consectetur. Morbi quis mattis ex. Nulla malesuada blandit convallis. Aliquam varius purus venenatis magna scelerisque molestie. Nulla tempor finibus finibus. Integer vel lacinia ipsum. Suspendisse faucibus elit quis gravida porta. Integer et congue dui, at ornare ante. Mauris convallis ante ut finibus elementum.</p>
            </div>
          </div>
        </div>
      </div>
        <!-- end of about us -->
    <!-- recomended section -->
<div class="container mt-5">
  <div class="row" >
    <div class="col">
      <h2>
        Recomended Sweets
      </h2>
    </div>
  </div>
  <div class="row mt-2">
    <?php foreach($categorycandies as $candy) : ?>
    <div class="col-md-3">
     <a class="nav-link" href="">
      <div class="card mt-3 hover-card">
        <img src="img/candy/<?= $candy["gambar"]; ?>" class="card-img-top" alt="">
          <div class="card-body" style="background-color:pink; ">
            <h3 class="card-title"><?= $candy["nama"]; ?></h3>
              <p class="card-text"><?= $candy["deskripsi"];?></p>
                <a href="#" class="btn btn-light mt-2">Shop</a>
          </div>  
      </div>
    </a>
   </div>
    <?php endforeach ?>
  </div>
</div>
    <!-- end of recomended section -->
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
