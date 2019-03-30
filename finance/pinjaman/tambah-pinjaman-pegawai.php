    <link rel="stylesheet" type="text/css" href="assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/quill/dist/quill.snow.css">

    <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">

    <link href="assets/libs/toastr/build/toastr.min.css" rel="stylesheet">

    <link href="dist/css/style.min.css" rel="stylesheet">
    

            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-2">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <a href="?view=gaji-pegawai&id=9973861hupa&name=pegaaplication&gajiPegawai">
                                    <h1 class="font-light text-white"><i class="mdi mdi-credit-card"></i></h1>
                                    <h6 class="text-white">Gaji</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <a href="">
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
                                <a href="?view=tambah-gaji-pegawai&id=9973865hupa&name=pegaaplication&tambahGajiPegawai">
                                    <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                                    <h6 class="text-white">Tambah</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form class="form-horizontal children" method="POST" action="config_config_cs/tambah-gaji-con.php">
                                <div class="card-body">
                                    <h4 class="card-title">Tambah Pinjaman Pegawai</h4><hr>
                                    <div class="form-group col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label">Nomor Induk Pegawai</label>
                                                <input maxlength="100" name="nik" type="text" id="nik" required="required" class="form-control" placeholder="NIP Pegawai"/>
                                                <span id="pesan"></span>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Jumlah Pinjaman</label>
                                                <input type="number" name="jumlah_pinjaman" id="jumlah_pinjaman" class="form-control" onkeyup="hitung();" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="row">    
                                            <div class="col-md-6">
                                                <label class="control-label">Term</label>
                                                <select name="term" class="form-control" id="term" onchange="hitung();">
                                                    <option>Term</option>
                                                    <option value="2">2x</option>
                                                    <option value="3">3x</option>
                                                    <option value="4">4x</option>
                                                    <option value="5">5x</option>
                                                    <option value="6">6x</option>
                                                    <option value="12">12x</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="name">Total Cicilan /bln</label>
                                                <input type="number" name="cicilan" id="cicilan" class="form-control" onkeyup="hitung();" value="0" required="" readonly="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="row">    
                                            <div class="col-md-6">
                                                <label class="control-label">Dari</label>
                                                <div class="input-group">
                                                    <input type="text" name="dari" class="form-control" id="datepicker-autoclose1" placeholder="yyyy-mm-dd" required="">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Sampai</label>
                                                <div class="input-group">
                                                    <input type="text" name="sampai" class="form-control" id="datepicker-autoclose2" placeholder="yyyy-mm-dd" required="">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="row">    
                                            <div class="col-md-6">
                                                <label class="control-label">Keperluan</label>
                                                <textarea class="form-control" name="keperluan"></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Note</label>
                                                <textarea class="form-control" name="note"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary" name="tambah">Submit</button>
                                        <a href="javascript:history.back()"><button type="button" class="btn btn-warning">BACK</button></a>
                                    </div>
                                </div>
                            </form>
                        </div>
    
    
    <!-- Bootstrap tether Core JavaScript -->
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
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose1').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
            todayHighlight: true
        });
        jQuery('#datepicker-autoclose2').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
            todayHighlight: true
        });
    </script>   
    <script type="text/javascript">
        $(document).ready(function(){
            $('#nik').blur(function(){
                $('#pesan').html('<img style="margin-left:10px; width:10px" src="loading.gif">');
                var nik = $(this).val();

                $.ajax({
                    type    : 'POST',
                    url     : 'proses.php',
                    data    : 'nik='+nik,
                    success : function(data){
                        $('#pesan').html(data);
                    }
                })

            });
        });
    </script>
    <script type="text/javascript">
        function hitung()
        {
            var pinjaman  = document.getElementById('jumlah_pinjaman').value;
            var term      = document.getElementById('term').value;

            var cicilan      = (pinjaman / term);
            hasil = cicilan.toFixed(0);

            if (!isNaN(cicilan)) {
                document.getElementById('cicilan').value = hasil;   
            }
            
        }
    </script>

<?php include ('config_config_cs/fungsi_toast_notifikasi_tambah_barang.php'); ?>
