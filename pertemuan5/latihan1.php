<?php 
// array -> variabel yang dapat menampung banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda 
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arrl =[123, "tukisan", false];

// // menampilkan array
// // vr_dump / print_r()
// var_dump( $hari);
// print_r($bulan);

// // menampilkan 1 elemen pada array
// echo $arrl[0];
// echo $bulan[2];

// menambahkan elemen  baru pada array
var_dump($hari);
$hari []="Kamis";
$hari []="Jum'at";
var_dump($hari);
?>