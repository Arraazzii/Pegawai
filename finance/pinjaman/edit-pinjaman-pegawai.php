<?php 
include ('config_config_cs/fungsi_no_otomatis_pinjaman.php');
?>

<?php
    $get_id        = isset($_GET['id']) ? $_GET['id'] : NULL;


    $data = mysqli_query($connect, "SELECT * FROM tbl_pinjaman JOIN tbl_pinjaman_detail ON tbl_pinjaman.kode_cicilan = tbl_pinjaman_detail.kode_cicilan JOIN tbl_pegawai ON tbl_pegawai.nik = tbl_pinjaman.nik WHERE tbl_pinjaman.id = '$get_id'");

    if ($data) {
        while($b = mysqli_fetch_array($data)) {   
            $id = $b['id'];

            $nik = $b['nik'];
            $jumlah_pinjaman = $b['besar_pinjaman'];
            $term = $b['term'];
            $dari = $b['dari'];
            $sampai = $b['sampai'];
            $keperluan = $b['keperluan'];
            $notes = $b['notes'];
            $kode_cicilan = $b['kode_cicilan'];

            $besaran = $b['besaran'];
            
        }

        $data1 = mysqli_query($connect, "SELECT keterangan FROM tbl_pinjaman_detail WHERE kode_cicilan = '$kode_cicilan' AND keterangan='LUNAS'");
        $ketemu = mysqli_num_rows($data1);
        $r      = mysqli_fetch_array($data1);
            
    } else {
        echo mysqli_error($connect);
    }
    
?>

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
                                <a href="?view=pinjaman&id=9973857hupa&name=pegaaplication&pinjaman">
                                    <h1 class="font-light text-white"><i class="mdi mdi-credit-card-plus"></i></h1>
                                    <h6 class="text-white">Pinjaman</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form class="form-horizontal children" method="POST" action="config_config_cs/edit-pinjaman-con.php">
                                <div class="card-body">
                                    <h4 class="card-title">Edit Pinjaman Pegawai</h4><hr>
                                    <div class="form-group col-md-12">
                                        <input type="hidden" name="kode_cicilan" value="<?= $kode_cicilan;?>">
                                        <input type="hidden" name="id" value="<?php echo $get_id;?>">
                                        <input type="hidden" name="term_lama" value="<?php echo $term;?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label">Nomor Induk Pegawai</label>
                                                <?php if ($ketemu > 0){ ?>
                                                    <input maxlength="100" name="nik" type="text" id="nik" required="required" class="form-control" placeholder="NIP Pegawai" value="<?= $nik; ?>" readonly/>
                                                </select>
                                                <?php } else { ?>
                                                    <input maxlength="100" name="nik" type="text" id="nik" required="required" class="form-control" placeholder="NIP Pegawai" value="<?= $nik; ?>" />
                                                <?php } ?>
                                                <span id="pesan"></span>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Jumlah Pinjaman</label>
                                                <?php if ($ketemu > 0){ ?>
                                                    <input type="number" name="jumlah_pinjaman" id="jumlah_pinjaman" class="form-control" value="<?= $jumlah_pinjaman; ?>" onkeyup="hitung();" required="" readonly/>
                                                </select>
                                                <?php } else { ?>
                                                    <input type="number" name="jumlah_pinjaman" id="jumlah_pinjaman" class="form-control" value="<?= $jumlah_pinjaman; ?>" onkeyup="hitung();" required="" />
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="row">    
                                            <div class="col-md-6">
                                                <label class="control-label">Term</label>
                                                <?php if ($ketemu > 0){ ?>
                                                    <select name="term" class="form-control" id="term" onchange="hitung();" readonly />
                                                    <option>Term</option>
                                                    <option value="2" <?php if($term == 2){ echo 'selected'; } ?>>2x</option>
                                                    <option value="3" <?php if($term == 3){ echo 'selected'; } ?>>3x</option>
                                                    <option value="4" <?php if($term == 4){ echo 'selected'; } ?>>4x</option>
                                                    <option value="5" <?php if($term == 5){ echo 'selected'; } ?>>5x</option>
                                                    <option value="6" <?php if($term == 6){ echo 'selected'; } ?>>6x</option>
                                                    <option value="12" <?php if($term == 12){ echo 'selected'; } ?>>12x</option>
                                                </select>
                                                <?php } else { ?>
                                                    <select name="term" class="form-control" id="term" onchange="hitung();">
                                                    <option>Term</option>
                                                    <option value="2" <?php if($term == 2){ echo 'selected'; } ?>>2x</option>
                                                    <option value="3" <?php if($term == 3){ echo 'selected'; } ?>>3x</option>
                                                    <option value="4" <?php if($term == 4){ echo 'selected'; } ?>>4x</option>
                                                    <option value="5" <?php if($term == 5){ echo 'selected'; } ?>>5x</option>
                                                    <option value="6" <?php if($term == 6){ echo 'selected'; } ?>>6x</option>
                                                    <option value="12" <?php if($term == 12){ echo 'selected'; } ?>>12x</option>
                                                </select>
                                                <?php } ?>
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
                                                    <input type="text" name="dari" class="form-control" id="datepicker-autoclose1" placeholder="yyyy-mm-dd" value="<?= $dari; ?>" required="">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Sampai</label>
                                                <div class="input-group">
                                                    <input type="text" name="sampai" class="form-control" id="datepicker-autoclose2" placeholder="yyyy-mm-dd" value="<?= $sampai; ?>" required="">
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
                                                <textarea class="form-control" name="keperluan"><?= $keperluan; ?></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Note</label>
                                                <textarea class="form-control" name="note"><?= $notes; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary" name="edit_pinjaman">Submit</button>
                                        <a href="javascript:history.back()"><button type="button" class="btn btn-warning">BACK</button></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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
                })

            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#nik').show(function(){
                $('#pesan').html('<img style="margin-left:10px; width:10px" src="loading.gif">');
                var nik = $(this).val();

                $.ajax({
                    type    : 'POST',
                    url     : 'proses.php',
                    data    : 'nik='+nik,
                    success : function(data){
                        $('#pesan').html(data);
                        hitung();
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
