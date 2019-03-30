<?php
	if(isset($_POST['tambah'])) {
		
		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_kode_agama 	= $_POST['kode_agama'];	
		$p_nama_agama 	= strtoupper($_POST['nama_agama']);

		$q_tambah_agama	= mysqli_query($connect, "INSERT INTO tbl_data_agama VALUES ('$p_kode_agama','$p_nama_agama')");
			if ($q_tambah_agama) { ?>
				<script type="text/javascript">
					window.location="../../kepegawaian?view=agama&mod=add&id=9973843hupa&name=pegaaplication&agama&status=1";
		        </script>
		<?php 
			} else { ?>
				<script type="text/javascript">
				window.location="../?view=agama&mod=add&id=9973843hupa&name=pegaaplication&agama&status=4";
	        </script>
		<?php
			}
			
	} else {
		echo '<script>window.history.back()</script>';
	}

?>