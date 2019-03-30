<?php
	if(isset($_GET['id'])) {
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

		$nip = $_GET['id'];
		$view = $_GET['hal'];
		
		$q_reject_user = mysqli_query($connect, "UPDATE tbl_pegawai SET ket = 'Aktif' WHERE nik = '$nip'");
		
		if ($q_reject_user) { ?>
			<script type="text/javascript">
				window.location="../?view=<?php echo $view; ?>&id=9973860hupa&name=pegaaplication&listUser&status=8";
		    </script>
		<?php 
		} else { ?>
			<script type="text/javascript">
				window.location="../?view=<?php echo $view; ?>&id=9973860hupa&name=pegaaplication&listUser&status=9";
		    </script>
		<?php
		}
	}
?>