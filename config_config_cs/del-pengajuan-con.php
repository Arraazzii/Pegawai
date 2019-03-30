<?php
	if(isset($_GET['id'])) {
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

		$noinven = $_GET['id'];
		$cek = mysqli_query($connect, "SELECT * FROM tbl_inventory WHERE no_inventory='$noinven'") or die(mysqli_error($connect));

		if(mysqli_num_rows($cek) == 0) {
			echo '<script>window.history.back()</script>';
		} else {
            $q_delete_barang = mysqli_query($connect, "DELETE FROM tbl_inventory WHERE no_inventory = '$noinven'") or die(mysqli_error($connect));
            $delete_harga = mysqli_query($connect, "DELETE FROM tbl_harga_barang WHERE no_inventory = '$noinven'") or die(mysqli_error($connect));
			if ($q_delete_barang && $delete_harga) { ?>
				<script type="text/javascript">
					window.location="../?view=pengajuan-inventory-barang&mod=del&id=9973850hupa&name=pegaaplication&inventoryBarang&status=2";
		        </script>
			<?php 
			} else { ?>
				<script type="text/javascript">
				window.location="../?view=pengajuan-inventory-barang&mod=del&id=9973850hupa&name=pegaaplication&inventoryBarang&status=3";
	        </script>
			<?php
			}
		}
	}
?>