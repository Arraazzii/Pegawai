<?php
	if(isset($_POST['simpan_edit'])) {

		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_nip_pegawai	 	= $_POST['nip_pegawai_edit'];	
		$p_email_pegawai 	= $_POST['email_pegawai_edit'];
		$p_domain		 	= $_POST['domain_edit'];

		$q_edit_email	= mysqli_query($connect, "UPDATE tbl_data_email_pegawai SET email_pegawai='$p_email_pegawai', domain='$p_domain' WHERE nip_pegawai = '$p_nip_pegawai'") or die(mysqli_error($connect));
		if ($q_edit_email) { ?>
			<script type="text/javascript">
				window.location="../?view=email-pegawai&mod=add&id=9973848hupa&name=pegaaplication&emailPegawai&status=1";
		    </script>
		<?php 
		} else { ?>
			<script type="text/javascript">
				window.location="../?view=email-pegawai&mod=add&id=9973848hupa&name=pegaaplication&emailPegawai&status=4";
		    </script>	
		<?php
		}

	} else {
		echo '<script>window.history.back()</script>';
	}
?>