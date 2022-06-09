<?php 
require 'function.php';


if( isset($_POST["login"])){
  $db = koneksi();
  $username = $_POST['username'];
  $password = $_POST['password'];

  $result = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);

       if( password_verify($password, $row['password'])){
           header("location: index.php");
           exit;
       }
    }

    $error = true;
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
    <title>Login | Sugar Candy</title>
</head>
<body style="background-image: url(img/banners.jpg) ; background-size:cover;">

        <div class="container shadow mt-5 rounded pt-5" style="background-color:white ; width:1000px;">
            <div class="row mt-0">
                <div class="col">
                    <img class="img-fluid rounded" src="img/lgn.jpg" width="400px" alt="">
                </div>
                <div class="col">
                    <h1 class="display-4 text-center mb-5">Login</h1>
                    <form class="pe-5" action="" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your data with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <?php if(isset($error) ) :?>
                            <div class="form-text text-danger fst-italic">Wrong Password or username</div>
                        <?php endif; ?>
                        <button type="submit" style="background-color: pink ;" name="login" class="btn">Login</button>
                        </form>
                </div>
            </div>
        </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>