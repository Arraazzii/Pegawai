<?php
	if(isset($_POST['tambah'])) {
		
		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_kode_status 	= $_POST['kode_status'];	
		$p_nama_status 	= strtoupper($_POST['nama_status']);

		$q_tambah_status	= mysqli_query($connect, "INSERT INTO tbl_data_status_pegawai VALUES ('$p_kode_status','$p_nama_status')");
			if ($q_tambah_status) { ?>
				<script type="text/javascript">
					window.location="../../kepegawaian?view=status-pegawai&mod=add&id=9973846hupa&name=pegaaplication&statusPegawai&status=1";
		        </script>
		<?php 
			} else { ?>
				<script type="text/javascript">
				window.location="../?view=status-pegawai&mod=add&id=9973846hupa&name=pegaaplication&statusPegawai&status=4";
	        </script>
		<?php
			}
			
	} else {
		echo '<script>window.history.back()</script>';
	}

?>