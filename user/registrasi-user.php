<?php
	error_reporting(0);

	include "../config_config_cs/koneksi-data-peg-lr-com.php";
	if (isset($_POST['registrasi'])) {

		$nip    	= $_POST['nip'];
		$pass   	= $_POST['password'];
		$k_pass   	= $_POST['k_password'];
		// $email    	= $_POST['email'];
		// $domain    	= $_POST['domain'];

		if ($pass == $k_pass) {
			$password 	= ($k_pass);
			$mdpass		= md5($password);

			$ceknip 	= mysqli_num_rows(mysqli_query($connect, "SELECT nik FROM tbl_pegawai WHERE nik = '$nip'"));
			$ceknip1 	= mysqli_num_rows(mysqli_query($connect, "SELECT nip FROM tbl_user_lr WHERE nip = '$nip'"));
			// $cekemail 	= mysqli_num_rows(mysqli_query($connect, "SELECT * FROM tbl_data_email_pegawai WHERE email_pegawai = '$email' AND domain = '$domain'"));

			if ($ceknip == 0) {
				echo "<script>window.location ='../login.php?view=login&id=9973801hupa&name=pegaaplication&Silahkan Login&status=51'</script>";
			} elseif ($ceknip1 > 0) {
				echo "<script>window.location ='../login.php?view=login&id=9973801hupa&name=pegaaplication&Silahkan Login&status=41'</script>";
			// } elseif ($cekemail == 0) {
			// 	echo "<script>window.location ='../login.php?view=login&id=9973801hupa&name=pegaaplication&Silahkan Login&status=61'</script>";
			} else {
				$input =  mysqli_query($connect, "INSERT INTO tbl_user_lr (nip, password, level_user, kode_approve, status, w_daftar) VALUES ('$nip', '$mdpass', 'USER', '0', '0', NOW())");
				if ($input) {
					echo "<script>window.location ='../login.php?view=login&id=9973801hupa&name=pegaaplication&Silahkan Login&status=31'</script>";
				} else {
					echo "<script>window.location ='../login.php?view=login&id=9973801hupa&name=pegaaplication&Silahkan Login&status=81'</script>";
				}
			}
		} else {
			echo "<script>window.location ='../login.php?view=login&id=9973801hupa&name=pegaaplication&Silahkan Login&status=71'</script>";
		}
	}	
?>