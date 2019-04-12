<?php
	include('config_config_cs/koneksi-data-peg-lr-com.php');

	$nik 		 = $_POST['nik'];
	$id_pinjaman = $_POST['id_pinjaman'];
    
	$sql 		= "SELECT * FROM tbl_pinjaman_detail JOIN tbl_pinjaman ON tbl_pinjaman_detail.kode_cicilan = tbl_pinjaman.kode_cicilan WHERE tbl_pinjaman.nik ='$nik' AND tbl_pinjaman_detail.id = '$id_pinjaman'";
	$process 	= mysqli_query($connect, $sql);
	$sql2 		= "SELECT * FROM tbl_pinjaman_detail WHERE id = '0'";
	$process2 	= mysqli_query($connect, $sql2);
	$row = mysqli_fetch_array($process2);
		echo "<option value='0'></option>";
	if ($row[0] == $id_pinjaman) {
		echo "<option value='0' selected>0</option>";
	} else {
		echo "<option value='0'>0</option>";
	}
	while ($a = mysqli_fetch_array($process)){
		if ($a[0] == $id_pinjaman) {
			echo "<option value='$a[0]' selected>$a[2]  ($a[4])</option>";	
		} else {
			echo "<option value='$a[0]'>$a[2]  ($a[4])</option>";
		}
        
                                                  
    }
	
?>