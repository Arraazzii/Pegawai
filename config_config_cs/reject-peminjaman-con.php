<?php
	if(isset($_GET['id']) && isset($_GET['no'])) {
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

		$id = $_GET['id'];
		$noinven = $_GET['no'];
		date_default_timezone_set('Asia/Jakarta');
		$date = date('dmy_H:i:s', time());

		$reject_peminjaman = mysqli_query($connect, "UPDATE tbl_inventory SET stat = 'Approved', user = '' WHERE no_inventory='$noinven'");
		$reject = mysqli_query($connect, "UPDATE tbl_peminjaman SET stat2='6' WHERE no_inventory='$noinven'");
		
		if ($reject_peminjaman && $reject) { ?>
			<script type="text/javascript">
				window.location="../?view=peminjaman-barang&id=9973860hupa&name=pegaaplication&listUser&status=9";
		    </script>
		<?php 
		} else { ?>
			<script type="text/javascript">
				window.location="../?view=peminjaman-barang&id=9973860hupa&name=pegaaplication&listUser&status=10";
		    </script>
		<?php
		}
	}
?>