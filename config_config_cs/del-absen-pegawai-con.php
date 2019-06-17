<?php
	if(isset($_GET['id'])) {
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

		$id_absen = $_GET['id'];
		$cek = mysqli_query($connect, "SELECT * FROM tbl_absen WHERE id_absen='$id_absen'") or die(mysqli_error($connect));

		if(mysqli_num_rows($cek) == 0) {
			echo '<script>window.history.back()</script>';
		} else {
			$q_delete_absen = mysqli_query($connect, "DELETE FROM tbl_absen WHERE id_absen = '$id_absen'");
			if ($q_delete_absen) { ?>
				<script type="text/javascript">
					window.location="../?view=daftar-absen&id=9973852hupa&name=pegaaplication&daftarAbsen&status=2";
		        </script>
			<?php 
			} else { ?>
				<script type="text/javascript">
				window.location="../?view=daftar-absen&id=9973852hupa&name=pegaaplication&daftarAbsen&status=3";
	        </script>
			<?php
			}
		}
	}
?>