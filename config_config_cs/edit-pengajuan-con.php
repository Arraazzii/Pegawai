<?php
	if(isset($_POST['simpan_edit'])) {

        include('../config_config_cs/koneksi-data-peg-lr-com.php');
        
		$noinven_edit = $_POST['noinven_edit'];
        $nama_barang = strtoupper($_POST['nama_barang_edit']);
        $harga_barang = $_POST['harga_barang_edit'];
        $lokasi_beli = $_POST['lokasi_beli_edit'];

        $q_edit_barang	= mysqli_query($connect, "UPDATE tbl_inventory SET nama_barang='$nama_barang' WHERE no_inventory='$noinven_edit'") or die(mysqli_error($connect));
        $q_edit_harga	= mysqli_query($connect, "UPDATE tbl_harga_barang SET harga='$harga_barang', lokasi_beli='$lokasi_beli' WHERE no_inventory='$noinven_edit'") or die(mysqli_error($connect));
		if ($q_edit_barang && $q_edit_harga) { ?>
			<script type="text/javascript">
				window.location="../?view=pengajuan-inventory-barang&mod=add&id=9973843hupa&name=pegaaplication&inventoryBarang&status=1";
		    </script>
		<?php 
		} else { ?>
			<script type="text/javascript">
				window.location="../?view=pengajuan-inventory-barang&mod=add&id=9973843hupa&name=pegaaplication&inventoryBarang&status=4";
	        </script>	
		<?php
		}

	} else {
		echo '<script>window.history.back()</script>';
	}
?>