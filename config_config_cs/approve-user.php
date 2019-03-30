<?php
	if(isset($_GET['id'])) {
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

		$nip = $_GET['id'];
		
		$q_reject_user = mysqli_query($connect, "UPDATE tbl_user_lr SET kode_approve = '1' WHERE nip = '$nip'");
		
		if ($q_reject_user) { ?>
			<script type="text/javascript">
				window.location="../?view=list-user&id=9973860hupa&name=pegaaplication&listUser&status=1";
		    </script>
		<?php 
		} else { ?>
			<script type="text/javascript">
				window.location="../?view=list-user&id=9973860hupa&name=pegaaplication&listUser&status=3";
		    </script>
		<?php
		}
	}
?>