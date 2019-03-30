<?php
	if(isset($_GET['id'])) {
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

		$kode_bank = $_GET['id'];
		$cek = mysqli_query($connect, "SELECT * FROM tbl_data_bank WHERE kode_bank='$kode_bank'") or die(mysqli_error($connect));

		if(mysqli_num_rows($cek) == 0) {
			echo '<script>window.history.back()</script>';
		} else {
			$q_delete_bank = mysqli_query($connect, "DELETE FROM tbl_data_bank WHERE kode_bank = '$kode_bank'");
			if ($q_delete_bank) { ?>
				<script type="text/javascript">
					window.location="../?view=bank&mod=add&id=9973849hupa&name=pegaaplication&bank&status=2";
		        </script>
			<?php 
			} else { ?>
				<script type="text/javascript">
				window.location="../?view=bank&mod=add&id=9973849hupa&name=pegaaplication&bank&status=3";
	        </script>
			<?php
			}
		}
	}
?>