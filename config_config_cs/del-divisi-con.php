<?php
	if(isset($_GET['id'])) {
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

		$kode_divisi = $_GET['id'];
		$cek = mysqli_query($connect, "SELECT * FROM tbl_data_divisi WHERE kode_divisi='$kode_divisi'") or die(mysqli_error($connect));

		if(mysqli_num_rows($cek) == 0) {
			echo '<script>window.history.back()</script>';
		} else {
			$q_delete_divisi = mysqli_query($connect, "DELETE FROM tbl_data_divisi WHERE kode_divisi = '$kode_divisi'");
			if ($q_delete_divisi) { ?>
				<script type="text/javascript">
					window.location="../?view=divisi&mod=add&id=9973842hupa&name=pegaaplication&divisi&status=2";
		        </script>
			<?php 
			} else { ?>
				<script type="text/javascript">
				window.location="../?view=divisi&mod=add&id=9973842hupa&name=pegaaplication&divisi&status=3";
	        </script>
			<?php
			}
		}
	}
?>