<?php
	if(isset($_POST['tambah'])) {
		
		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_kode_divisi 	= $_POST['kode_divisi'];	
		$p_nama_divisi 	= strtoupper($_POST['nama_divisi']);

		$q_tambah_divisi	= mysqli_query($connect, "INSERT INTO tbl_data_divisi VALUES ('$p_kode_divisi','$p_nama_divisi')");
			if ($q_tambah_divisi) { ?>
				<script type="text/javascript">
					window.location="../?view=divisi&mod=add&id=9973842hupa&name=pegaaplication&divisi&status=1";
		        </script>
		<?php 
			} else { ?>
				<script type="text/javascript">
				window.location="../?view=divisi&mod=add&id=9973842hupa&name=pegaaplication&divisi&status=4";
	        </script>
		<?php
			}
			
	} else {
		echo '<script>window.history.back()</script>';
	}

?>