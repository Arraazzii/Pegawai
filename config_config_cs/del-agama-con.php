<?php
	if(isset($_GET['id'])) {
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

		$kode_agama = $_GET['id'];
		$cek = mysqli_query($connect, "SELECT * FROM tbl_data_agama WHERE kode_agama='$kode_agama'") or die(mysqli_error($connect));

		if(mysqli_num_rows($cek) == 0) {
			echo '<script>window.history.back()</script>';
		} else {
			$q_delete_agama = mysqli_query($connect, "DELETE FROM tbl_data_agama WHERE kode_agama = '$kode_agama'");
			if ($q_delete_agama) { ?>
				<script type="text/javascript">
					window.location="../?view=agama&mod=add&id=9973843hupa&name=pegaaplication&agama&status=2";
		        </script>
			<?php 
			} else { ?>
				<script type="text/javascript">
				window.location="../?view=agama&mod=add&id=9973843hupa&name=pegaaplication&agama&status=3";
	        </script>
			<?php
			}
		}
	}
?>