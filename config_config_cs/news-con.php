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
        $nama 			= $nip.'-foto-profil';
        $id_file     = $_POST['id_dokumen'];
        $tgl            = date("Y-m-d");

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        	if ($ukuran <= 5000000000) {
        		$lokasi = '../_file/'.$nama.'.'.$ekstensi;
        		move_uploaded_file($file_tmp, $lokasi);
        		$lokasi1 = '_file/'.$nama.'.'.$ekstensi;

        		$q_upload_foto	= mysqli_query($connect, "UPDATE tbl_file SET foto='$lokasi1' WHERE id_file = '$id_file'") or die(mysqli_error($connect));
				if ($q_upload_foto) { ?>
					<script type="text/javascript">
						window.location="../?view=pengumuman&id=9973861hupa&name=pegaaplication&pengumuman&status=1";
				    </script>
				<?php 
				} elseif ($ukuran > 5000000000) { ?>
					<script type="text/javascript">
						window.location="../?view=pengumuman&id=9973861hupa&name=pegaaplication&pengumuman&status=3";
			    	</script>
				<?php	
				} else { ?>
					<script type="text/javascript">
						window.location="../?view=pengumuman&id=9973861hupa&name=pegaaplication&pengumuman&status=2";
			        </script>	
				<?php
				}
		    } else { ?>
		    	<script type="text/javascript">
					window.location="../?view=pengumuman&id=9973861hupa&name=pegaaplication&pengumuman&status=3";
			    </script>
		<?php	
		    }
        } else { ?>
        	<script type="text/javascript">
				window.location="../?view=pengumuman&id=9973861hupa&name=pegaaplication&pengumuman&status=4";
			</script>
	    <?php
	        }

		} else {
			echo '<script>window.history.back()</script>';
		}
	}
	
?>