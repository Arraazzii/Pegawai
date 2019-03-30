<?php
	error_reporting(0);

	if(isset($_POST['simpan'])) {
		
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

		$p_nip		 	= $_POST['nip'];	
		$p_password 	= $_POST['password_user'];	
		$p_level	 	= $_POST['level'];
		$password	 	= md5($p_password);

		$q_cek_ganda = mysqli_query($connect, "SELECT * FROM tbl_pegawai WHERE nik = '$p_nip'");
		$j_cek_ganda = mysqli_fetch_array($q_cek_ganda);
			
			if ($j_cek_ganda < 1) { ?>
				<script type="text/javascript">
					window.location="../?view=list-user&mod=add&id=9973860hupa&name=pegaaplication&list-user&status=7";
				</script>
			<?php
			} else {
				$q_cek_ganda1 = mysqli_query($connect, "SELECT * FROM tbl_user_lr WHERE nip = '$p_nip'");
				$j_cek_ganda1 = mysqli_fetch_array($q_cek_ganda1);
					
				if ($j_cek_ganda1 > 0) { ?>
					<script type="text/javascript">
						window.location="../?view=list-user&mod=add&id=9973860hupa&name=pegaaplication&list-user&status=8";
					</script>
				<?php
				} else {
					$q_tambah_user	= mysqli_query($connect, "INSERT INTO tbl_user_lr(nip,password,level_user,kode_approve,w_daftar) VALUES ('$p_nip','$password','$p_level','1',NOW())");

					if ($q_tambah_user) { ?>
								
						<script type="text/javascript">
							window.location="../?view=list-user&mod=add&id=9973860hupa&name=pegaaplication&list-user&status=5";
				        </script>
				<?php 
					} else { ?>
						<script type="text/javascript">
							window.location="../?view=list-user&mod=add&id=9973860hupa&name=pegaaplication&list-user&status=6";
				        </script>
					<?php
					}
				}
			}
			
	} else {
		echo '<script>window.history.back()</script>';
	}

?>