<?php
	if(isset($_POST['tambah'])) {
		
		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_kode_lokasi 	= $_POST['kode_lokasi'];	
        $p_nama_lokasi	= strtoupper($_POST['nama_lokasi']);
        $p_pj_lokasi = strtoupper($_POST['pj_lokasi']);

		$q_tambah_lokasi	= mysqli_query($connect, "INSERT INTO tbl_data_lokasi VALUES ('$p_kode_lokasi','$p_nama_lokasi','$p_pj_lokasi')");
			if ($q_tambah_lokasi) { ?>
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