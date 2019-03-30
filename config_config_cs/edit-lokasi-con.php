<?php
	if(isset($_POST['simpan_edit'])) {

		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_kode_lokasi 	= $_POST['kode_lokasi_edit'];	
        $p_nama_lokasi	= strtoupper($_POST['nama_lokasi_edit']);
        $p_pj_lokasi = strtoupper($_POST['pj_lokasi_edit']);

		$q_edit_lokasi	= mysqli_query($connect, "UPDATE tbl_data_lokasi SET nama_lokasi='$p_nama_lokasi', pj_lokasi='$p_pj_lokasi' WHERE kode_lokasi = '$p_kode_lokasi'") or die(mysqli_error($connect));
		if ($q_edit_lokasi) { ?>
			<script type="text/javascript">
				window.location="../?view=lokasi&mod=add&id=9973843hupa&name=pegaaplication&lokasi&status=1";
		    </script>
		<?php 
		} else { ?>
			<script type="text/javascript">
				window.location="../?view=lokasi&mod=add&id=9973843hupa&name=pegaaplication&lokasi&status=4";
	        </script>	
		<?php
		}

	} else {
		echo '<script>window.history.back()</script>';
	}
?>