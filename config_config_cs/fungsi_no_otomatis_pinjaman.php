<?php
	include "config_config_cs/koneksi-data-peg-lr-com.php";
 
	//membaca kode barang terbesar
	$tahun = date('Y');
  	$nomor = "-".$tahun;

    $q1 = "SELECT max(kode_cicilan) as maxKode1 FROM tbl_pinjaman WHERE YEAR(waktu_input) = '$tahun' ";
    $hasil1 = mysqli_query($connect, $q1);
    $data1  = mysqli_fetch_array($hasil1);
    $kodesch = $data1['maxKode1'];

    $nosch = (int) substr($kodesch, 3, 5);

    $nosch++;
    $char1 = "CCL";
    $newsch = $char1 . sprintf("%05s", $nosch) . $nomor;
?>