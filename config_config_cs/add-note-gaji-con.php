<?php
	if(isset($_POST['simpan_note'])) {

		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_id 			= $_POST['id'];	
		$p_note		 	= strtoupper($_POST['note']);

		$q_add_note		= mysqli_query($connect, "UPDATE gaji SET note='$p_note' WHERE id = '$p_id'") or die(mysqli_error($connect));
		if ($q_add_note) { ?>
			<script type="text/javascript">
				window.location="../?view=gaji-pegawai&id=9973854hupa&name=pegaaplication&gajiPegawai&status=1";
		    </script>
		<?php 
		} else { ?>
			<script type="text/javascript">
				window.location="../?view=gaji-pegawai&id=9973854hupa&name=pegaaplication&gajiPegawai&status=4";
	        </script>	
		<?php
		}

	} else {
		echo '<script>window.history.back()</script>';
	}
?>