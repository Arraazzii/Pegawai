<?php
	include "config_config_cs/koneksi-data-peg-lr-com.php";

	$nipmax=mysqli_fetch_array(mysqli_query($connect, "SELECT max(nik) FROM tbl_pegawai"));
	$nomor_nip=$nipmax[0];
 
	//membaca kode barang terbesar
	$query1 = "SELECT max(id_lahir) as maxKode1 FROM tbl_kelahiran";
	$hasil1 = mysqli_query($connect, $query1);
	$data1 = mysqli_fetch_array($hasil1);
	$kodeBarang1 = $data1['maxKode1'];

	$query2 = "SELECT max(id_alamat) as maxKode2 FROM tbl_alamat";
	$hasil2 = mysqli_query($connect, $query2);
	$data2 = mysqli_fetch_array($hasil2);
	$kodeBarang2 = $data2['maxKode2'];

	$query3 = "SELECT max(id_status) as maxKode3 FROM tbl_status";
	$hasil3 = mysqli_query($connect, $query3);
	$data3 = mysqli_fetch_array($hasil3);
	$kodeBarang3 = $data3['maxKode3'];

	$query5 = "SELECT max(id_tabungan) as maxKode5 FROM tbl_tabungan";
	$hasil5 = mysqli_query($connect, $query5);
	$data5 = mysqli_fetch_array($hasil5);
	$kodeBarang5 = $data5['maxKode5'];

	$query6 = "SELECT max(id_dokumen) as maxKode6 FROM tbl_dokumen";
	$hasil6= mysqli_query($connect, $query6);
	$data6 = mysqli_fetch_array($hasil6);
	$kodeBarang6 = $data6['maxKode6'];

	$query7 = "SELECT max(id_file) as maxKode7 FROM tbl_file";
	$hasil7 = mysqli_query($connect, $query7);
	$data7 = mysqli_fetch_array($hasil7);
	$kodeBarang7 = $data7['maxKode7'];

	$query8 = "SELECT max(id_telp) as maxKode8 FROM tbl_no_telp";
	$hasil8 = mysqli_query($connect, $query8);
	$data8 = mysqli_fetch_array($hasil8);
	$kodeBarang8 = $data8['maxKode8'];

	$query9 = "SELECT max(id_jabatan) as maxKode9 FROM tbl_jabatan";
	$hasil9 = mysqli_query($connect, $query9);
	$data9 = mysqli_fetch_array($hasil9);
	$kodeBarang9 = $data9['maxKode9'];
	 
	// mengambil angka atau bilangan dalam kode anggota terbesar,
	// dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
	// misal 'BRG001', akan diambil '001'
	// setelah substring bilangan diambil lantas dicasting menjadi integer
	$noUrut1 = (int) substr($kodeBarang1, 3, 4);
	$noUrut2 = (int) substr($kodeBarang2, 3, 4);
	$noUrut3 = (int) substr($kodeBarang3, 3, 4);
	$noUrut5 = (int) substr($kodeBarang5, 3, 4);
	$noUrut6 = (int) substr($kodeBarang6, 3, 4);
	$noUrut7 = (int) substr($kodeBarang7, 3, 4);
	$noUrut8 = (int) substr($kodeBarang8, 3, 4);
	$noUrut9 = (int) substr($kodeBarang9, 3, 4);
	 
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$noUrut1++;
	$noUrut2++;
	$noUrut3++;
	$noUrut5++;
	$noUrut6++;
	$noUrut7++;
	$noUrut8++;
	$noUrut9++;
	 
	// membentuk kode anggota baru
	// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
	// misal sprintf("%03s", 12); maka akan dihasilkan '012'
	// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
	$char1 = "KLH";
	$char2 = "ALM";
	$char3 = "STS";
	$char5 = "TBG";
	$char6 = "DKM";
	$char7 = "FLE";
	$char8 = "TLP";
	$char9 = "JBT";

	$kodeLahir 		= $char1 . sprintf("%04s", $noUrut1);
	$kodeAlamat 	= $char2 . sprintf("%04s", $noUrut2);
	$kodeStatus 	= $char3 . sprintf("%04s", $noUrut3);
	$kodeTabungan 	= $char5 . sprintf("%04s", $noUrut5);
	$kodeDokumen 	= $char6 . sprintf("%04s", $noUrut6);
	$kodeFile 		= $char7 . sprintf("%04s", $noUrut7);
	$kodeTelp 		= $char8 . sprintf("%04s", $noUrut8);
	$kodeJabatan 	= $char9 . sprintf("%04s", $noUrut9);
?>