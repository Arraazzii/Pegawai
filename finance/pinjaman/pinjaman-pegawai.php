
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
    

            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                     <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <a href="?view=tambah-pinjaman-pegawai&id=9973983hupa&name=pegaaplication&tambahPinjamanPegawai">
                                    <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                                    <h6 class="text-white">Tambah</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Pinjaman Pegawai</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pegawai</th>
                                                <th>Besar Pinjaman</th>
                                                <th>Term</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>  
                                        <tbody>
                                            <?php
                                        
                                            $view = mysqli_query($connect, "SELECT * FROM tbl_pinjaman JOIN tbl_pegawai ON tbl_pegawai.nik = tbl_pinjaman.nik ");
                                            $no =1;
                                            while ($row = mysqli_fetch_array($view)) {
                                                
                                                
                                            ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td><?php echo $row['nik'];?> - <?php echo $row['nama'];?></td>
                                                <td><?php echo $row['besar_pinjaman'];?>x</td>
                                                <td><?php echo 'x'.$row['term'];?></td>
                                                <td>
                                                    <?php if ($row['status'] == 'APPROVED'): ?>
                                                        <span class="badge badge-success"> APPROVED </span>
                                                    <?php elseif ($row['status'] == 'PENDING'): ?>
                                                        <span class="badge badge-warning"> PENDING </span>
                                                    <?php else: ?>
                                                        <span class="badge badge-danger"> REJECTED </span>
                                                    <?php endif ?>
                                                        
                                                </td>
                                                <td><a title="Lihat Detail" data-target="#myModalDetail<?= $row['id']; ?>" data-toggle="modal" href="#<?= $row['id']; ?>">
                                                    <span class="fa fa-list"></span>
                                                </a> |
                                                <a href="?view=edit-pinjaman&id=997386798hupa&name=pegaaplication&editPinjamanPegawai&id=<?= $row['id']; ?>" data-toggle="tooltip" title="Edit Data">
                                                    <span class="fa fa-edit"></span>
                                                </a> |
                                                <a href="config_config_cs/del-pinjaman-pegawai-con.php?id=<?= $row['id']; ?>" data-toggle="tooltip" title="Hapus Data" onClick="return confirm('Anda Yakin Ingin Menghapus Data <?php echo $row['nama'];?> ?')">
                                                    <span class="fa fa-trash"></span>
                                                </a>
                                                </td>
                                            </tr>
                                            <?php
                                                $no++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->

<?php
                                        
    $view = mysqli_query($connect, "SELECT * FROM tbl_pinjaman JOIN tbl_pegawai ON tbl_pegawai.nik = tbl_pinjaman.nik ");
    $no =1;
    while ($row = mysqli_fetch_array($view)) {
                                                
?>


<div class="modal fade" id="myModalDetail<?php echo $row['id']; ?>" tabindex="-1" role="modal" aria-labelledby="exampleModalLabel" aria-hidden="true ">
    <div class="modal-dialog modal-lg" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Pinjaman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                                        <div class="row">
                                            <div class="table-responsive">
                                                <div class="col-md-12">
                                                    <table class="table">
                                                        <tr>
                                                            <th style="width:30%">Nama Pegawai</th>
                                                            <td><?= $row['nama']; ?></td><td></td>
                                                            <th style="width:30%">Besar Pinjaman</th>
                                                            <td><?php echo 'Rp. '.number_format($row['besar_pinjaman'], 0, ".", ".");?></td>
                                                        </tr>
                                                        <tr>
                                                            <th style="width:30%">Dari</th>
                                                            <td><?= tgl_indo($row['dari']); ?></td><td></td>
                                                            <th style="width:30%">Sampai</th>
                                                            <td><?= tgl_indo($row['sampai']); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th style="width:30%">Term</th>
                                                            <td><?= 'x'.$row['term']; ?></td><td></td>
                                                            <th style="width:30%">Status</th>
                                                            <td>
                                                                <?php if ($row['status'] == 'APPROVED'): ?>
                                                                    <span class="badge badge-success"> APPROVED </span>
                                                                <?php elseif ($row['status'] == 'PENDING'): ?>
                                                                    <span class="badge badge-warning"> PENDING </span>
                                                                <?php else: ?>
                                                                    <span class="badge badge-danger"> REJECTED </span>
                                                                <?php endif ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th style="width:30%">Keperluan</th>
                                                            <td><?= $row['keperluan']; ?></td><td></td>
                                                            <th style="width:30%">Notes</th>
                                                            <td><?= $row['notes']; ?></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>

                <div class="col-md-12">
                    <h4>
                        <center>Detail Cicilan</center>
                    </h4><br/>
                </div> 

                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>No.</th>
                                <th>Besar Cicilan</th>
                                <th>Tgl Bayar</th>
                                <th>Keterangan</th>
                            </tr>
                            <?php
                                $kode_cicilan = $row['kode_cicilan'];

                                $sql = mysqli_query($connect, "SELECT * FROM tbl_pinjaman_detail WHERE kode_cicilan='$kode_cicilan' ORDER BY keterangan DESC") or die(mysqli_error($connect));
                                
                                $no =1;
                                while ($row2 = mysqli_fetch_array($sql)) {
                            ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?php echo 'Rp. '.number_format($row2['besaran'], 0, ".", "."); ?></td>
                                <td><?= tgl_indo($row2['tgl_bayar']); ?></td>
                                <td><?= $row2['keterangan']; ?></td>
                            </tr>

                            <?php 
                                    $no++;
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
        $no++;
    }
?>

                        
    <!-- All Jquery -->
    <!-- ============================================================== -->
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
    <script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>

    <script src="assets/libs/toastr/build/toastr.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable({
            "bProcessing": true,
            "bServerSide": true,
            "ajax": "serverside/response.php?view=pinjaman-pegawai",
        });
    </script>
<?php include ('config_config_cs/fungsi_toast_notifikasi_tambah_barang.php'); ?>