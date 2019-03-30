<?php
	if(isset($_GET['id']) && isset($_GET['no'])) {
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

		$id = $_GET['id'];
		$noinven = $_GET['no'];
		date_default_timezone_set('Asia/Jakarta');
		$date = date('dmy_H:i:s', time());

		$approve_peminjaman = mysqli_query($connect, "UPDATE tbl_inventory SET stat = 'Approved', user = '' WHERE no_inventory='$noinven'");
		$approve_peminjaman2 = mysqli_query($connect, "UPDATE tbl_peminjaman SET waktukembali='$date', stat2='0' WHERE id='$id'");
		
		if ($approve_peminjaman) { ?>
			<script type="text/javascript">
				window.location="../?view=peminjaman-barang&id=9973860hupa&name=pegaaplication&listUser&status=5";
		    </script>
		<?php 
		} else { ?>
			<script type="text/javascript">
				window.location="../?view=peminjaman-barang&id=9973860hupa&name=pegaaplication&listUser&status=6";
		    </script>
		<?php
		}
	}
?>