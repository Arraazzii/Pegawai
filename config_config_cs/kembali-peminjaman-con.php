<?php
	if(isset($_GET['id']) && isset($_GET['no'])) {
		include('../config_config_cs/koneksi-data-peg-lr-com.php');

		$id = $_GET['id'];
        $noinven= $_GET['no'];
		date_default_timezone_set('Asia/Jakarta');
		$date = date('dmy_H:i:s', time());

        $kembali_peminjaman = mysqli_query($connect, "UPDATE tbl_inventory SET stat = 'PendingKembali1', user = 'ADMIN TEKNIS' WHERE no_inventory='$noinven'");
        $kembali_peminjaman2 = mysqli_query($connect, "UPDATE tbl_peminjaman SET stat2='4' WHERE id='$id'");
		
		if ($kembali_peminjaman && $kembali_peminjaman2) { ?>
			<script type="text/javascript">
				window.location="../?view=peminjaman-barang&id=9973860hupa&name=pegaaplication&listUser&status=1";
		    </script>
		<?php 
		} else { ?>
			<script type="text/javascript">
				window.location="../?view=peminjaman-barang&id=9973860hupa&name=pegaaplication&listUser&status=3";
		    </script>
		<?php
		}
	}
?>