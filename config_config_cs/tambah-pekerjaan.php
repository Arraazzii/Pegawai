<?php
	if(isset($_POST['tambah'])) {

		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_nip		 		= $_POST['nip'];	
		$p_jabatan		 	= strtoupper($_POST['jabatan']);
		$p_nama_instansi	= strtoupper($_POST['nama_instansi']);	
		$p_dari			 	= $_POST['dari'];
		$p_sampai	 		= $_POST['sampai'];	
		$p_lama_kerja	 	= $_POST['lama_kerja'];
		$p_masa 			= $_POST['masa'];
		$p_deskripsi		= $_POST['deskripsi'];	
		

		$q_pekerjaan	= mysqli_query($connect, "INSERT INTO tbl_pengalaman_kerja (nip, nama_instansi, jabatan, deskripsi, lama_kerja, ket, dari, sampai) VALUES('$p_nip', '$p_nama_instansi', '$p_jabatan', '$p_deskripsi', '$p_lama_kerja', '$p_masa', '$p_dari', '$p_sampai')") or die(mysqli_error($connect));
		if ($q_pekerjaan) { ?>
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