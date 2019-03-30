<?php
	if(isset($_GET['id'])) {
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

		$noinven = $_GET['id'];
		date_default_timezone_set('Asia/Jakarta');
		$date = date('dmy_H:i:s', time());

		$approve_peminjaman = mysqli_query($connect, "UPDATE tbl_inventory SET stat = 'Approved', user = '', pj='' WHERE no_inventory='$noinven'");
		
		if ($approve_peminjaman) { ?>
			<script type="text/javascript">
				window.location="../?view=peminjaman-barang&id=9973860hupa&name=pegaaplication&listUser&status2";
		    </script>
		<?php 
		} else { ?>
			<script type="text/javascript">
				window.location="../?view=peminjaman-barang&id=9973860hupa&name=pegaaplication&listUser&status=4";
		    </script>
		<?php
		}
	}
?>