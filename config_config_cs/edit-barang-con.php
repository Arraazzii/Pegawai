<?php
	if(isset($_POST['simpan_edit'])) {

        include('../config_config_cs/koneksi-data-peg-lr-com.php');
        
		$no_inven = $_POST['noinven_edit'];
        $nama_barang = strtoupper($_POST['nama_barang_edit']);
        $serial_number = $_POST['serial_edit'];
        $tipe = $_POST['tipe_edit'];
        $deskripsi = $_POST['deskripsi_edit'];
        $lokasi = $_POST['lokasi_edit'];
        $pj = $_POST['pj_edit'];
        $ket = $_POST['ket_edit'];

		$q_edit_barang	= mysqli_query($connect, "UPDATE tbl_inventory SET nama_barang='$nama_barang', serial_number='$serial_number', tipe='$tipe', deskripsi='$deskripsi', lokasi='$lokasi', pj='$pj', ket='$ket' WHERE no_inventory = '$no_inven'") or die(mysqli_error($connect));
		if ($q_edit_barang) { ?>
			<script type="text/javascript">
				window.location="../?view=inventory-barang&mod=add&id=9973843hupa&name=pegaaplication&inventoryBarang&status=1";
		    </script>
		<?php 
		} else { ?>
			<script type="text/javascript">
				window.location="../?view=inventory-barang&mod=add&id=9973843hupa&name=pegaaplication&inventoryBarang&status=4";
	        </script>	
		<?php
		}

	} else {
		echo '<script>window.history.back()</script>';
	}
?>