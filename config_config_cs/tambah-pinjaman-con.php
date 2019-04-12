<?php
    include('../config_config_cs/koneksi-data-peg-lr-com.php');
    if (isset($_POST['tambah'])) {

        $nik            = $_POST['nik'];
        $pinjaman       = $_POST['jumlah_pinjaman'];
        $term           = $_POST['term'];
        $dari           = $_POST['dari'];
        $sampai         = $_POST['sampai'];
        $keperluan      = $_POST['keperluan'];
        $notes          = $_POST['note'];
        $kode_cicilan   = $_POST['kode_cicilan'];

        $cicilan        = $_POST['cicilan'];
        
        $query = mysqli_query($connect, "INSERT INTO tbl_pinjaman (nik, besar_pinjaman, term, dari, sampai, keperluan, notes, kode_cicilan, status, waktu_input) VALUES ('$nik','$pinjaman','$term','$dari','$sampai','$keperluan','$notes','$kode_cicilan','APPROVED', NOW() )") or die(mysqli_error($connect));
        if ($query == TRUE) { 
            for ($i=1; $i <= $term ; $i++) { 
                $query1 = mysqli_query($connect, "INSERT INTO tbl_pinjaman_detail (kode_cicilan, besaran, keterangan) VALUES ('$kode_cicilan','$cicilan','BELUM LUNAS')") or die(mysqli_error($connect));
            }
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
?>