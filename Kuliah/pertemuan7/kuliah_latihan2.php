<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba GET</title>
</head>
<body>
    <!-- mengirimkan data menggunakan $_GET -->
    <a href="kuliah_latihan3.php?nama=asshole">Kirim Data nama</a>

<hr>
<h3>login</h3>
    <!-- mengirimakan data menggunakan form -->
    <form action="kuliah_latihan3.php" method="post">
    <label for="username" >Username : </label>
    <input type="text" name="username" id="username">
    <br>
    <form action="kuliah_latihan3.php" method="post">
    <label for="password" >Password :  </label>
    <input type="password" name="password" id="password">
    <br>
    <button type="submit">Kirim</button>

    </form>
    <br>
</body>
</html>