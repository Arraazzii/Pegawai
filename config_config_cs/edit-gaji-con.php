<?php
	if(isset($_POST['edit_gaji'])) {

		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_id	 		= $_POST['id'];
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
    	$date 				= date('Y-m-d H:i:s', time());
		$p_pilihan  		= $_POST['pilih'];
		$p_pinjaman_baru	= $_POST['id_pinjaman_baru'];
		$p_pinjaman_lama	= $_POST['id_pinjaman'];

		$q_edit_gaji		= mysqli_query($connect, "UPDATE gaji SET nik='$p_nik', gaji='$p_gapok', tunjangan='$p_tunjangan', insentiv='$p_insentiv', thr='$p_thr', plus_kes='$p_bpjs_kes', plus_tenaga='$p_bpjs_tk', gaji_bruto='$p_gaji_bruto', pajak='$p_pph21', pinjaman='$p_pilihan', min_kes='$p_p_bpjs_kes', min_tenaga='$p_p_bpjs_tk', gaji_bersih='$p_gaji_bersih', tgl='$p_tgl' WHERE id ='$p_id'") or die(mysqli_error($connect));

		$q_edit_pinjaman 	= mysqli_query($connect, "UPDATE tbl_pinjaman_detail SET keterangan = 'BELUM LUNAS', tgl_bayar='$date' WHERE id='$p_pinjaman_lama'") or die(mysqli_error($connect));

		$q_edit_pinjaman2 	= mysqli_query($connect, "UPDATE tbl_pinjaman_detail SET keterangan = 'LUNAS', tgl_bayar='$date' WHERE id='$p_pilihan'") or die(mysqli_error($connect));

		if ($q_edit_gaji && $q_edit_pinjaman && $q_edit_pinjaman2) { ?>
			<script type="text/javascript">
				window.location="../?view=gaji-pegawai&id=9973854hupa&name=pegaaplication&gajiPegawai&status=1";
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