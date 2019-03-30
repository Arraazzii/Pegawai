<?php
	if(isset($_GET['id']) && isset($_GET['no'])) {
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

        $id = $_GET['id'];
        $noinven= $_GET['no'];
		$cek = mysqli_query($connect, "SELECT * FROM tbl_inventory WHERE no_inventory='$noinven'") or die(mysqli_error($connect));

		if(mysqli_num_rows($cek) == 0) {
			echo '<script>window.history.back()</script>';
		} else {
            $cancel_peminjaman = mysqli_query($connect, "UPDATE tbl_inventory SET stat = 'Approved', user = '', pj='' WHERE no_inventory='$noinven'");
            $delete_peminjaman = mysqli_query($connect, "DELETE FROM tbl_peminjaman WHERE id = '$id'") or die(mysqli_error($connect));
			if ($cancel_peminjaman && $delete_peminjaman) { ?>
				<script type="text/javascript">
					window.location="../?view=peminjaman-barang&mod=del&id=9973850hupa&name=pegaaplication&inventoryBarang&status=7";
		        </script>
			<?php 
			} else { ?>
				<script type="text/javascript">
				window.location="../?view=peminjaman-inventory-barang&mod=del&id=9973850hupa&name=pegaaplication&inventoryBarang&status=8";
	        </script>
			<?php
			}
		}
	}
?>