<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if( isset($_POST["nama"]) ) :?>
    <h1>Selamat Datang <?= $_POST["username"];?></h1>
    <?php endif; ?>
        
<form action="" method="post">
    <label for="username" >Username : </label>
    <input type="text" name="username" id="username">
    <button type="submit">Kirim</button>

    </form>
</body>
</html>