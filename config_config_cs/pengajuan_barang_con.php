<?php
    include('../config_config_cs/koneksi-data-peg-lr-com.php');
    if (isset($_POST['submit'])) {

        $no_inven = $_POST['noinven'];
        $nama_barang = strtoupper($_POST['nama_barang']);
        $tipe = $_POST['tipe'];
        $harga = $_POST['harga_barang'];
        $lokasi = $_POST['lokasi_beli'];
        $pj = $_POST['pj'];
        
        $query1 = mysqli_query($connect, "INSERT INTO tbl_inventory(no_inventory, nama_barang, tipe, pj, stat, user) VALUES ('$no_inven','$nama_barang', '$tipe', '$pj', 'Pending1','ADMIN TEKNIS')") or die(mysqli_error($connect));
        $query2 = mysqli_query($connect, "INSERT INTO tbl_harga_barang VALUES ('$no_inven', '$harga', '$lokasi')") or die(mysqli_error($connect));
        if ($query1 && $query2) { ?>
            <script type="text/javascript">
            window.location="../?view=pengajuan-inventory-barang&mod=add&id=9973843hupa&name=pegaaplication&tambahBarang&status=1";
            </script>
<?php 
        } else { ?>
            <script type="text/javascript">
            window.location="../?view=pengajuan-inventory-barang&mod=add&id=9973843hupa&name=pegaaplication&tambahBarang&status=4";
            </script>
<?php
        }
        
    }
?>