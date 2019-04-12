<?php
	error_reporting(0);

	if(isset($_POST['simpan'])) {
		
		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_id_lahir	 	= $_POST['id_lahir'];	
		$p_id_alamat 	= $_POST['id_alamat'];
		$p_id_jabatan 	= $_POST['id_jabatan'];	
		$p_id_telp	 	= $_POST['id_telp'];
		$p_id_status 	= $_POST['id_status'];	
		$p_id_tabungan 	= $_POST['id_tabungan'];
		$p_id_pendidikan= $_POST['id_pendidikan'];
		$p_id_dokumen 	= $_POST['id_dokumen'];	
		$p_id_file	 	= $_POST['id_file'];

		$p_nip		 	= $_POST['nip'];	
		$p_nama 	 	= strtoupper($_POST['nama']);
		$p_jk 		 	= $_POST['jenis_kelamin'];	
		$p_tmpt_lahir 	= strtoupper($_POST['tmpt_lahir']);
		$p_tgl_lahir 	= $_POST['tgl_lahir'];	
		$p_agama	 	= $_POST['agama'];
		$p_nama_jalan 	= strtoupper($_POST['nama_jalan']);	
		$p_rt 			= $_POST['rt'];
		$p_rw		 	= $_POST['rw'];	
		$p_kelurahan 	= strtoupper($_POST['kelurahan']);
		$p_kecamatan 	= strtoupper($_POST['kecamatan']);	
		$p_kota		 	= strtoupper($_POST['kota']);
		$p_provinsi 	= strtoupper($_POST['provinsi']);	
		$p_kode_pos 	= $_POST['kode_pos'];
		$p_jabatan	 	= $_POST['jabatan'];	
		$p_divisi	 	= $_POST['divisi'];
		$p_npwp		 	= $_POST['npwp'];	
		$p_tgl_masuk 	= $_POST['tgl_masuk'];
		$p_tgl_mulai_kontrak_1 = $_POST['tgl_mulai_kontrak_1'];
		$p_tgl_selesai_kontrak_1 = $_POST['tgl_selesai_kontrak_1'];
		$p_tgl_mulai_kontrak_2 = $_POST['tgl_mulai_kontrak_2'];
		$p_tgl_selesai_kontrak_2 = $_POST['tgl_selesai_kontrak_2'];
		$p_no_telp	 	= $_POST['telp'];	
		$p_no_hp	 	= $_POST['nohp'];
		$p_status_peg 	= $_POST['status_pegawai'];	
		$p_status_kawin	= $_POST['status_kawin'];
		$p_nama_bank 	= $_POST['bank'];	
		$p_no_rekening 	= $_POST['rekening'];

		$q_edit_pegawai 	= mysqli_query($connect, "UPDATE tbl_pegawai SET nama = '$p_nama', id_lahir = '$p_id_lahir', id_alamat = '$p_id_alamat', id_jabatan = '$p_id_jabatan', id_telp = '$p_id_telp', id_status = '$p_id_status', id_tabungan = '$p_id_tabungan' WHERE nik = '$p_nip' ");

			if ($q_edit_pegawai) {

				$q_edit_lahir		= mysqli_query($connect, "UPDATE tbl_kelahiran set tmpt_lahir = '$p_tmpt_lahir', tgl_lahir = '$p_tgl_lahir', jenis_kelamin = '$p_jk', agama = '$p_agama' WHERE id_lahir = '$p_id_lahir' ");

				$q_edit_alamat		= mysqli_query($connect, "UPDATE tbl_alamat set nama_jalan = '$p_nama_jalan', rt = '$p_rt', rw = '$p_rw', kelurahan = '$p_kelurahan', kecamatan = '$p_kecamatan', kota = '$p_kota', provinsi = '$p_provinsi', kode_pos = '$p_kode_pos' WHERE id_alamat = '$p_id_alamat' ");

				$q_edit_jabatan		= mysqli_query($connect, "UPDATE tbl_jabatan set jabatan = '$p_jabatan', divisi = '$p_divisi', no_npwp = '$p_npwp', tgl_masuk = '$p_tgl_masuk', tgl_mulai_kontrak_1 = '$p_tgl_mulai_kontrak_1', tgl_selesai_kontrak_1 = '$p_tgl_selesai_kontrak_1', tgl_mulai_kontrak_2 = '$p_tgl_mulai_kontrak_2', tgl_selesai_kontrak_2 = '$p_tgl_selesai_kontrak_2' WHERE id_jabatan = '$p_id_jabatan' ");

				$q_edit_telp		= mysqli_query($connect, "UPDATE tbl_no_telp set telp = '$p_no_telp', hp = '$p_no_hp' WHERE id_telp = '$p_id_telp' ");

				$q_edit_status		= mysqli_query($connect, "UPDATE tbl_status set status_peg = '$p_status_peg', sts_kawin = '$p_status_kawin' WHERE id_status = '$p_id_status' ");

				$q_edit_tabungan	= mysqli_query($connect, "UPDATE tbl_tabungan set bank = '$p_nama_bank', no_rekening = '$p_no_rekening' WHERE id_tabungan = '$p_id_tabungan' "); ?>
						
				<script type="text/javascript">
					window.location="../?view=data-pegawai&id=997386750hupa&name=pegaaplication&dataPegawai?&status=1";
		        </script>
		<?php 
			} else { ?>
				<script type="text/javascript">
					window.location="../?view=data-pegawai&id=997386750hupa&name=pegaaplication&dataPegawai?&status=4";
		        </script>
			<?php
			}
			
	} else {
		echo '<script>window.history.back()</script>';
	}

?>