<?php
	if(isset($_POST['simpan_edit'])) {

		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_kode_jabatan 	= $_POST['kode_jabatan_edit'];	
		$p_nama_jabatan 	= strtoupper($_POST['nama_jabatan_edit']);

		$q_edit_jabatan	= mysqli_query($connect, "UPDATE tbl_data_jabatan SET nama_jabatan='$p_nama_jabatan' WHERE kode_jabatan = '$p_kode_jabatan'") or die(mysqli_error($connect));
		if ($q_edit_jabatan) { ?>
			<script type="text/javascript">
				window.location="../?view=jabatan&mod=add&id=9973841hupa&name=pegaaplication&jabatan&status=1";
		    </script>
		<?php 
		} else { ?>
			<script type="text/javascript">
				window.location="../?view=jabatan&mod=add&id=9973841hupa&name=pegaaplication&jabatan&status=4";
	        </script>	
		<?php
		}

	} else {
		echo '<script>window.history.back()</script>';
	}
?>