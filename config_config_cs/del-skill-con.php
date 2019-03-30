<?php
	if(isset($_GET['id'])) {
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

		$id 	= $_GET['id'];
		$p_nip  = $_GET['nip'];
		$cek = mysqli_query($connect, "SELECT * FROM tbl_skil WHERE id='$id'") or die(mysqli_error($connect));

		if(mysqli_num_rows($cek) == 0) {
			echo '<script>window.history.back()</script>';
		} else {
			$q_delete_skill = mysqli_query($connect, "DELETE FROM tbl_skil WHERE id = '$id'");
			if ($q_delete_skill) { ?>
				<script type="text/javascript">
					window.location="../?view=profil-pribadi&id=997386739hupa&name=pegaaplication&detailPegawai&nip=<?php echo $p_nip; ?>&status=2222";
		        </script>
			<?php 
			} else { ?>
				<script type="text/javascript">
				window.location="../?view=profil-pribadi&id=997386739hupa&name=pegaaplication&detailPegawai&nip=<?php echo $p_nip; ?>&status=3333";
	        </script>
			<?php
			}
		}
	}
?>