<?php
	if(isset($_POST['simpan_edit'])) {

		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_kode_divisi 	= $_POST['kode_divisi_edit'];	
		$p_nama_divisi 	= strtoupper($_POST['nama_divisi_edit']);

		$q_edit_divisi	= mysqli_query($connect, "UPDATE tbl_data_divisi SET nama_divisi='$p_nama_divisi' WHERE kode_divisi = '$p_kode_divisi'") or die(mysqli_error($connect));
		if ($q_edit_divisi) { ?>
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