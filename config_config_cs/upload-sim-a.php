<?php
	if(isset($_GET['n'])) {

		if(isset($_POST['tambah'])) {

		include('../config_config_cs/koneksi-data-peg-lr-com.php');

		$file  = $_GET['n'];

		$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
		$nama_file = $_FILES['file']['name'];
		$x = explode('.', $nama_file);
		$ekstensi = strtolower(end($x));
		$ukuran	= $_FILES['file']['size'];
		$file_tmp = $_FILES['file']['tmp_name'];

        $nip	        = $_POST['nip'];
        $nama 			= $nip.'-sim-a';
        $id_file     = $_POST['id_file'];
        $tgl            = date("Y-m-d");

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        	if ($ukuran <= 5000000000) {
        		$lokasi = '../_file/'.$nama.'.'.$ekstensi;
        		move_uploaded_file($file_tmp, $lokasi);
        		$lokasi1 = '_file/'.$nama.'.'.$ekstensi;

        		$q_upload_foto	= mysqli_query($connect, "UPDATE tbl_file SET sim_a='$lokasi1' WHERE id_file = '$id_file'") or die(mysqli_error($connect));
				if ($q_upload_foto) { ?>
					<script type="text/javascript">
						window.location="../?view=profil-pribadi&id=997386739hupa&name=pegaaplication&detailPegawai&nip=<?php echo $nip; ?>&status=111";
				    </script>
				<?php 
				} elseif ($ukuran > 5000000000) { ?>
					<script type="text/javascript">
						window.location="../?view=profil-pribadi&id=997386739hupa&name=pegaaplication&detailPegawai&nip=<?php echo $nip; ?>&status=333";
			    	</script>
				<?php	
				} else { ?>
					<script type="text/javascript">
						window.location="../?view=profil-pribadi&id=997386739hupa&name=pegaaplication&detailPegawai&nip=<?php echo $nip; ?>&status=222";
			        </script>	
				<?php
				}
		    } else { ?>
		    	<script type="text/javascript">
					window.location="../?view=profil-pribadi&id=997386739hupa&name=pegaaplication&detailPegawai&nip=<?php echo $nip; ?>&status=333";
			    </script>
		<?php	
		    }
        } else { ?>
        	<script type="text/javascript">
				window.location="../?view=profil-pribadi&id=997386739hupa&name=pegaaplication&detailPegawai&nip=<?php echo $nip; ?>&status=444";
			</script>
	    <?php
	        }

		} else {
			echo '<script>window.history.back()</script>';
		}
	}
	
?>