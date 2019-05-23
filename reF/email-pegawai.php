    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/quill/dist/quill.snow.css">

    <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">

    <link href="assets/libs/toastr/build/toastr.min.css" rel="stylesheet">

    <link href="dist/css/style.min.css" rel="stylesheet">
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->                    
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="&mod=add" data-toggle="modal" data-target="#Modal1">
                            <div class="card card-hover">
                                <div class="box bg-warning text-center">
                                        <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                                        <h6 class="text-white">Tambah</h6>
                                </div>
                            </div>
                        </a>
                        <!--modal-->
                            <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
                                <div class="modal-dialog" role="document ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Email Pegawai</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true ">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" action="config_config_cs/email-pegawai-con.php" method="post" id="tambah">
                                                <div class="form-group">
                                                    <div class="form-group row">
                                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">NIP Pegawai</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="nip_pegawai" class="form-control" id="fname" placeholder="NIP Pegawai">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Email Pegawai</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="email_pegawai" class="form-control" id="lname" placeholder="Email Pegawai">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Domain</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="domain" class="form-control" id="lname" placeholder="Domain" value="@lrcom.co.id" readonly="">
                                                        </div>
                                                    </div>
                                                    <div class="border-top">
                                                        <div class="card-body">
                                                            <input type="submit" name="tambah" class="btn btn-primary" id="submit" value="TAMBAH">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Data Email Pegawai</h5>
                            </div>
                            <table id="zero_config" class="table table-striped table-bordered">
                                  <thead>
                                    <tr>
                                      <th scope="col" width="7%">No.</th>
                                      <th scope="col">NIP Pegawai</th>
                                      <th scope="col">Email Pegawai</th>
                                      <th scope="col">Aksi</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                        $q_bagian   = mysqli_query($connect, "SELECT * FROM tbl_data_email_pegawai ORDER BY nip_pegawai ASC") or die (mysqli_error($connect));
                                        $j_data     = mysqli_num_rows($q_bagian);

                                        if ($j_data == 0) {
                                            echo "<tr><td id='tengah' colspan='4' align='center'>-- Tidak Ada Data --</td></tr>";
                                        } else {
                                            $no = 1;
                                            while ($a_bag = mysqli_fetch_array($q_bagian)) { ?>

                                                <td id='tengah'><?php echo $no; ?></td>
                                                <td><?php echo $a_bag[0]; ?></td>
                                                <td><?php echo $a_bag[1]; ?><?php echo $a_bag[2]; ?></td>  
                                                <td id='tengah'>

                                                <a href="#<?php echo $a_bag[0];?>" data-toggle="modal" title="Edit Data" data-target="#myModal<?php echo $a_bag[0];?>"><span class="fa fa-edit"></span></a> |
                                                <a href=
                                                "config_config_cs/del-email-pegawai-con.php?id=<?php echo $a_bag[0]; ?>" title="Hapus Data" onClick="return confirm('Anda Yakin Ingin Menghapus Data <?php echo $a_bag[1].$a_bag[2];?> ?')"><span class='fa fa-trash'></span></a>
                                                </tr>

                                                <!--modal-->
                            <div class="modal fade" id="myModal<?php echo $a_bag[0]; ?>" tabindex="-1" role="modal" aria-labelledby="exampleModalLabel" aria-hidden="true ">
                                <div class="modal-dialog" role="document ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Email Pegawai</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true ">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" action="config_config_cs/edit-email-pegawai-con.php" method="post">
                                                <div class="form-group">
                                                    <div class="form-group row">
                                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">NIP Pegawai</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="nip_pegawai_edit" class="form-control" id="fname" placeholder="NIP Pegawai" value="<?php echo $a_bag[0]; ?>" required=""readonly/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Email Pegawai</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="email_pegawai_edit" class="form-control" id="lname" placeholder="Email Pegawai" value="<?php echo $a_bag[1]; ?>"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Domain</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="domain_edit" class="form-control" id="lname" placeholder="Domain" value="<?php echo $a_bag[2]; ?>" readonly="">
                                                        </div>
                                                    </div>
                                                    <div class="border-top">
                                                        <div class="card-body">
                                                            <input type="submit" name="simpan_edit" class="btn btn-primary" value="SIMPAN">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                                            <?php 
                                                $no++;
                                            }
                                        }
                                    ?>
                                  </tbody>
                            </table>
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
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
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
    <!-- This Page JS -->
    <script src="assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="dist/js/pages/mask/mask.init.js"></script>
    <script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/libs/quill/dist/quill.min.js"></script>
    <script src="dist/js/growl-bootstrap/jquery.bootstrap-growl.js"></script>

    <!-- this page js -->
    <script src="assets/libs/toastr/build/toastr.min.js"></script>

    <!-- this page js -->
    <script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
    <?php include ('config_config_cs/fungsi_toast_notifikasi_email-pegawai.php'); ?>