<?php
	if(isset($_GET['id'])) {
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

		$kode_status = $_GET['id'];
		$cek = mysqli_query($connect, "SELECT * FROM tbl_data_status_pegawai WHERE kode_status='$kode_status'") or die(mysqli_error($connect));

		if(mysqli_num_rows($cek) == 0) {
			echo '<script>window.history.back()</script>';
		} else {
			$q_delete_status = mysqli_query($connect, "DELETE FROM tbl_data_status_pegawai WHERE kode_status = '$kode_status'");
			if ($q_delete_status) { ?>
				<script type="text/javascript">
					window.location="../?view=status-pegawai&mod=add&id=9973846hupa&name=pegaaplication&statusPegawai&status=2";
		        </script>
			<?php
			} else { ?>
				<script type="text/javascript">
				window.location="../?view=status-pegawai&mod=add&id=9973846hupa&name=pegaaplication&statusPegawai&status=3";
	        </script>
			<?php
			}
		}
	}
?>