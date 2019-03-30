<?php
	if(isset($_GET['id'])) {
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

		$kode_lokasi = $_GET['id'];
		$cek = mysqli_query($connect, "SELECT * FROM tbl_data_lokasi WHERE kode_agama='$kode_lokasi'") or die(mysqli_error($connect));

		if(mysqli_num_rows($cek) == 0) {
			echo '<script>window.history.back()</script>';
		} else {
			$q_delete_lokasi = mysqli_query($connect, "DELETE FROM tbl_data_lokasi WHERE kode_lokasi = '$kode_lokasi'");
			if ($q_delete_lokasi) { ?>
				<script type="text/javascript">
					window.location="../?view=lokasi&mod=add&id=9973843hupa&name=pegaaplication&lokasi&status=2";
		        </script>
			<?php 
			} else { ?>
				<script type="text/javascript">
				window.location="../?view=lokasi&mod=add&id=9973843hupa&name=pegaaplication&lokasi&status=3";
	        </script>
			<?php
			}
		}
	}
?>