<?php
	if(isset($_GET['id'])) {
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

        $noinven = $_GET['id'];

		$reject_pengajuan = mysqli_query($connect, "UPDATE tbl_inventory SET stat = 'Rejected', user = '$user' WHERE no_inventory='$noinven'");
		
		if ($reject_pengajuan) { ?>
			<script type="text/javascript">
				window.location="../?view=pengajuan-inventory-barang&id=9973860hupa&name=pegaaplication&listUser&status=6";
		    </script>
		<?php 
		} else { ?>
			<script type="text/javascript">
				window.location="../?view=pengajuan-inventory-barang&id=9973860hupa&name=pegaaplication&listUser&status=8";
		    </script>
		<?php
		}
	}
?>