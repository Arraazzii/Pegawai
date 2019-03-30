<?php
	if(isset($_POST['tambah'])) {
		
		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_nik	 		= $_POST['nik'];
		$p_gapok 		= $_POST['gapok'];	
		$p_tunjangan 	= $_POST['tunjangan'];
		$p_insentiv 	= $_POST['insentiv'];
		$p_thr 			= $_POST['thr'];
		$p_bpjs_kes 	= $_POST['bpjs-kes'];
		$p_bpjs_tk 		= $_POST['bpjs-tk'];
		$p_gaji_bruto 	= $_POST['gaji_bruto'];
		$p_pph21 		= $_POST['pph21'];
		$p_pinjaman 	= $_POST['pinjaman'];
		$p_p_bpjs_kes 	= $_POST['p-bpjs-kes'];
		$p_p_bpjs_tk 	= $_POST['p-bpjs-tk'];
		$p_gaji_bersih 	= $_POST['gaji_bersih'];
		$p_tgl 			= $_POST['tanggal'];

		date_default_timezone_set('Asia/Jakarta');
    	$date = date('Y-m-d H:i:s', time());
		$p_pilihan  	= $_POST['pilih'];

		if ($p_pinjaman == '0') {
			$q_tambah_gaji	= mysqli_query($connect, "INSERT INTO gaji (tgl, nik, gaji, tunjangan, insentiv, thr, plus_kes, plus_tenaga, gaji_bruto, pajak, pinjaman, min_kes, min_tenaga, gaji_bersih) VALUES ('$p_tgl','$p_nik','$p_gapok','$p_tunjangan','$p_insentiv','$p_thr','$p_bpjs_kes','$p_bpjs_tk','$p_gaji_bruto','$p_pph21','$p_pilihan','$p_p_bpjs_kes','$p_p_bpjs_tk','$p_gaji_bersih')") or die(mysqli_error($connect));
		} else {
			$q_tambah_gaji	= mysqli_query($connect, "INSERT INTO gaji (tgl, nik, gaji, tunjangan, insentiv, thr, plus_kes, plus_tenaga, gaji_bruto, pajak, pinjaman, min_kes, min_tenaga, gaji_bersih) VALUES ('$p_tgl','$p_nik','$p_gapok','$p_tunjangan','$p_insentiv','$p_thr','$p_bpjs_kes','$p_bpjs_tk','$p_gaji_bruto','$p_pph21','$p_pilihan','$p_p_bpjs_kes','$p_p_bpjs_tk','$p_gaji_bersih')") or die(mysqli_error($connect));
			$q_update_pinjaman = mysqli_query($connect, "UPDATE tbl_pinjaman_detail SET keterangan = 'LUNAS', tgl_bayar='$date' WHERE id= '$p_pilihan'") or die(mysqli_error($connect));
		}


		
			if ($q_tambah_gaji || $q_update_pinjaman) { ?>
				<script type="text/javascript">
					window.location="../../kepegawaian?view=gaji-pegawai&id=9973854hupa&name=pegaaplication&gajiPegawai&status=1";
		        </script>
		<?php 
			} else { ?>
				<script type="text/javascript">
				window.location="../?view=gaji-pegawai&id=9973854hupa&name=pegaaplication&gajiPegawai&status=4";
	        </script>
		<?php
			}
			
	} else {
		echo '<script>window.history.back()</script>';
	}

?>