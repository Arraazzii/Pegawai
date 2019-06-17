<?php
	if(isset($_POST['check_in'])) {
		
		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		date_default_timezone_set('Asia/Jakarta');
		$tanggal		= date("Y-m-d");
		$p_nip 			= $_POST['nip'];	
		$p_jam 			= $_POST['jam'];
		$lat 			= $_POST['lat'];	
		$keterangan		= $_POST['keterangan'];
		$geotag 		= $lat .', '. $long;

		$absen = date("Y-m-d H:i:s");
		$absen1 = date("H:i:s");

		if ($absen1 <= $p_jam) {
			$status = 'Hadir';
		} else {
			$status = 'Terlambat';
		}

		$q_absensi	= mysqli_query($connect, "INSERT INTO tbl_absen (nip, tgl_absen, check_in, keterangan_ci, geotag_ci, status) VALUES ('$p_nip','$tanggal','$absen','$keterangan','$geotag','$status')");
			if ($q_absensi) { ?>
				<script type="text/javascript">
					window.location="../?view=halaman-utama&id=9973838hupa&name=pegaaplication&dashboard&status=91";
		        </script>
		<?php 
			} else { ?>
				<script type="text/javascript">
				window.location="../?view=halaman-utama&id=9973838hupa&name=pegaaplication&dashboard&status=101";
	        </script>
		<?php
			}
			
	} else {
		echo '<script>window.history.back()</script>';
	}

?>