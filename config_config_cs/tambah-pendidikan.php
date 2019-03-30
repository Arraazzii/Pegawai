<?php
	if(isset($_POST['tambah'])) {

		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_nip		 		= $_POST['nip'];	
		$p_jenjang		 	= $_POST['jenjang'];
		$p_nama_instansi	= strtoupper($_POST['nama_instansi']);	
		$p_dari			 	= $_POST['dari'];
		$p_sampai	 		= $_POST['sampai'];	
		$p_tahun_lulus	 	= $_POST['tahun_lulus'];
		$p_ket_ijazah 		= $_POST['ket_ijazah'];	
		$p_tahun_ajaran 	= $p_dari.' - '.$p_sampai;
		$p_masa 			= ($p_sampai)-($p_dari); 

		$q_pendidikan	= mysqli_query($connect, "INSERT INTO tbl_detail_pendidikan (nip, jenjang, nama_instansi, tahun_ajaran, masa_didik, tahun_lulus, ket_ijazah) VALUES('$p_nip', '$p_jenjang', '$p_nama_instansi', '$p_tahun_ajaran', '$p_masa', '$p_tahun_lulus', '$p_ket_ijazah')") or die(mysqli_error($connect));
		if ($q_pendidikan) { ?>
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