<?php
	if(isset($_GET['id'])) {
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

		$nip = $_GET['id'];
		
		$q_reject_user = mysqli_query($connect, "UPDATE tbl_user_lr SET kode_approve = '2' WHERE nip = '$nip'");
		
		if ($q_reject_user) { ?>
			<script type="text/javascript">
				window.location="../?view=list-user&id=9973860hupa&name=pegaaplication&listUser&status=2";
		    </script>
		<?php 
		} else { ?>
			<script type="text/javascript">
				window.location="../?view=list-user&id=9973860hupa&name=pegaaplication&listUser&status=4";
		    </script>
		<?php
		}
	}
?>