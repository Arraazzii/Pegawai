<?php
	if(isset($_POST['simpan_edit'])) {

		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_kode_status 	= $_POST['kode_status_edit'];	
		$p_nama_status 	= strtoupper($_POST['nama_status_edit']);

		$q_edit_status	= mysqli_query($connect, "UPDATE tbl_data_status_pegawai SET nama_status='$p_nama_status' WHERE kode_status = '$p_kode_status'") or die(mysqli_error($connect));
		if ($q_edit_status) { ?>
			<script type="text/javascript">
				window.location="../?view=status-pegawai&mod=add&id=9973846hupa&name=pegaaplication&statusPegawai&status=1";
		    </script>
		<?php 
		} else { ?>
			<script type="text/javascript">
				window.location="../?view=status-pegawai&mod=add&id=9973846hupa&name=pegaaplication&statusPegawai&status=4";
	        </script>	
		<?php
		}

	} else {
		echo '<script>window.history.back()</script>';
	}
?>