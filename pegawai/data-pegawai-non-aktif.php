
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
    

            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-2">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <a href="?view=data-pegawai-non-aktif&id=9973850hupa&name=pegaaplication&pegawaiNonAktif">
                                    <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i></h1>
                                    <h6 class="text-white">Pegawai</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <a href="?view=data-pegawai-non-aktif&id=9973850hupa&name=pegaaplication&pegawaiNonAktif">
                                    <h1 class="font-light text-white"><i class="mdi mdi-refresh"></i></h1>
                                    <h6 class="text-white">Refresh</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                     <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <a href="?view=add-pegawai&id=9973865hupa&name=pegaaplication&tambahPegawai">
                                    <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                                    <h6 class="text-white">Tambah Pegawai</h6>
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
                                <h5 class="card-title">Data Pegawai Non Aktif</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>NIP</th>
                                                <th>Nama Pegawai</th>
                                                <th>Tempat, Tanggal Lahir</th>
                                                <th>No. Telp</th>
                                                <th>Jabatan</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>  
                                        <tbody>
                                            <?php
                                        
                                            $view = mysqli_query($connect, "SELECT * FROM tbl_pegawai JOIN tbl_kelahiran ON tbl_pegawai.id_lahir = tbl_kelahiran.id_lahir JOIN tbl_jabatan ON tbl_pegawai.id_jabatan = tbl_jabatan.id_jabatan JOIN tbl_data_jabatan ON tbl_jabatan.jabatan = tbl_data_jabatan.kode_jabatan JOIN tbl_no_telp ON tbl_pegawai.id_telp = tbl_no_telp.id_telp JOIN tbl_status ON tbl_status.id_status = tbl_pegawai.id_status WHERE tbl_status.status_peg != 'STP0003' AND tbl_pegawai.ket = 'Non Aktif'");
                                                    
                                            while ($row = mysqli_fetch_array($view)) {
                                                
                                                
                                            ?>
                                            <tr>
                                                <td><?php echo $row['nik'];?></td>
                                                <td><?php echo $row['nama'];?></td>
                                                <td><?php echo $row['tmpt_lahir'];?>, <?php echo tgl_indo($row['tgl_lahir']);?></td>
                                                <td><?php echo $row['hp'];?></td>
                                                <td><?php echo $row['nama_jabatan'];?></td>
                                                <td><?php echo $row['ket'];?></td>
                                                <td>
                                                    <a data-toggle="tooltip" title="Lihat Detail" href="?view=detail-pegawai&id=997386798hupa&name=pegaaplication&detailPegawai&nip=<?php echo $row['nik'];?>">
                                                        <span class="fa fa-list"></span>
                                                    </a> | <?php if ($row['ket'] == 'Aktif') { ?>
                                                        <a href=
                                                    "config_config_cs/non-aktif-pegawai-con.php?id=<?php echo $row['nik']; ?>&hal=data-pegawai-non-aktif" data-toggle="tooltip" title="Non Aktifkan" onclick='/return konfirmasi("
                                                    Menghapus data <?php echo $row['nik'];?>")'><span class='fa fa-times'></span></a>
                                                    <?php    
                                                    } else { ?>
                                                        <a href=
                                                    "config_config_cs/aktif-pegawai-con.php?id=<?php echo $row['nik']; ?>&hal=data-pegawai-non-aktif" data-toggle="tooltip" title="Aktifkan" onclick='/return konfirmasi("
                                                    Menghapus data <?php echo $row['nik'];?>")'><span class='fa fa-check'></span></a>
                                                    <?php
                                                    } ?> | 
                                                    <a href="?view=edit-pegawai&id=997386799hupa&name=pegaaplication&editPegawai&nip=<?php echo $row['nik'];?>" data-toggle="tooltip" title="Edit Data"><span class="fa fa-edit"></span></a> | 
                                                    <a href=
                                                    "config_config_cs/del-pegawai-con.php?id=<?php echo $row['nik']; ?>" data-toggle="tooltip" title="Hapus Data" onclick='/return konfirmasi("
                                                    Menghapus data <?php echo $row['nik'];?>")'><span class='fa fa-trash'></span></a>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
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
        $('#zero_config').DataTable();
    </script>
<?php include ('config_config_cs/fungsi_toast_notifikasi_tambah-pegawai.php'); ?>