<?php
    $get_id        = isset($_GET['id']) ? $_GET['id'] : NULL;


    $data = mysqli_query($connect, "SELECT * FROM gaji JOIN tbl_pegawai ON tbl_pegawai.nik = gaji.nik JOIN tbl_data_email_pegawai ON tbl_data_email_pegawai.nip_pegawai = gaji.nik JOIN  tbl_jabatan ON tbl_pegawai.id_jabatan = tbl_jabatan.id_jabatan JOIN tbl_data_jabatan ON tbl_jabatan.jabatan = tbl_data_jabatan.kode_jabatan JOIN tbl_pinjaman_detail ON gaji.pinjaman = tbl_pinjaman_detail.id WHERE gaji.id = '$get_id'");

    if ($data) {
        while($b = mysqli_fetch_array($data)) {   
            $nik = $b['nik'];
            $nama = $b['nama'];
            $email = $b['email_pegawai'].$b['domain'];
            $periode = bln_indo($b['tgl']);
            $tgl = $b['tgl'];
            $jabatan = $b['nama_jabatan'];
            $gaji = $b['gaji'];
            $tunjangan = $b['tunjangan'];
            $insentiv = $b['insentiv'];
            $thr = $b['thr'];
            $bpjskes = $b['plus_kes'];
            $bpjstk = $b['plus_tenaga'];
            $bruto = $b['gaji_bruto'];
            $pph21 = $b['pajak'];
            $pbpjskes = $b['min_kes'];
            $pbpjstk = $b['min_tenaga'];
            $id_pinjaman = $b['pinjaman'];
            $pinjaman = $b['besaran'];
            $bersih = $b['gaji_bersih'];
            $note = $b['note'];
        }
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
    

            <div class="container-fluid" onload="">
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
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form class="form-horizontal children" method="POST" action="config_config_cs/edit-gaji-con.php" name="edit">
                                <div class="card-body">
                                    <input type="hidden" name="id" value="<?= $get_id; ?>">
                                    <input type="hidden" name="id_pinjaman_baru" id="id_pinjaman" value="<?= $id_pinjaman ?>">
                                    <input type="hidden" name="id_pinjaman" value="<?= $id_pinjaman ?>">
                                    <h4 class="card-title">Edit Gaji Pegawai</h4><hr>
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Nomor Induk Pegawai</label>
                                        <input maxlength="100" name="nik" type="text" id="nik" required="required" class="form-control" value="<?= $nik; ?>" placeholder="NIP Pegawai"/>
                                        <span id="pesan"></span>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="row">    
                                            <div class="col-md-6">
                                                <label class="control-label">Gaji Pokok</label>
                                                <input type="number" name="gapok" id="gapok" class="form-control" onkeyup="hitung();" onclick="hitung();" required="" value="<?= $gaji; ?>" autofocus onfocus="hitung();"/>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="name">Tunjangan</label>
                                                <input type="number" name="tunjangan" id="tunjangan" class="form-control" onkeyup="hitung();" value="<?= $tunjangan; ?>" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="row">    
                                            <div class="col-md-6">
                                                <label class="control-label">Insentiv</label>
                                                <input type="number" name="insentiv" id="insentiv" class="form-control" onkeyup="hitung();" value="<?= $insentiv; ?>" required="" />
                                            </div>
                                            <div class="col-md-6">
                                                <label for="name">Tunjangan Hari Raya(THR)</label>
                                                <input type="number" name="thr" id="thr" class="form-control" onkeyup="hitung();" value="<?= $thr; ?>" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="row">    
                                            <div class="col-md-6">
                                                <label class="control-label">BPJS Kesehatan (4%)</label>
                                                <div class="row">    
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="customControlValidation1" name="first" value="Ya BPJS Kes" required="">
                                                            <label class="custom-control-label" for="customControlValidation1">YA</label>
                                                        </div>
                                                        <input type="hidden" name="ya-bpjs-kes" id="ya-bpjs-kes" class="form-control ya-bpjs-kes"/>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="first" value="Tidak BPJS Kes" required="">
                                                            <label class="custom-control-label" for="customControlValidation2">TIDAK</label>
                                                        </div>
                                                        <input type="hidden" name="tidak-bpjs-kes" id="tidak-bpjs-kes" class="form-control tidak-bpjs-kes" value="0" />
                                                    </div>
                                                </div>
                                                <input type="text" name="bpjs-kes" id="bpjs-kes" class="form-control" onchange="hitung();" value="<?= $bpjskes; ?>" readonly="" required="" />
                                            </div>
                                            <div class="col-md-6">
                                                <label for="name">BPJS Tenaga Kerja (6.24%)</label>
                                                <div class="row">    
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="customControlValidation3" name="second" value="Ya BPJSTK" required="">
                                                            <label class="custom-control-label" for="customControlValidation3">YA</label>
                                                        </div>
                                                        <input type="hidden" name="ya-bpjs-tk" id="ya-bpjs-tk" class="form-control ya-bpjs-tk" value="" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="customControlValidation4" name="second" value="Tidak BPJSTK" required="">
                                                            <label class="custom-control-label" for="customControlValidation4">TIDAK</label>
                                                        </div>
                                                        <input type="hidden" name="tidak-bpjs-tk" id="tidak-bpjs-tk" class="form-control tidak-bpjs-tk" value="0" />
                                                    </div>
                                                </div>
                                                <input type="text" name="bpjs-tk" id="bpjs-tk" class="form-control" onkeyup="hitung();" value="<?= $bpjstk; ?>" readonly="" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="control-label">Gaji Bruto</label>
                                        <input maxlength="100" name="gaji_bruto" id="gaji_bruto" type="text" required="required" readonly="readonly" class="form-control" placeholder="Gaji Bruto" onkeyup="hitung();" value="<?= $bruto; ?>" />
                                    </div>
                                    <div class="border-top">
                                        <br/>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="row">    
                                            <div class="col-md-6">
                                                <label class="control-label">Pajak PPH21</label>
                                                <input type="number" name="pph21" id="pph21" class="form-control" onkeyup="hitung();" value="<?= $pph21; ?>" required="" />
                                            </div>
                                            <div class="col-md-6">
                                                <label for="name">Pinjaman Karyawan</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <select name="pilih" class="form-control" id="list" required="" onchange="hitung();">
                                                            <option>Pinjaman</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="number" name="pinjaman" id="pinjaman" class="form-control" onkeyup="hitung();" oninput="hitung();"  value="<?= $pinjaman; ?>" required="" readonly="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="row">    
                                            <div class="col-md-6">
                                                <label class="control-label">Potongan BPJS Kesehatan (1%)</label>
                                                <div class="row">    
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="customControlValidation5" name="third" value="Ya Potongan BPJS Kes" required="">
                                                            <label class="custom-control-label" for="customControlValidation5">YA</label>
                                                        </div>
                                                        <input type="hidden" name="ya-p-bpjs-kes" id="ya-p-bpjs-kes" class="form-control ya-p-bpjs-kes" value=""/>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="customControlValidation6" name="third" value="Tidak Potongan BPJS Kes" required="">
                                                            <label class="custom-control-label" for="customControlValidation6">TIDAK</label>
                                                        </div>
                                                        <input type="hidden" name="tidak-p-bpjs-kes" id="tidak-p-bpjs-kes" class="form-control tidak-p-bpjs-kes" value="0" />
                                                    </div>
                                                </div>
                                                <input type="text" name="p-bpjs-kes" id="p-bpjs-kes" class="form-control" onkeyup="hitung();" value="<?= $pbpjskes; ?>" readonly="" required="" />
                                            </div>
                                            <div class="col-md-6">
                                                <label for="name">Potongan BPJS Tenaga Kerja (3%)</label>
                                                <div class="row">    
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="customControlValidation7" name="fourth" value="Ya Potongan BPJSTK" required="">
                                                            <label class="custom-control-label" for="customControlValidation7">YA</label>
                                                        </div>
                                                        <input type="hidden" name="ya-p-bpjs-tk" id="ya-p-bpjs-tk" class="form-control ya-p-bpjs-tk" value="" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="customControlValidation8" name="fourth" value="Tidak Potongan BPJSTK" required="">
                                                            <label class="custom-control-label" for="customControlValidation8">TIDAK</label>
                                                        </div>
                                                        <input type="hidden" name="tidak-p-bpjs-tk" id="tidak-p-bpjs-tk" class="form-control tidak-p-bpjs-tk" value="0" />
                                                    </div>
                                                </div>
                                                <input type="text" name="p-bpjs-tk" id="p-bpjs-tk" class="form-control" onkeyup="hitung();" value="<?= $pbpjstk; ?>" readonly="" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="control-label">Gaji Bersih</label>
                                        <input maxlength="100" name="gaji_bersih" id="gaji_bersih" type="text" required="required" class="form-control" readonly="" value="<?= $bersih; ?>" placeholder="Gaji Bersih"/>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="control-label">Tanggal</label>
                                        <div class="input-group">
                                            <input type="text" name="tanggal" class="form-control" id="datepicker-autoclose" placeholder="yyyy-mm-dd" value="<?= $tgl; ?>" required="">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary" name="edit_gaji">Submit</button>
                                        <a href="javascript:history.back()"><button type="button" class="btn btn-warning">BACK</button>
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
        jQuery('#datepicker-autoclose').datepicker({
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
                var id_pinjaman = $('#id_pinjaman').val();

                $.ajax({
                    type    : 'POST',
                    url     : 'proses.php',
                    data    : 'nik='+nik,
                    success : function(data){
                        $('#pesan').html(data);
                    }
                })

                $.ajax({
                    type    : 'POST',
                    url     : 'proses-edit-cicilan.php',
                    data    : {
                        nik:nik,
                        id_pinjaman:id_pinjaman
                    },
                    success : function(data){
                        $('#list').html(data);
                    }
                })
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#nik').show(function(){
                $('#pesan').html('<img style="margin-left:10px; width:10px" src="loading.gif">');
                var nik = $(this).val();
                var id_pinjaman = $('#id_pinjaman').val();

                $.ajax({
                    type    : 'POST',
                    url     : 'proses.php',
                    data    : 'nik='+nik,
                    success : function(data){
                        $('#pesan').html(data);
                    }
                })

                $.ajax({
                    type    : 'POST',
                    url     : 'proses-edit-cicilan.php',
                    data    : {
                        nik:nik,
                        id_pinjaman:id_pinjaman
                    },
                    success : function(data){
                        $('#list').html(data);
                    }
                })

            });
        });
    </script>
    <script type="text/javascript">
        function id_pinjaman(){
            var list = document.getElementById('list').value;

            document.getElementById('id_pinjaman').value = list;
        }

        $(document).ready(function(){
            $('#list').change(function(){
                var id = $(this).val();
                id_pinjaman();

                $.ajax({
                    type    : 'POST',
                    url     : 'proses-get-cicilan.php',
                    data    : 'id='+id,
                    success : function(data){
                        $('#pinjaman').val(data);
                        hitung();
                    }
                })

            });
        });
    </script>
    <script type="text/javascript">
        function hitung()
        {
            var gaji_pokok  = document.getElementById('gapok').value;
            var tunjangan   = document.getElementById('tunjangan').value;
            var insentiv    = document.getElementById('insentiv').value;
            var thr         = document.getElementById('thr').value;

            var bpjs_kes    = document.getElementById('bpjs-kes').value;
            var bpjs_tk     = document.getElementById('bpjs-tk').value;
            var p_bpjs_kes  = document.getElementById('p-bpjs-kes').value;
            var p_bpjs_tk   = document.getElementById('p-bpjs-tk').value;

            var total_bpjs_kes      = (parseFloat(gaji_pokok) * 4 / 100);
            var total_bpjs_tk       = (parseFloat(gaji_pokok) * 6.24 / 100);
            var total_p_bpjs_kes    = (parseFloat(gaji_pokok) * 1 / 100);
            var total_p_bpjs_tk     = (parseFloat(gaji_pokok) * 3 / 100);

            var pph21        = document.getElementById('pph21').value;
            var pinjaman     = document.getElementById('pinjaman').value;

            var bruto       = parseFloat(gaji_pokok) + parseFloat(tunjangan) + parseFloat(insentiv) + parseFloat(thr) + parseFloat(bpjs_kes) + parseFloat(bpjs_tk); 

            var bersih      = parseFloat(bruto) - parseFloat(pph21) - parseFloat(pinjaman) - parseFloat(p_bpjs_kes) - parseFloat(p_bpjs_tk);


            if (!isNaN(bruto)) {
                document.getElementById('gaji_bruto').value = bruto;
            }

            if (!isNaN(total_bpjs_tk)) {
                document.getElementById('ya-bpjs-tk').value = total_bpjs_tk;
            }

            if (!isNaN(total_bpjs_kes)) {
                document.getElementById('ya-bpjs-kes').value = total_bpjs_kes;
            }

            if (!isNaN(total_p_bpjs_tk)) {
                document.getElementById('ya-p-bpjs-tk').value = total_p_bpjs_tk;
            }

            if (!isNaN(total_p_bpjs_kes)) {
                document.getElementById('ya-p-bpjs-kes').value = total_p_bpjs_kes;
            }

            if (!isNaN(bersih)) {
                document.getElementById('gaji_bersih').value = bersih;   
            }
            
        }

        $(document).ready(function() {
          // By Default Disable radio button
          $(".ya-bpjs-kes").attr('disabled', true);
          $(".tidak-bpjs-kes").attr('disabled', true);
          $(".ya-bpjs-tk").attr('disabled', true);
          $(".tidak-bpjs-tk").attr('disabled', true);
          $(".ya-p-bpjs-kes").attr('disabled', true);
          $(".tidak-p-bpjs-kes").attr('disabled', true);
          $(".ya-p-bpjs-tk").attr('disabled', true);
          $(".tidak-p-bpjs-tk").attr('disabled', true);
          // Disable radio buttons function on Check Disable radio button.
          $("form input:radio").change(function() {
            if ($(this).val() == "Tidak BPJS Kes") {
              $(".tidak-bpjs-kes").attr('disabled', false);
              $(".ya-bpjs-kes").attr('disabled', true);

              var bpjs_kes = document.getElementById('tidak-bpjs-kes').value;
              document.getElementById('bpjs-kes').value = bpjs_kes;

              hitung();
            }
            // Else Enable radio buttons.
            else if ($(this).val() == "Ya BPJS Kes"){
              $(".ya-bpjs-kes").attr('disabled', false);
              $(".tidak-bpjs-kes").attr('disabled', true);

              var bpjs_kes = document.getElementById('ya-bpjs-kes').value;
              document.getElementById('bpjs-kes').value = bpjs_kes;

              hitung();
            }
            else if ($(this).val() == "Tidak BPJSTK"){
              $(".tidak-bpjs-tk").attr('disabled', false);
              $(".ya-bpjs-tk").attr('disabled', true);

              var bpjs_tk = document.getElementById('tidak-bpjs-tk').value;
              document.getElementById('bpjs-tk').value = bpjs_tk;

              hitung();
            }
            // Else Enable radio buttons.
            else if ($(this).val() == "Ya BPJSTK"){
              $(".ya-bpjs-tk").attr('disabled', false);
              $(".tidak-bpjs-tk").attr('disabled', true);

              var bpjs_tk = document.getElementById('ya-bpjs-tk').value;
              document.getElementById('bpjs-tk').value = bpjs_tk;

              hitung();
            }
            else if ($(this).val() == "Tidak Potongan BPJS Kes") {
              $(".tidak-p-bpjs-kes").attr('disabled', false);
              $(".ya-p-bpjs-kes").attr('disabled', true);

              var p_bpjs_kes = document.getElementById('tidak-p-bpjs-kes').value;
              document.getElementById('p-bpjs-kes').value = p_bpjs_kes;

              hitung();
            }
            // Else Enable radio buttons.
            else if ($(this).val() == "Ya Potongan BPJS Kes"){
              $(".ya-p-bpjs-kes").attr('disabled', false);
              $(".tidak-p-bpjs-kes").attr('disabled', true);

              var p_bpjs_kes = document.getElementById('ya-p-bpjs-kes').value;
              document.getElementById('p-bpjs-kes').value = p_bpjs_kes;

              hitung();
            }
            else if ($(this).val() == "Tidak Potongan BPJSTK"){
              $(".tidak-p-bpjs-tk").attr('disabled', false);
              $(".ya-p-bpjs-tk").attr('disabled', true);

              var p_bpjs_tk = document.getElementById('tidak-p-bpjs-tk').value;
              document.getElementById('p-bpjs-tk').value = p_bpjs_tk;

              hitung();
            }
            // Else Enable radio buttons.
            else if ($(this).val() == "Ya Potongan BPJSTK"){
              $(".ya-p-bpjs-tk").attr('disabled', false);
              $(".tidak-p-bpjs-tk").attr('disabled', true);

              var p_bpjs_tk = document.getElementById('ya-p-bpjs-tk').value;
              document.getElementById('p-bpjs-tk').value = p_bpjs_tk;

              hitung();
            }
          });
        });
    </script>

<?php include ('config_config_cs/fungsi_toast_notifikasi_tambah_barang.php'); ?>
