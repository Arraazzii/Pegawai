<?php
	if(isset($_GET['id'])) {
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

		$id = $_GET['id'];
		$cek = mysqli_query($connect, "SELECT * FROM gaji WHERE id='$id'") or die(mysqli_error($connect));

		if(mysqli_num_rows($cek) == 0) {
			echo '<script>window.history.back()</script>';
		} else {
			$q_delete_gaji = mysqli_query($connect, "DELETE FROM gaji WHERE id = '$id'");
			if ($q_delete_gaji) { ?>
				<script type="text/javascript">
					window.location="../?view=gaji-pegawai&id=9973854hupa&name=pegaaplication&gajiPegawai&status=2";
		        </script>
			<?php 
			} else { ?>
				<script type="text/javascript">
					window.location="../?view=gaji-pegawai&id=9973854hupa&name=pegaaplication&gajiPegawai&status=3";
		        </script>
			<?php
			}
		}
	}
?>