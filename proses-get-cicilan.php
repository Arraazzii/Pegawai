<?php
	include('config_config_cs/koneksi-data-peg-lr-com.php');

	$id			= mysqli_real_escape_string($connect, $_POST['id']);
	if ($id == 0 || $id == '') {
		echo '0';
	} else {

		$sql 		= "SELECT * FROM tbl_pinjaman_detail WHERE id = '$id'";
		$process 	= mysqli_query($connect, $sql);
		$row 		= mysqli_fetch_array($process);
			echo $row['besaran'];
	}
?>