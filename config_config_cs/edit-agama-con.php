<?php
	if(isset($_POST['simpan_edit'])) {

		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_kode_agama 	= $_POST['kode_agama_edit'];	
		$p_nama_agama 	= strtoupper($_POST['nama_agama_edit']);

		$q_edit_agama	= mysqli_query($connect, "UPDATE tbl_data_agama SET nama_agama='$p_nama_agama' WHERE kode_agama = '$p_kode_agama'") or die(mysqli_error($connect));
		if ($q_edit_agama) { ?>
			<script type="text/javascript">
				window.location="../?view=agama&mod=add&id=9973843hupa&name=pegaaplication&agama&status=1";
		    </script>
		<?php 
		} else { ?>
			<script type="text/javascript">
				window.location="../?view=agama&mod=add&id=9973843hupa&name=pegaaplication&agama&status=4";
	        </script>	
		<?php
		}

	} else {
		echo '<script>window.history.back()</script>';
	}
?>