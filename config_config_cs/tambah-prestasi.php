<?php
	if(isset($_POST['tambah'])) {

		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_nip		 		= $_POST['nip'];	
		$p_ajang		 	= strtoupper($_POST['ajang']);
		$p_tanggal			= $_POST['tanggal'];
		$p_keterangan	 	= strtoupper($_POST['keterangan']);	
		

		$q_prestasi	= mysqli_query($connect, "INSERT INTO tbl_prestasi (nip, nama_prestasi, tanggal, ket) VALUES('$p_nip', '$p_ajang', '$p_tanggal', '$p_keterangan')") or die(mysqli_error($connect));
		if ($q_prestasi) { ?>
			<script type="text/javascript">
				window.location="../?view=profil-pribadi&id=997386739hupa&name=pegaaplication&detailPegawai&nip=<?php echo $p_nip; ?>&status=1111";
		    </script>
		<?php 
		} else { ?>
			<script type="text/javascript">
				window.location="../?view=profil-pribadi&id=997386739hupa&name=pegaaplication&detailPegawai&nip=<?php echo $p_nip; ?>&status=4444";
			</script>	
		<?php
		}

	} else {
		echo '<script>window.history.back()</script>';
	}
?>