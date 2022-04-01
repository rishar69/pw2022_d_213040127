<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <title>login admin</title>
</head>
<body>
    <?php 
    // cek apakah tombol submit sudah di tekan atau belum
        if(isset($_POST["username"])){
    // cek username &password
            if($_POST["username"] == "admin" && $_POST["password"] == "123"){
           header("location: admin.php");
           exit;
    // jika salah tampilkan pesan kesalahan
    } else{    $error=true;
    }
}
    

    ?> 

<?php if( isset($error) ) : ?>
<p style="color: red; font-style:italic; ">Password atau username salah</p>
<?php endif ;?>
    <ul>
    <form action="admin.php" method="post">
        <li><label for="username"> username :</label> 
            <input type="text" name="username" id="username">    
        </li>
        <li>
            <label for="password" >Password : </label>
            <input type="password" name="password" id="password">
        </li>
        <li>
        <button type="submit"> 
            submit
        </button>
        </li>
    </form>
    </ul>
</body>
</html>