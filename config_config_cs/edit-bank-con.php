<?php
	if(isset($_POST['simpan_edit'])) {

		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_kode_bank 	= $_POST['kode_bank_edit'];	
		$p_nama_bank 	= strtoupper($_POST['nama_bank_edit']);

		$q_edit_bank	= mysqli_query($connect, "UPDATE tbl_data_bank SET nama_bank='$p_nama_bank' WHERE kode_bank = '$p_kode_bank'") or die(mysqli_error($connect));
		if ($q_edit_bank) { ?>
			<script type="text/javascript">
				window.location="../?view=bank&mod=add&id=9973849hupa&name=pegaaplication&bank&status=1";
		    </script>
		<?php 
		} else { ?>
			<script type="text/javascript">
				window.location="../?view=bank&mod=add&id=9973849hupa&name=pegaaplication&bank&status=4";
	        </script>	
		<?php
		}

	} else {
		echo '<script>window.history.back()</script>';
	}
?>