<?php
	include('config_config_cs/koneksi-data-peg-lr-com.php');

	$nik		= mysqli_real_escape_string($connect, $_POST['nik']);
	$sql 		= "SELECT * FROM tbl_pegawai WHERE nik = '$nik'";
	$process 	= mysqli_query($connect, $sql);
	$num 		= mysqli_num_rows($process);
	$row 		= mysqli_fetch_array($process);
		if($num > 0){
			echo " ✔ Nama Pegawai : ". $row['nama'];
		} else {
			echo " ❌ NIP Pegawai Tidak Tersedia";
		}
?>