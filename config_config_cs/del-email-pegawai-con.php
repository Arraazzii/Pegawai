<?php
	if(isset($_GET['id'])) {
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

		$nip_pegawai = $_GET['id'];
		$cek = mysqli_query($connect, "SELECT * FROM tbl_data_email_pegawai WHERE nip_pegawai='$nip_pegawai'") or die(mysqli_error($connect));

		if(mysqli_num_rows($cek) == 0) {
			echo '<script>window.history.back()</script>';
		} else {
			$q_delete_email = mysqli_query("DELETE FROM tbl_data_email_pegawai WHERE nip_pegawai = '$nip_pegawai'");
			if ($q_delete_email) { ?>
				<script type="text/javascript">
					window.location="../?view=email-pegawai&mod=add&id=9973848hupa&name=pegaaplication&emailPegawai&status=2";
		        </script>
			<?php
			} else { ?>
				<script type="text/javascript">
				window.location="../?view=email-pegawai&mod=add&id=9973848hupa&name=pegaaplication&emailPegawai&status=3";
	        </script>
			<?php
			}
		}
	}
?>