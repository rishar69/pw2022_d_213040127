<?Php 
// // array adalah variabel yang dapat menyimpan banyak nilai sekaligus

// // membuat array
// $hari = "senin";
// $hari1 = "selasa";
// $hari2 = "rabu";

// $hari = ["senin", "selasa", "rabu", "kamis", "jum'at", "sabtu", "minggu"];//versi baru

// $bulan = array("januari", "februari", "maret");

// // mencetak echo
// // menggunakan index, dimulai dari 0
// echo $hari[2];
// echo "<br>";
// echo $hari1[1];
// echo "<br>";

// // menggunakan var_dump atau print_r( ) untuk menectak semua value di array
// // hanya untuk debugging

// var_dump($hari);
// echo "<br>";

// print_r($hari);

// echo "<br>";

// // mencetak array untuk user
// // menggunakan looping

// for($i = 0; $i < 7; $i++){
//     echo $hari[$i];
//     echo "<br> ";
// }
// echo "<hr>";
// // menggunakan foreach
// // looping khusus array

// foreach ($hari as $h){
// echo $h . "<br>";
// }
// echo "<hr>";
// // memanipulasi array
// // menambah 1 element di akhir

// $bulan[] = "april";
// $bulan[] = "mei";
// print_r($bulan)
?>

<?php 
// array
// variabel yang dapat memiliki nilai

// membuat array
// cara lama
$hari = array("senin", "selasa", "rabu" );

// cara baru
$bulan = ["januari", "februari", "maret"];
$asdo = ["string", 123, false];

// menampilkan array
// menggunakan var_dump() / print_r() untuk debbuging only

var_dump($hari);
echo "<br>";
// print_r($bulan);
// echo "<br>";
// menampilkan 1 element array

// echo $hari [0];
// echo "<br>";
// echo $bulan [2];

// menambahkan element baru pada array

$hari[] = "kamis";
$hari[] = "Jum'at";
var_dump($hari);

?>