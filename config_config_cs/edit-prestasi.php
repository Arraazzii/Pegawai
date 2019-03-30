<?php
	if(isset($_POST['tambah'])) {

		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_id		 		= $_POST['id'];
		$p_nip		 		= $_POST['nip'];	
		$p_ajang		 	= strtoupper($_POST['ajang']);
		$p_tanggal			= $_POST['tanggal'];
		$p_keterangan	 	= strtoupper($_POST['keterangan']);
		

		$q_prestasi	= mysqli_query($connect, "UPDATE tbl_prestasi SET nip = '$p_nip', nama_prestasi = '$p_ajang', tanggal = '$p_tanggal', ket = '$p_keterangan' WHERE id = '$p_id' ") or die(mysqli_error($connect));
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