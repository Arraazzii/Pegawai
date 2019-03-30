<?php
	include "config_config_cs/koneksi-data-peg-lr-com.php";
 
	//membaca kode barang terbesar
	$query = "SELECT max(kode_jabatan) as maxKode FROM tbl_data_jabatan";
	$hasil = mysqli_query($connect, $query);
	$data = mysqli_fetch_array($connect, $hasil);
	$kodeBarang = $data['maxKode'];
	 
	// mengambil angka atau bilangan dalam kode anggota terbesar,
	// dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
	// misal 'BRG001', akan diambil '001'
	// setelah substring bilangan diambil lantas dicasting menjadi integer
	$noUrut = (int) substr($kodeBarang, 3, 4);
	 
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$noUrut++;
	 
	// membentuk kode anggota baru
	// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
	// misal sprintf("%03s", 12); maka akan dihasilkan '012'
	// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
	$char = "JBT";
	$kodeJabatan = $char . sprintf("%04s", $noUrut);
?>