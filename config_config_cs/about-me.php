<?php
	if(isset($_POST['tambah'])) {

		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_nip 		= $_POST['nip'];	
		$p_detail 	= $_POST['detail'];

		$q_about	= mysqli_query($connect, "UPDATE tbl_about_me SET about='$p_detail' WHERE nip = '$p_nip'") or die(mysqli_error($connect));
		if ($q_about) { ?>
			<script type="text/javascript">
				window.location="../?view=profil-pribadi&id=997386739hupa&name=pegaaplication&detailPegawai&nip=<?php echo $p_nip; ?>&status=1111";
		    </script>
		<?php 
		} else { ?>
			<script type="text/javascript">
				window.location="../?view=profil-pribadi&id=997386739hupa&name=pegaaplication&detailPegawai&nip=<?php echo $p_nip; ?>&status=4444";
			</script>	
		<?php
		}

	} else {
		echo '<script>window.history.back()</script>';
	}
?>