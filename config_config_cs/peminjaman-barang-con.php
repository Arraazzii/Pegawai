<?php
    include('../config_config_cs/koneksi-data-peg-lr-com.php');
    if (isset($_POST['submit'])) {

        $no_inven = $_POST['no_inven'];
        $pj = $_POST['pj'];
        $nama_barang = $_POST['nama_barang'];
        
        $peminjaman = mysqli_query($connect, "UPDATE tbl_inventory SET stat='PendingPinjam1', user='ADMIN TEKNIS' WHERE no_inventory='$no_inven' ") or die(mysqli_error($connect));
        $peminjaman2 = mysqli_query($connect, "INSERT INTO tbl_peminjaman(no_inventory2, nama_barang2, pj2, stat2) VALUES ('$no_inven','$nama_barang','$pj','1')") or die(mysqli_error($connect));
        if ($peminjaman && $peminjaman2) { ?>
            <script type="text/javascript">
            window.location="../?view=peminjaman-barang&mod=add&id=9973843hupa&name=pegaaplication&peminjamanBarang&status=1";
            </script>
<?php 
        } else { ?>
            <script type="text/javascript">
            window.location="../?view=peminjaman-barang&mod=add&id=9973843hupa&name=pegaaplication&tambahBarang&status=3";
            </script>
<?php
        }
        
    }
?>