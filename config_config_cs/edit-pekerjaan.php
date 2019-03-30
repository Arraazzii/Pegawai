<?php
	if(isset($_POST['tambah'])) {

		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_id		 		= $_POST['id'];
		$p_nip		 		= $_POST['nip'];	
		$p_jabatan		 	= strtoupper($_POST['jabatan']);
		$p_nama_instansi	= strtoupper($_POST['nama_instansi']);	
		$p_dari			 	= $_POST['dari'];
		$p_sampai	 		= $_POST['sampai'];	
		$p_lama_kerja	 	= $_POST['lama_kerja'];
		$p_masa 			= $_POST['masa'];
		$p_deskripsi		= $_POST['deskripsi'];	
		

		$q_pekerjaan	= mysqli_query($connect, "UPDATE tbl_pengalaman_kerja SET nip = '$p_nip', nama_instansi = '$p_nama_instansi', jabatan = '$p_jabatan', deskripsi = '$p_deskripsi', lama_kerja = '$p_lama_kerja', ket = '$p_masa', dari = '$p_dari', sampai = '$p_sampai' WHERE id = '$p_id' ") or die(mysqli_error($connect));
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