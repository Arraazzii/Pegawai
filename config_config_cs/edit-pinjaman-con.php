<?php
	if(isset($_POST['edit_pinjaman'])) {

		include('../config_config_cs/koneksi-data-peg-lr-com.php');
		$id 	        = $_POST['id'];
		$term_lama      = $_POST['term_lama'];

		$nik            = $_POST['nik'];
        $pinjaman       = $_POST['jumlah_pinjaman'];
        $term           = $_POST['term'];
        $dari           = $_POST['dari'];
        $sampai         = $_POST['sampai'];
        $keperluan      = $_POST['keperluan'];
        $notes          = $_POST['note'];
        $kode_cicilan   = $_POST['kode_cicilan'];

        $cicilan        = $_POST['cicilan'];

        if ($term_lama == $term) {
        	$query = mysqli_query($connect, "UPDATE tbl_pinjaman SET nik='$nik', besar_pinjaman='$pinjaman', term='$term', dari='$dari', sampai='$sampai', keperluan='$keperluan', notes='$notes', kode_cicilan='$kode_cicilan' WHERE id='$id'") or die(mysqli_error($connect));
        	if ($query == TRUE) { 
            
	            ?>
	            <script type="text/javascript">
	                window.location="../?view=pinjaman&id=9973857hupa&name=pegaaplication&pinjaman&status=1";
	            </script>
			<?php 
	        } else { ?>
	            <script type="text/javascript">
	                window.location="../?view=pinjaman&id=9973857hupa&name=pegaaplication&pinjaman&status=4";
	            </script>
			<?php
	        }
        } else {
        	$query2 = mysqli_query($connect, "DELETE FROM tbl_pinjaman_detail WHERE kode_cicilan='$kode_cicilan'") or die(mysqli_error($connect));

        	$query = mysqli_query($connect, "UPDATE tbl_pinjaman SET nik='$nik', besar_pinjaman='$pinjaman', term='$term', dari='$dari', sampai='$sampai', keperluan='$keperluan', notes='$notes', kode_cicilan='$kode_cicilan' WHERE id='$id'") or die(mysqli_error($connect));

        	for ($i=1; $i <= $term ; $i++) { 
                $query1 = mysqli_query($connect, "INSERT INTO tbl_pinjaman_detail (kode_cicilan, besaran, keterangan) VALUES ('$kode_cicilan','$cicilan','BELUM LUNAS')") or die(mysqli_error($connect));
            }

            if ($query2 == TRUE && $query1 == TRUE && $query == TRUE) { 
            
	            ?>
	            <script type="text/javascript">
	                window.location="../?view=pinjaman&id=9973857hupa&name=pegaaplication&pinjaman&status=1";
	            </script>
			<?php 
	        } else { ?>
	            <script type="text/javascript">
	                window.location="../?view=pinjaman&id=9973857hupa&name=pegaaplication&pinjaman&status=4";
	            </script>
			<?php
	        }
        }

	} else {
		echo '<script>window.history.back()</script>';
	}
?>