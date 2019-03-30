<?php
	if(isset($_GET['id'])) {
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

		$kode_jabatan = $_GET['id'];
		$cek = mysqli_query($connect, "SELECT * FROM tbl_data_jabatan WHERE kode_jabatan='$kode_jabatan'") or die(mysqli_error($connect));

		if(mysqli_num_rows($cek) == 0) {
			echo '<script>window.history.back()</script>';
		} else {
			$q_delete_jabatan = mysqli_query($connect, "DELETE FROM tbl_data_jabatan WHERE kode_jabatan = '$kode_jabatan'");
			if ($q_delete_jabatan) { ?>
				<script type="text/javascript">
					window.location="../?view=jabatan&mod=add&id=9973841hupa&name=pegaaplication&jabatan&status=2";
		        </script>
			<?php 
			} else { ?>
				
			<?php
			}
		}
	}
?>