<?php
	if(isset($_POST['check_out'])) {
		
		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date("Y-m-d");
		$p_id 	= $_POST['id'];
		$p_nip 	= $_POST['nip'];	
		$p_jam 	= $_POST['tgl2'];
		$lat 	= $_POST['lat'];	
		$long 	= $_POST['long'];
		$geotag = $lat .', '. $long;

		$absen = date("Y-m-d H:i:s");

		$q_absensi	= mysqli_query($connect, "UPDATE tbl_absen SET check_out = '$absen', geotag_co = '$geotag' WHERE id_absen = '$p_id' ");
			if ($q_absensi) { ?>
				<script type="text/javascript">
					window.location="../?view=halaman-utama&id=9973838hupa&name=pegaaplication&dashboard&status=102";
		        </script>
		<?php 
			} else { ?>
				<script type="text/javascript">
				window.location="../?view=halaman-utama&id=9973838hupa&name=pegaaplication&dashboard&status=103";
	        </script>
		<?php
			}
			
	} else {
		echo '<script>window.history.back()</script>';
	}

?>