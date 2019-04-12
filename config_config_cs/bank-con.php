<?php
	if(isset($_POST['tambah'])) {
		
		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_kode_bank 	= $_POST['kode_bank'];	
		$p_nama_bank 	= strtoupper($_POST['nama_bank']);

		$q_tambah_bank	= mysqli_query($connect, "INSERT INTO tbl_data_bank VALUES ('$p_kode_bank','$p_nama_bank')");
			if ($q_tambah_bank) { ?>
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