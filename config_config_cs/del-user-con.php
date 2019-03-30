<?php
	if(isset($_GET['id'])) {
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

		$id = $_GET['id'];
		$cek = mysqli_query($connect, "SELECT * FROM tbl_user_lr WHERE id='$id'") or die(mysqli_error($connect));

		if(mysqli_num_rows($cek) == 0) {
			echo '<script>window.history.back()</script>';
		} else {
			$q_delete_pegawai = mysqli_query($connect, "DELETE FROM tbl_user_lr WHERE id = '$id'");
			if ($q_delete_pegawai) { ?>
				<script type="text/javascript">
					window.location="../?view=list-user&mod=del&id=9973850hupa&name=pegaaplication&listUser&status=9";
		        </script>
			<?php 
			} else { ?>
				<script type="text/javascript">
				window.location="../?view=list-user&mod=del&id=9973850hupa&name=pegaaplication&listUser&status=10";
	        </script>
			<?php
			}
		}
	}
?>