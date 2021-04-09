<?php 

// // Date -> untuk menampilkan tanggal dengan format trtentu
//    echo date("l, d-M-Y");

// // Time
// // UNIX Timestamp / EPOCH time
// // detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date("l", time()+60*60*24*2);

// mktime -> membuat detik sendiri yang sudah berlalu
// mktime (0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,9,2,1998));

// strtotime
echo date("l", strtotime("2 september 1998"));
?>