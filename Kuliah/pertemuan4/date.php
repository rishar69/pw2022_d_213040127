<?php 
// date 
// untuk menapilkan dengan format tertentu
// echo date( "l, d-M-y" );

// time
// unix time stamp / EOPCH time
// detik yang sudah berlalu sejak 1 januari 1970
// echo date("d-m-y", time()+60*60*24*100); 

// mktime
// membuat detik sendiri
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date ("l, M", mktime(0,0,0,1,7,2003))

// strtotome
echo date("l", strtotime( "7s jan 2003"))
?>