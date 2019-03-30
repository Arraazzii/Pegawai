<?php
	if(isset($_POST['tambah'])) {
		
		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$p_nip_pegawai 		= $_POST['nip_pegawai'];	
		$p_email_pegawai 	= $_POST['email_pegawai'];
		$p_domain		 	= $_POST['domain'];

		$cek_nip = mysqli_query($connect, "SELECT nik FROM tbl_pegawai WHERE nik = '$p_nip_pegawai'");
		$ketemu = mysqli_num_rows($cek_nip);

		if ($ketemu > 0){
			$q_cek_ganda = mysqli_query($connect, "SELECT nip_pegawai FROM tbl_data_email_pegawai WHERE nip_pegawai = '$p_nip_pegawai'");
			$j_cek_ganda = mysqli_fetch_array($q_cek_ganda);
				
			if ($j_cek_ganda > 0) { ?>
				<script type="text/javascript">
					window.location="../../kepegawaian?view=email-pegawai&mod=add&id=9973848hupa&name=pegaaplication&emailPegawai&status=6";
				</script>
			<?php
			} else {

				$q_tambah_email	= mysqli_query($connect, "INSERT INTO tbl_data_email_pegawai VALUES ('$p_nip_pegawai','$p_email_pegawai','$p_domain')");

				if ($q_tambah_email) { ?>
					<script type="text/javascript">
						window.location="../../kepegawaian?view=email-pegawai&mod=add&id=9973848hupa&name=pegaaplication&emailPegawai&status=1";
			        </script>
				<?php 
				} else { ?>
					<script type="text/javascript">
						window.location="../?view=email-pegawai&mod=add&id=9973848hupa&name=pegaaplication&emailPegawai&status=4";
			        </script>
				<?php
				}
			}

		} else { ?>
			<script type="text/javascript">
				window.location="../../kepegawaian?view=email-pegawai&mod=add&id=9973848hupa&name=pegaaplication&emailPegawai&status=5";
			</script>
		<?php
		}
			
	} else {
		echo '<script>window.history.back()</script>';
	}

?>