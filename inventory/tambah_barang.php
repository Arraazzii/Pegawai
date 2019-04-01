<?php 
include ('config_config_cs/koneksi-data-peg-lr-com.php');
include ('config_config_cs/fungsi_no_otomatis_inventory.php');
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
                                <a href="?view=inventory-barang&id=9973861hupa&name=pegaaplication&Inventory">
                                    <h1 class="font-light text-white"><i class="fas fa-briefcase"></i></h1>
                                    <h6 class="text-white">Inventory</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form class="form-horizontal children" method="POST" action="config_config_cs/tambah_barang_con.php">
                                <input type="hidden" id="kodeElektronik" value="<?php echo $kodeElektronik;?>">
                                <input type="hidden" id="kodeNonElektronik" value="<?php echo $kodeNonElektronik;?>">
                                <input type="hidden" id="kodeIndosat" value="<?php echo $kodeIndosat;?>">
                                <div class="card-body">
                                    <h4 class="card-title">Deskripsi Barang</h4><hr>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-left control-label col-form-label">Nomor Inventory</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nomor" readonly name="noinven" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-left control-label col-form-label">Nama Barang</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" placeholder="Nama Barang" name="nama">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-left control-label col-form-label">Serial Number</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" placeholder="Serial Number" name="serial">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-left control-label col-form-label">Tipe</label>
                                        <div class="col-sm-9">
                                            <select name="tipe" class="form-control" id="type">
                                                <option value="">Pilih Tipe</option>
                                                <option value="Elektronik">Elektronik</option>
                                                <option value="Non Elektronik">Non Elektronik</option>
                                                <option value="Indosat">Indosat</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-left control-label col-form-label">Deskripsi</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="deskripsi"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-left control-label col-form-label">Lokasi</label>
                                        <div class="col-sm-9">
                                            <select name="lokasi" class="form-control">
                                                <option>Pilih Lokasi</option>
                                                <?php
                                                    $q = mysqli_query($connect, "SELECT * from tbl_data_lokasi");

                                                    while($a = mysqli_fetch_array($q))
                                                    {
                                                        echo "<option value='$a[1]'>$a[1]</option>";
                                                    }
                                                
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-left control-label col-form-label">Penanggung Jawab</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" placeholder="Penanggung Jawab" name="pj">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-left control-label col-form-label">Keterangan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" placeholder="Keterangan Barang" name="ket">
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


            <script type="text/javascript">
                $(document).ready(function(){
                    $("select#type").change(function(){
                        var select = $(this).children("option:selected").val();
                        if (select == "Elektronik"){
                            var count = document.getElementById('kodeElektronik').value;
                        } else if (select == "Non Elektronik"){
                            var count = document.getElementById('kodeNonElektronik').value;
                        } else if (select == "Indosat"){
                            var count = document.getElementById('kodeIndosat').value;
                        }
                        document.getElementById('nomor').value = count;
                    });
                });
            </script>

<?php include ('config_config_cs/fungsi_toast_notifikasi_tambah_barang.php'); ?>
