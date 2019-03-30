<?php
/**
 * Namafile : config.php 
 * ----------------------------*/

$dbhost = 'localhost'; 
$dbuser = 'root';     // ini berlaku di xampp
$dbpass = '';         // ini berlaku di xampp
$dbname = 'db_pegawai';

/*$dbhost = 'localhost'; 
$dbuser = 'k0762615_pegawai';     
$dbpass = 'PegawaiLrcom123!@#';        
$dbname = 'k0762615_pegawai_1';*/

// melakukan koneksi ke database
$connect = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

// cek koneksi yang kita lakukan berhasil atau tidak
if ($connect->connect_error) {
   // jika terjadi error, matikan proses dengan die() atau exit();
   die('Maaf koneksi gagal: '. $connect->connect_error);
}
?>