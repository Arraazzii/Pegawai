<?php

	if(isset($_GET['level'])) {

		$level = $_GET['level'];

		if(isset($_POST['simpan_edit'])) {

			include('../config_config_cs/koneksi-data-peg-lr-com.php');
			$p_nip		 	= $_POST['nip_edit'];	
			$p_password 	= $_POST['password_user_edit'];
			$password 		= md5($p_password);
			$p_level	 	= $_POST['level_edit'];

			if ($level == 'ADMIN' && $p_level == 'SUPER ADMIN') { ?>
				<script type="text/javascript">
					window.location="../?view=list-user&mod=add&id=9973860hupa&name=pegaaplication&list-user&status=7";
				</script>
			<?php	
			} else {
				$q_edit_list_user	= mysqli_query($connect, "UPDATE tbl_user_lr SET password='$password', level_user='$p_level' WHERE nip = '$p_nip'") or die(mysqli_error($connect));
				if ($q_edit_list_user) { ?>
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
		} else {
			echo '<script>window.history.back()</script>';
		}
	}
?>