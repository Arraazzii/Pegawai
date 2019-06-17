<?php
	if(isset($_POST['simpan'])) {

		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_id		 		= $_POST['id'];
		$p_nip		 		= $_POST['nip'];
		$p_tgl_absen 		= $_POST['tgl_absen'];	
		$p_check_in		 	= $_POST['check_in'];
		$p_check_out		= $_POST['check_out'];
		$p_keterangan_ci 	= $_POST['keterangan_ci'];
		$p_keterangan_co 	= $_POST['keterangan_co'];
		$p_geotag_ci 		= $_POST['geotag_ci'];
		$p_geotag_co 		= $_POST['geotag_co'];
		

		$q_prestasi	= mysqli_query($connect, "UPDATE tbl_absen SET nip = '$p_nip', tgl_absen = '$p_tgl_absen', check_in = '$p_check_in', keterangan_ci = '$p_keterangan_ci', geotag_ci = '$p_geotag_ci', check_out = '$p_check_out', keterangan_co = '$p_keterangan_co', geotag_co = '$p_geotag_co' WHERE id_absen = '$p_id' ") or die(mysqli_error($connect));
		if ($q_prestasi) { ?>
			<script type="text/javascript">
				window.location="../?view=daftar-absen&id=9973852hupa&name=pegaaplication&daftarAbsen&status=1";
		    </script>
		<?php 
		} else { ?>
			<script type="text/javascript">
				window.location="../?view=daftar-absen&id=9973852hupa&name=pegaaplication&daftarAbsen&status=4";
			</script>	
		<?php
		}

	} else {
		echo '<script>window.history.back()</script>';
	}
?>