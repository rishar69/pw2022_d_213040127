<?php
function koneksi(){
    $conn = mysqli_connect('localhost','root','','pw2022_d_213040127') or die('Koneksi ke DB GAGAL!');
    return $conn;
}

function query($query){ 
$conn = koneksi();
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

$rows = [];
while($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}    
return $rows;
}
function tambah($data){
    $conn = koneksi();
    // cek upload gambar
    if($_FILES["gambar"]["error"] === 4 ){
        $gambar = 'shirt8.jpg';
    } else {
        $gambar = upload();
        // cek apakah upload berahasil
    }
    if(!$gambar){
        return false;
    }

    $nama = htmlspecialchars($data["nama"]);
    $npm = htmlspecialchars($data["npm"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars( $data["jurusan"]);
    
    $query = "INSERT INTO mahasiswa VALUES('null','$nama','$npm','$email','$jurusan','$gambar')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
   return mysqli_affected_rows($conn); 
}
function hapus ($id){
    $conn = koneksi();

    //ambil data mahasiswa
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
    
    // hapus data gambar
    if($mhs["gambar"] !== 'shirt8.jpg'){
        unlink('img/' . $mhs["gambar"]);
    }

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}
function ubah($data){
    $conn = koneksi();
    
    $id = ($data["id"]);
    $nama = htmlspecialchars($data["nama"]);
    $npm = htmlspecialchars($data["npm"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars( $data["jurusan"]);
    $gambar = $data["gambar"];
    $query = "UPDATE mahasiswa SET 
        nama = '$nama',
        npm = '$npm',
        email = '$email',
        jurusan = '$jurusan',
        gambar = '$gambar'
    WHERE id='$id'";

    mysqli_query($conn, $query) or die(mysqli_error($conn));
   return mysqli_affected_rows($conn); 
}
function upload(){
    $filename = $_FILES['gambar']['name'];
    $filesize = $_FILES['gambar']['size'];
    $filetmpname = $_FILES['gambar']['tmp_name'];
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    $allowedtype = ['jpg', 'jpeg', 'png'];

    // cek apakah file bukan gambar
    if(!in_array($filetype, $allowedtype)){
        echo"<script>
            alert('extensi gambar tidak benar!!')
        </script>";
        return false;
    }
    
    if($filesize > 1000000){
        echo"<script>
        alert('Ukuran Gambar terlalu BESAR!!')
    </script>";
    return false;
    }
    //LOLOS PENGECEKAN
    //BUAT NAMA FILE BARU
$newfilename = uniqid().$filename;
// upload gambar
move_uploaded_file($filetmpname, 'img/'.$newfilename) ;

return $newfilename;
}
?>