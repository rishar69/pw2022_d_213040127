<?php
// koneksi ke dbms
function koneksi(){
    $db = mysqli_connect('localhost','root','','tubes') or die('Koneksi ke DB GAGAL!');
    return $db;
}
function query($query){ 
    $db = koneksi();
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }    
    return $rows;
    }
function tambah($tambah){
  $db = koneksi();
    $nama = htmlspecialchars($tambah["nama"]);
    $dekripsi = htmlspecialchars($tambah["dekripsi"]);
    $harga = htmlspecialchars($tambah["harga"]);
    $id_kategori = htmlspecialchars($tambah["id_kategori"]);
    
    if($_FILES["gambar"]["error"] === 4 ){
      $gambar = 'default.png';
  } else {
      $gambar = upload();
  }
  if(!$gambar){
    return false;
  }
  


    $query =  "INSERT INTO produk VALUES ('','$nama','$dekripsi', '$harga', '$gambar', '$id_kategori')";
    mysqli_query($db, $query) or die(mysqli_error($db));

  return mysqli_affected_rows($db);

}

  function upload(){
    $filename = $_FILES['gambar']['name'];
    $filesize = $_FILES['gambar']['size'];
    $filetmpname = $_FILES['gambar']['tmp_name'];
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    $allowedtype = ['jpg', 'jpeg', 'png','jfif'];

    // cek apakah file bukan gambar
    if(!in_array($filetype, $allowedtype)){
        echo"<script>
            alert('File Extension not supported!')
        </script>";
        return false;
    }
    
    if($filesize > 1000000){
        echo"<script>
        alert('File Size's too big')
    </script>";
    return false;
    }
   
$newfilename = uniqid().$filename;

move_uploaded_file($filetmpname, 'img/candy/'.$newfilename) ;

return $newfilename;
    }

function hapus($id){
  $db = koneksi();
  mysqli_query($db, "DELETE FROM produk WHERE id_barang = $id");

  return mysqli_affected_rows($db);
}

function ubah($data){
  $db = koneksi();
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $dekripsi = htmlspecialchars($data["dekripsi"]);
    $harga = htmlspecialchars($data["harga"]);
    $id_kategori = htmlspecialchars($data["id_kategori"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    if($_FILES['gambar']['error'] === 4){
      $gambar = $gambarLama;
    }else{
       $gambar = upload();
    }
    if(!$gambar){
      return false;
    }

    $query = "UPDATE produk SET nama ='$nama',
                                dekripsi = '$dekripsi',
                                harga = '$harga',
                                gambar = '$gambar'
                                WHERE id_barang = $id " ;

    mysqli_query($db, $query) or die(mysqli_error($db));

  return mysqli_affected_rows($db);

}
function cari($keyword){
    $query = "SELECT * FROM produk WHERE
                            nama LIKE '%$keyword%'";
      return query($query); 
}

function register($data){
  $db = koneksi();

  $username = strtolower(stripslashes($data['username']));
  $password = mysqli_real_escape_string($db,$data['password']);
  $email = $data['email'];
  $alamat = $data['alamat'];
  $kota = $data['kota'];
  $provinsi = $data['provinsi'];
  $zip = $data['zip'];


  $result = mysqli_query($db, "SELECT username FROM user WHERE username = '$username'");
  if(mysqli_fetch_assoc($result)){
    echo"<script>
            alert('Username already taken!')
        </script>";

        return false;
  }
  $password = password_hash($password,PASSWORD_DEFAULT);

  $query = "INSERT INTO user VALUES(
        '', '$username', '$password', '$email', '$alamat','$kota','$provinsi','$zip')";
  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
} 