<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--  -->
    <?php 
    
    if( !isset($_GET["nama"]) || 
        !isset($_GET["nrp"]) || 
        !isset($_GET["email"])||
        !isset($_GET["prodi"])   ){
        header("location: latihan1.php");
        exit;
    } //redirect?>
    
    <ul><?= $_GET["nama"];?></ul>

    <ul><?= $_GET["nrp"];?></ul>

    <ul><?= $_GET["email"];?></ul>

    <ul><?= $_GET["prodi"];?></ul>

    <a href="latihan1.php">kembali</a>
</body>
</html>