<?php
	if(isset($_POST['tambah'])) {
		
		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_kode_jabatan 	= $_POST['kode_jabatan'];	
		$p_nama_jabatan 	= strtoupper($_POST['nama_jabatan']);

		$q_tambah_jabatan	= mysqli_query($connect, "INSERT INTO tbl_data_jabatan VALUES ('$p_kode_jabatan','$p_nama_jabatan')");
			if ($q_tambah_jabatan) { ?>
				<script type="text/javascript">
					window.location="../../kepegawaian?view=jabatan&mod=add&id=9973841hupa&name=pegaaplication&jabatan&status=1";
		        </script>
		<?php 
			} else { ?>
				<script type="text/javascript">
				window.location="../?view=jabatan&mod=add&id=9973841hupa&name=pegaaplication&jabatan&status=4";
	        </script>
		<?php
			}
			
	} else {
		echo '<script>window.history.back()</script>';
	}

?>