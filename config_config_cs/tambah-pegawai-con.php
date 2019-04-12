<?php
	error_reporting(0);

	if(isset($_POST['tambah'])) {
		
		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_id_lahir	 	= $_POST['id_lahir'];	
		$p_id_alamat 	= $_POST['id_alamat'];
		$p_id_jabatan 	= $_POST['id_jabatan'];	
		$p_id_telp	 	= $_POST['id_telp'];
		$p_id_status 	= $_POST['id_status'];	
		$p_id_tabungan 	= $_POST['id_tabungan'];
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

		$q_cek_ganda = mysqli_query($connect, "SELECT * FROM tbl_pegawai WHERE nik = '$p_nip'");
		$j_cek_ganda = mysqli_fetch_array($q_cek_ganda);
			
			if ($j_cek_ganda > 0) { ?>
				<script type="text/javascript">
					window.location="../?view=add-pegawai&mod=add&id=9973865hupa&name=pegaaplication&tambahPegawai&status=6";
				</script>
			<?php
			} else {
				$q_tambah_pegawai	= mysqli_query($connect, "INSERT INTO tbl_pegawai(nik,nama,id_lahir,id_alamat,id_jabatan,id_telp,id_status,id_tabungan,id_dokumen,id_file,ket) VALUES ('$p_nip','$p_nama','$p_id_lahir','$p_id_alamat','$p_id_jabatan','$p_id_telp','$p_id_status','$p_id_tabungan','$p_id_dokumen','$p_id_file','Aktif')");

					if ($q_tambah_pegawai) {

						$q_tambah_lahir		= mysqli_query($connect, "INSERT INTO tbl_kelahiran VALUES ('$p_id_lahir','$p_tmpt_lahir','$p_tgl_lahir','$p_jk','$p_agama')");

						$q_tambah_alamat	= mysqli_query($connect, "INSERT INTO tbl_alamat VALUES ('$p_id_alamat','$p_nama_jalan','$p_rt','$p_rw','$p_kelurahan','$p_kecamatan','$p_kota','$p_provinsi','$p_kode_pos')");

						$q_tambah_jabatan 	= mysqli_query($connect, "INSERT INTO tbl_jabatan VALUES ('$p_id_jabatan','$p_jabatan','$p_divisi','$p_npwp','$p_tgl_masuk','$p_tgl_mulai_kontrak_1','$p_tgl_selesai_kontrak_1','$p_tgl_mulai_kontrak_2','$p_tgl_selesai_kontrak_2')");

						$q_tambah_telp		= mysqli_query($connect, "INSERT INTO tbl_no_telp VALUES ('$p_id_telp','$p_no_telp','$p_no_hp')");		

						$q_tambah_status	= mysqli_query($connect, "INSERT INTO tbl_status VALUES ('$p_id_status','$p_status_peg','$p_status_kawin')");

						$q_tambah_tabungan	= mysqli_query($connect, "INSERT INTO tbl_tabungan VALUES ('$p_id_tabungan','$p_nama_bank','$p_no_rekening')");

						$q_tambah_dokumen	= mysqli_query($connect, "INSERT INTO tbl_dokumen (id_dokumen) VALUES ('$p_id_dokumen')");

						$q_tambah_file		= mysqli_query($connect, "INSERT INTO tbl_file (id_file) VALUES ('$p_id_file')");

						$q_tambah_about		= mysqli_query($connect, "INSERT INTO tbl_about_me (nip) VALUES ('$p_nip')"); ?>
						
						<script type="text/javascript">
							window.location="../?view=add-pegawai&mod=add&id=9973865hupa&name=pegaaplication&tambahPegawai&status=1";
				        </script>
				<?php 
					} else { ?>
						<script type="text/javascript">
							window.location="../?view=add-pegawai&mod=add&id=9973865hupa&name=pegaaplication&tambahPegawai&status=4";
				        </script>
				<?php
					}
				}
			
	} else {
		echo '<script>window.history.back()</script>';
	}

?>