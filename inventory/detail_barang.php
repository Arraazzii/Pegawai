
<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
<link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<link href="assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
<link href="assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet">

<?php
    $no  = isset($_GET['noinven']) ? $_GET['noinven'] : "";

    $query = mysqli_query($connect, "SELECT * FROM tbl_inventory WHERE no_inventory='$no'");
    $row = mysqli_fetch_array($query);

    $noinven = $row['no_inventory'];
    $nama_barang = $row['nama_barang'];
    $serial = $row['serial_number'];
    $tipe = $row['tipe'];
    $deskripsi = $row['deskripsi'];
    $lokasi = $row['lokasi'];
    $pj = $row['pj'];
    $ket = $row['ket'];

?>

<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Detail Barang</h5>
                            </div>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>No. Inventory</b>
                                        </td>
                                        <td>
                                            <?php echo $noinven;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Nama Barang</b>
                                        </td>
                                        <td>
                                            <?php echo $nama_barang;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Serial Number</b>
                                        </td>
                                        <td>
                                            <?php echo $serial;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Tipe</b>
                                        </td>
                                        <td>
                                            <?php echo $tipe;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Deskripsi</b>
                                        </td>
                                        <td>
                                            <?php echo $deskripsi;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Lokasi</b>
                                        </td>
                                        <td>
                                            <?php echo $lokasi;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Penanggung Jawab</b>
                                        </td>
                                        <td>
                                            <?php echo $pj;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Keterangan</b>
                                        </td>
                                        <td>
                                            <?php echo $ket;?>
                                        </td>
                                    </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>

<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="dist/js/custom.min.js"></script>
<!-- this page js -->
<script src="assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="assets/libs/magnific-popup/meg.init.js"></script>