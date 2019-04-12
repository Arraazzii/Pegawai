<?php
	if(isset($_GET['id'])) {
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

		$id = $_GET['id'];
		$cek = mysqli_query($connect, "SELECT * FROM tbl_pinjaman WHERE id='$id'") or die(mysqli_error($connect));
		while($b = mysqli_fetch_array($cek)) { 

            $kode_cicilan = $b['kode_cicilan']; 
                       
        }

		if(mysqli_num_rows($cek) == 0) {
			echo '<script>window.history.back()</script>';
		} else {
			$q_delete_pinjaman 			= mysqli_query($connect, "DELETE FROM tbl_pinjaman WHERE id = '$id'");
			$q_delete_pinjaman_detail 	= mysqli_query($connect, "DELETE FROM tbl_pinjaman_detail WHERE kode_cicilan = '$kode_cicilan'");
			if ($q_delete_pinjaman == TRUE && $q_delete_pinjaman_detail == TRUE) { ?>
				<script type="text/javascript">
					window.location="../?view=pinjaman&id=9973857hupa&name=pegaaplication&pinjaman&status=2";
		        </script>
			<?php 
			} else { ?>
				<script type="text/javascript">
					window.location="../?view=pinjaman&id=9973857hupa&name=pegaaplication&pinjaman&status=3";
		        </script>
			<?php
			}
		}
	}
?>