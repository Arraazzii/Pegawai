<?php
	if(isset($_GET['id'])) {
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

        $noinven = $_GET['id'];

		$approve_pengajuan = mysqli_query($connect, "UPDATE tbl_inventory SET stat = 'Finance2', user = 'ADMIN FINANCE' WHERE no_inventory='$noinven'");
		
		if ($approve_pengajuan) { ?>
			<script type="text/javascript">
				window.location="../?view=pengajuan-inventory-barang&id=9973860hupa&name=pegaaplication&listUser&status=5";
		    </script>
		<?php 
		} else { ?>
			<script type="text/javascript">
				window.location="../?view=pengajuan-inventory-barang&id=9973860hupa&name=pegaaplication&listUser&status=7";
		    </script>
		<?php
		}
	}
?>