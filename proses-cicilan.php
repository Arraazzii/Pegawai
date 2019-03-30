<?php
	include('config_config_cs/koneksi-data-peg-lr-com.php');

	$nik		= mysqli_real_escape_string($connect, $_POST['nik']);
    
	$sql 		= "SELECT * FROM tbl_pinjaman_detail JOIN tbl_pinjaman ON tbl_pinjaman_detail.kode_cicilan = tbl_pinjaman.kode_cicilan WHERE tbl_pinjaman.nik = '$nik' AND keterangan = 'BELUM LUNAS'";
	$process 	= mysqli_query($connect, $sql);
		echo "<option value='4'>Pinjaman</option>";
		echo "<option value='4'>0</option>";
	while ($a = mysqli_fetch_array($process)){
        echo "<option value='$a[0]'>$a[2]  ($a[4])</option>";
                                                  
    }
	
?>