<?php
    include('../config_config_cs/koneksi-data-peg-lr-com.php');
    if (isset($_POST['tambah'])) {

        $no_inven = $_POST['noinven'];
        $nama_barang = strtoupper($_POST['nama']);
        $serial_number = $_POST['serial'];
        $tipe = $_POST['tipe'];
        $deskripsi = $_POST['deskripsi'];
        $lokasi = $_POST['lokasi'];
        $pj = $_POST['pj'];
        $ket = $_POST['ket'];
        
        $query = mysqli_query($connect, "INSERT INTO tbl_inventory VALUES ('$no_inven','$nama_barang','$serial_number','$tipe','$deskripsi','$lokasi','$pj','$ket','Approved','')") or die(mysqli_error($connect));
        if ($query) { ?>
            <script type="text/javascript">
            window.location="../../kepegawaian?view=inventory-barang&mod=add&id=9973843hupa&name=pegaaplication&tambahBarang&status=1";
            </script>
<?php 
        } else { ?>
            <script type="text/javascript">
            window.location="../?view=inventory-barang&mod=add&id=9973843hupa&name=pegaaplication&tambahBarang&status=4";
            </script>
<?php
        }
        
    }
?>