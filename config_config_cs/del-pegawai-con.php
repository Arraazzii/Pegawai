<?php
	if(isset($_GET['id'])) {
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

		$nik = $_GET['id'];
		$cek = mysqli_query($connect, "SELECT * FROM tbl_pegawai WHERE nik='$nik'") or die(mysqli_error($connect));

		if(mysqli_num_rows($cek) == 0) {
			echo '<script>window.history.back()</script>';
		} else {
			$q_delete_pegawai = mysqli_query($connect, "DELETE FROM tbl_pegawai WHERE nik = '$nik'");
			if ($q_delete_pegawai) { ?>
				<script type="text/javascript">
					window.location="../?view=data-pegawai&mod=del&id=9973850hupa&name=pegaaplication&dataPegawai&status=2";
		        </script>
			<?php 
			} else { ?>
				<script type="text/javascript">
				window.location="../?view=data-pegawai&mod=del&id=9973850hupa&name=pegaaplication&dataPegawai&status=3";
	        </script>
			<?php
			}
		}
	}
?>