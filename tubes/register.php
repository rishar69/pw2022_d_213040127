<?php 
require 'function.php';


if( isset($_POST["register"])){
     if(register($_POST) > 0){
        echo "<script>     
            alert('Registration Complete');
        document.location.href = 'login.php';
    </script>";
     }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="stylesheet.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <title>Register | Sugar Candy</title>
</head>
<body style="background-image: url(img/banners.jpg) ; background-size:cover;">

        <div class="container shadow mt-5 rounded pt-5" style="background-color:white ;">
<h1 class="text-center rounded pb-2" style="color: white ; background-color: pink ;"> Register </h1>
        <form method="post" action="" class="row g-3 mt-5 ms-5 ps-3 pe-5" >
  <div class="col-md-6">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" name="username" id="username" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="inputPassword" required>
  </div>
  <div class="col-12">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="email@example.com" required>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" name="alamat" id="inputAddress" placeholder="Apartment, studio, or home address">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" name="kota" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputprovince" class="form-label">province</label>
    <input type="text" id="inputprovince" name="provinsi" class="form-control">    

  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" name="zip" id="inputZip">
  </div>
  <div class="col-12">
    
  <div class="col-12">
    <button type="submit" name="register" class=" btn-lg btn mb-5" style="background-color: pink ; color: white;">Sign in</button>
  </div>
</form>
        </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>