<?php
	if(isset($_POST['tambah'])) {

		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_id		 		= $_POST['id'];
		$p_nip		 		= $_POST['nip'];	
		$p_jenjang		 	= $_POST['jenjang'];
		$p_nama_instansi	= strtoupper($_POST['nama_instansi']);	
		$p_dari			 	= $_POST['dari'];
		$p_sampai	 		= $_POST['sampai'];	
		$p_tahun_lulus	 	= $_POST['tahun_lulus'];
		$p_ket_ijazah 		= $_POST['ket_ijazah'];	
		$p_tahun_ajaran 	= $p_dari.' - '.$p_sampai;
		$p_masa 			= ($p_sampai)-($p_dari); 

		$q_pendidikan	= mysqli_query($connect, "UPDATE tbl_detail_pendidikan SET nip = '$p_nip', jenjang = '$p_jenjang', nama_instansi = '$p_nama_instansi', tahun_ajaran = '$p_tahun_ajaran', masa_didik = '$p_masa', tahun_lulus = '$p_tahun_lulus', ket_ijazah = '$p_ket_ijazah' WHERE id = '$p_id' ") or die(mysqli_error($connect));
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