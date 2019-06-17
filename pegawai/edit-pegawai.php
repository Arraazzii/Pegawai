<?php include ('config_config_cs/fungsi_no_otomatis_tambah-pegawai.php'); ?>
<?php
  error_reporting(0);

  $id_daftar  = isset($_GET['nip']) ? $_GET['nip'] : "";

  $q_data_edit  = mysqli_query($connect, "SELECT * FROM tbl_pegawai JOIN tbl_kelahiran ON tbl_pegawai.id_lahir = tbl_kelahiran.id_lahir JOIN tbl_jabatan ON tbl_pegawai.id_jabatan = tbl_jabatan.id_jabatan JOIN tbl_alamat ON tbl_pegawai.id_alamat = tbl_alamat.id_alamat JOIN tbl_no_telp ON tbl_pegawai.id_telp = tbl_no_telp.id_telp JOIN tbl_status ON tbl_pegawai.id_status = tbl_status.id_status JOIN tbl_tabungan ON tbl_pegawai.id_tabungan = tbl_tabungan.id_tabungan JOIN tbl_dokumen ON tbl_pegawai.id_dokumen = tbl_dokumen.id_dokumen JOIN tbl_file ON tbl_pegawai.id_file = tbl_file.id_file JOIN tbl_data_email_pegawai ON tbl_pegawai.nik = tbl_data_email_pegawai.nip_pegawai WHERE tbl_pegawai.nik= '$id_daftar'");
  $a_data_edit  = mysqli_fetch_array($q_data_edit);
  
    $id_lahir       = $a_data_edit['id_lahir']; 
    $id_alamat      = $a_data_edit['id_alamat'];
    $id_jabatan     = $a_data_edit['id_jabatan']; 
    $id_telp        = $a_data_edit['id_telp'];
    $id_status      = $a_data_edit['id_status'];  
    $id_tabungan    = $a_data_edit['id_tabungan'];
    $id_dokumen     = $a_data_edit['id_dokumen']; 
    $id_file        = $a_data_edit['id_file'];

    $p_nip          = $a_data_edit['nik'];  
    $p_nama         = $a_data_edit['nama'];
    $p_jk           = $a_data_edit['jenis_kelamin'];  
    $p_tmpt_lahir   = $a_data_edit['tmpt_lahir'];
    $p_tgl_lahir    = $a_data_edit['tgl_lahir'];  
    $p_agama        = $a_data_edit['agama'];
    $p_nama_jalan   = $a_data_edit['nama_jalan']; 
    $p_rt           = $a_data_edit['rt'];
    $p_rw           = $a_data_edit['rw']; 
    $p_kelurahan    = $a_data_edit['kelurahan'];
    $p_kecamatan    = $a_data_edit['kecamatan'];  
    $p_kota         = $a_data_edit['kota'];
    $p_provinsi     = $a_data_edit['provinsi']; 
    $p_kode_pos     = $a_data_edit['kode_pos'];
    $p_jabatan      = $a_data_edit['jabatan'];  
    $p_divisi       = $a_data_edit['divisi'];
    $p_npwp         = $a_data_edit['no_npwp']; 
    $p_tgl_masuk    = $a_data_edit['tgl_masuk'];
    $p_tgl_mulai_kontrak_1 = $a_data_edit['tgl_mulai_kontrak_1'];
	$p_tgl_selesai_kontrak_1 = $a_data_edit['tgl_selesai_kontrak_1'];
	$p_tgl_mulai_kontrak_2 = $a_data_edit['tgl_mulai_kontrak_2'];
	$p_tgl_selesai_kontrak_2 = $a_data_edit['tgl_selesai_kontrak_2'];
    $p_no_telp      = $a_data_edit['telp']; 
    $p_no_hp        = $a_data_edit['hp'];
    $p_status_peg   = $a_data_edit['status_peg']; 
    $p_status_kawin = $a_data_edit['sts_kawin'];
    $p_nama_bank    = $a_data_edit['bank']; 
    $p_no_rekening  = $a_data_edit['no_rekening'];

  ?>

    <!-- Custom CSS -->
    <link href="dist/css/step.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/quill/dist/quill.snow.css">

    <link href="assets/libs/toastr/build/toastr.min.css" rel="stylesheet">

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
        <div class="container-fluid">

                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-2">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <a href="?view=data-pegawai&id=9973850hupa&name=pegaaplication&data Pegawai">
                                    <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i></h1>
                                    <h6 class="text-white">Pegawai</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
            <div class="row">
                <div class="card col-12">
                    <div class="card-body wizard-content">
                          <div class="x_content">
                            <div class="container">
                              <div class="stepwizard">
                                  <div class="stepwizard-row setup-panel">
                                      <div class="stepwizard-step col-xs-2"> 
                                          <a href="#step-1" type="button" class="btn btn-success btn-circle" data-toggle="tooltip" title="Data Diri"><span class="mdi mdi-human"></span></a>
                                          <p>Pribadi</p>
                                      </div>
                                      <div class="stepwizard-step col-xs-2"> 
                                          <a href="#step-2" type="button" class="btn btn-default btn-circle" data-toggle="tooltip" title="Alamat"><span class="mdi mdi-map-marker"></span></a>
                                          <p>Alamat</p>
                                      </div>
                                      <div class="stepwizard-step col-xs-2"> 
                                          <a href="#step-3" type="button" class="btn btn-default btn-circle" data-toggle="tooltip" title="Bagian & Jabatan"><span class="mdi mdi-tie"></span></a>
                                          <p>Bagian</p>
                                      </div>
                                      <div class="stepwizard-step col-xs-2"> 
                                          <a href="#step-4" type="button" class="btn btn-default btn-circle" data-toggle="tooltip" title="Telp & Status"><span class="mdi mdi-phone"></span></a>
                                          <p>Telp</p>
                                      </div>
                                      <div class="stepwizard-step col-xs-2"> 
                                          <a href="#step-5" type="button" class="btn btn-default btn-circle" data-toggle="tooltip" title="Rekening"><span class="mdi mdi-credit-card"></span></a>
                                          <p>Rekening</p>
                                      </div>
                                      <div class="stepwizard-step col-xs-2"> 
                                          <a href="#step-6" type="button" class="btn btn-default btn-circle" data-toggle="tooltip" title="Finish Section"><span class="mdi mdi-check"></span></a>
                                          <p>Finish</p>
                                      </div>            
                                  </div>
                              </div>
                              <form class="form-horizontal" action="config_config_cs/edit-pegawai-con.php" method="post" role="form">
                                <input type="hidden" value="<?php echo $id_lahir; ?>" name="id_lahir">
                                <input type="hidden" value="<?php echo $id_alamat; ?>" name="id_alamat">
                                <input type="hidden" value="<?php echo $id_status; ?>" name="id_status">
                                <input type="hidden" value="<?php echo $id_tabungan; ?>" name="id_tabungan">
                                <input type="hidden" value="<?php echo $id_telp; ?>" name="id_telp">
                                <input type="hidden" value="<?php echo $id_jabatan; ?>" name="id_jabatan">
                                <input type="hidden" value="<?php echo $id_pendidikan; ?>" name="id_pendidikan">
                                <input type="hidden" value="<?php echo $id_dokumen; ?>" name="id_dokumen">
                                <input type="hidden" value="<?php echo $id_file; ?>" name="id_file"><br>
                                <div class="clearfix"></div>
                                  <div class="panel panel-primary setup-content" id="step-1">
                                      <div class="panel-body">
                                          <div class="form-group">
                                              <label class="control-label">Nomer Induk Pegawai</label>
                                              <div class="row mb-6">
                                                <div class="col-md-2">
                                                    <input type="text" data-toggle="tooltip" title="NIP Terakhir" class="form-control" value="<?php echo $nomor_nip; ?>" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" data-toggle="tooltip" title="NIP Pegawai" class="form-control" name="nip" id="validationDefault05" placeholder="Nomer Induk Pegawai" required="" readonly="" value="<?php echo $p_nip; ?>"> 
                                                </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label">Nama Pegawai</label>
                                              <input maxlength="100" name="nama" type="text" required="required" class="form-control" placeholder="Nama Pegawai" value="<?php echo $p_nama; ?>"/>
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label">Jenis Kelamin</label>
                                              <div class="row mb-3">
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="customControlValidation1" name="jenis_kelamin" value="LK"  <?=$p_jk =='LK' ? ' checked="checked"' : '';?>>
                                                        <label class="custom-control-label" for="customControlValidation1">Laki Laki</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="customControlValidation2" name="jenis_kelamin" value="P"  <?=$p_jk =='P' ? ' checked="checked"' : '';?>>
                                                        <label class="custom-control-label" for="customControlValidation2">Perempuan</label>
                                                    </div>    
                                                </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label">Tempat, Tanggal Lahir</label>
                                              <div class="row mb-6">
                                                <div class="col-md-6">
                                                    <input id="name" name="tmpt_lahir" type="text" class="form-control"  value="<?php echo $p_tmpt_lahir; ?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                    <input type="text" name="tgl_lahir" class="form-control" id="datepicker-autoclose" placeholder="yyyy-mm-dd"  value="<?php echo $p_tgl_lahir; ?>">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>    
                                                </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label">Agama</label>
                                              <select name="agama" class="form-control">
                                                <option>Pilih Agama</option>
                                                  <?php
                                                $q = mysqli_query($connect, "SELECT * FROM tbl_data_agama"); 

                                                  while ($a = mysqli_fetch_array($q)){
                                                    if ($a[0] == $p_agama) {
                                                      echo "<option value='$a[0]' selected>$a[1]</option>";
                                                    } else {
                                                      echo "<option value='$a[0]'>$a[1]</option>";
                                                    }
                                                  }
                                                  ?>
                                              </select>
                                          </div>
                                          <div class="form-action">
                                              <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                                          </div>
                                      </div>
                                  </div>
                                  
                                  <div class="panel panel-primary setup-content" id="step-2">
                                      <div class="panel-body">
                                          <div class="form-group">
                                              <div class="row">    
                                                <div class="col-md-5">
                                                    <label for="name">Nama Jalan</label>
                                                    <input type="text" name="nama_jalan" class="form-control" value="<?php echo $p_nama_jalan; ?>"/>
                                                </div>
                                                <div class="col-md-1">
                                                    <label for="name">RT</label>
                                                    <input type="text" name="rt" class="form-control" value="<?php echo $p_rt; ?>"/>
                                                </div>
                                                <div class="col-md-1">
                                                    <label for="name">RW</label>
                                                    <input type="text" name="rw" class="form-control" value="<?php echo $p_rw; ?>"/>
                                                </div>
                                                <div class="col-md-5">
                                                    <label for="name">Kelurahan</label>
                                                    <input type="text" name="kelurahan" class="form-control" value="<?php echo $p_kelurahan; ?>"/>
                                                </div>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <div class="row">    
                                                <div class="col-md-6">
                                                    <label class="control-label">Kecamatan</label>
                                                    <input type="text" name="kecamatan" class="form-control" value="<?php echo $p_kecamatan; ?>"/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="name">Kota/Kabupaten</label>
                                                    <input type="text" name="kota" class="form-control" value="<?php echo $p_kota; ?>"/>
                                                </div>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <div class="row">    
                                                <div class="col-md-6">
                                                    <label class="control-label">Provinsi</label>
                                                    <input type="text" name="provinsi" class="form-control" value="<?php echo $p_provinsi; ?>"/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="name">Kode Pos</label>
                                                    <input type="text" name="kode_pos" class="form-control" value="<?php echo $p_kode_pos; ?>"/>
                                                </div>
                                              </div>
                                          </div>
                                          <div class="form-action">
                                              <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="panel panel-primary setup-content" id="step-3">
                                      <div class="panel-body">
                                          <div class="form-group">
                                              <label class="control-label">Jabatan</label>
                                              <select name="jabatan" class="form-control">
                                                <option>Pilih Jabatan</option>
                                                  <?php
                                                $q = mysqli_query($connect, "SELECT * FROM tbl_data_jabatan"); 

                                                  while ($a = mysqli_fetch_array($q)){
                                                    if ($a[0] == $p_jabatan) {
                                                      echo "<option value='$a[0]' selected>$a[1]</option>";
                                                    } else {
                                                      echo "<option value='$a[0]'>$a[1]</option>";
                                                    }
                                                  }
                                                  ?>
                                              </select>
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label">Divisi</label>
                                              <select name="divisi" class="form-control">
                                                <option>Pilih Divisi</option>
                                                  <?php
                                                $q = mysqli_query($connect, "SELECT * FROM tbl_data_divisi"); 

                                                  while ($a = mysqli_fetch_array($q)){
                                                    if ($a[0] == $p_divisi) {
                                                      echo "<option value='$a[0]' selected>$a[1]</option>";
                                                    } else {
                                                      echo "<option value='$a[0]'>$a[1]</option>";
                                                    }
                                                  }
                                                  ?>
                                              </select>
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label">No NPWP</label>
                                              <input maxlength="100" name="npwp" type="text" class="form-control" placeholder="No NPWP" value="<?php echo $p_npwp; ?>"/>
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label">Tanggal Masuk</label>
                                              <div class="input-group">
                                                <input type="text" name="tgl_masuk" class="form-control" id="datepicker-autoclose2" date-format="yyyy-MM-dd" placeholder="yyyy-mm-dd" value="<?php echo $p_tgl_masuk; ?>">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label">Tanggal Mulai Kontrak 1</label>
                                              <div class="input-group">
                                                <input type="text" name="tgl_mulai_kontrak_1" class="form-control" id="datepicker-autoclose4" date-format="yyyy-MM-dd" placeholder="yyyy-mm-dd" value="<?php echo $p_tgl_mulai_kontrak_1; ?>">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label">Tanggal Selesai Kontrak 1</label>
                                              <div class="input-group">
                                                <input type="text" name="tgl_selesai_kontrak_1" class="form-control" id="datepicker-autoclose5" date-format="yyyy-MM-dd" placeholder="yyyy-mm-dd" value="<?php echo $p_tgl_selesai_kontrak_1; ?>">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label">Tanggal Mulai Kontrak 2</label>
                                              <div class="input-group">
                                                <input type="text" name="tgl_mulai_kontrak_2" class="form-control" id="datepicker-autoclose6" date-format="yyyy-MM-dd" placeholder="yyyy-mm-dd" value="<?php echo $p_tgl_mulai_kontrak_2; ?>">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label">Tanggal Selesai Kontrak 2</label>
                                              <div class="input-group">
                                                <input type="text" name="tgl_selesai_kontrak_2" class="form-control" id="datepicker-autoclose7" date-format="yyyy-MM-dd" placeholder="yyyy-mm-dd" value="<?php echo $p_tgl_selesai_kontrak_2; ?>">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                            </div>
                                          </div>          
                                          <div class="form-action">
                                              <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="panel panel-primary setup-content" id="step-4">
                                      <div class="panel-body">
                                          <div class="form-group">
                                              <label>No. Telp <small class="text-muted">(999) 999-9999</small></label>
                                                <input type="text" name="telp" class="form-control phone-inputmask" id="phone-mask" placeholder="Enter No. Telp" value="<?php echo $p_no_telp; ?>">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label">No. Handphone</label>
                                              <input type="Number" maxlength="13" class="form-control" name="nohp" placeholder="Indonesia Phone Number" value="<?php echo $p_no_hp; ?>">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label">Status Pegawai</label>
                                              <select name="status_pegawai" class="form-control">
                                                <option>Status Pegawai</option>
                                                  <?php
                                                $q = mysqli_query($connect, "SELECT * FROM tbl_data_status_pegawai"); 

                                                  while ($a = mysqli_fetch_array($q)){
                                                    if ($a[0] == $p_status_peg) {
                                                      echo "<option value='$a[0]' selected>$a[1]</option>";
                                                    } else {
                                                      echo "<option value='$a[0]'>$a[1]</option>";
                                                    }                                                  }
                                                  ?>
                                              </select>
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label">Status Kawin</label>
                                              <select name="status_kawin" class="form-control">
                                                <option>Status Kawin</option>
                                                  <?php
                                                $q = mysqli_query($connect, "SELECT * FROM tbl_data_status_kawin"); 

                                                  while ($a = mysqli_fetch_array($q)){
                                                    if ($a[0] == $p_status_kawin) {
                                                      echo "<option value='$a[0]' selected>$a[1]</option>";
                                                    } else {
                                                      echo "<option value='$a[0]'>$a[1]</option>";
                                                    }
                                                  }
                                                  ?>
                                              </select>
                                          </div>
                                          <div class="form-action">
                                              <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="panel panel-primary setup-content" id="step-5">
                                      <div class="panel-body">
                                          <div class="form-group">
                                              <label class="control-label">Nama Bank</label>
                                              <select name="bank" class="form-control">
                                                <option>Nama Bank</option>
                                                  <?php
                                                $q = mysqli_query($connect, "SELECT * FROM tbl_data_bank"); 

                                                  while ($a = mysqli_fetch_array($q)){
                                                    if ($a[0] == $p_nama_bank) {
                                                      echo "<option value='$a[0]' selected>$a[1]</option>";
                                                    } else {
                                                      echo "<option value='$a[0]'>$a[1]</option>";
                                                    }
                                                  }
                                                  ?>
                                              </select>
                                          </div>
                                          <div class="form-group">
                                              <label>No. Rekening</label>
                                              <input type="text" class="form-control" name="rekening" placeholder="No. Rekening" value="<?php echo $p_no_rekening; ?>">
                                          </div>
                                          <div class="form-action">
                                              <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="panel panel-primary setup-content" id="step-6">
                                      <div class="panel-body">
                                          <div class="form-group">
                                              <div class="custom-control custom-checkbox mr-sm-2">
                                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing1" required="">
                                                    <label class="custom-control-label" for="customControlAutosizing1">I agree with the Terms and Conditions.</label>
                                                </div>

                                          </div>
                                          <div class="form-action">
                                              <input type="submit" name="simpan" class="btn btn-primary pull-right" value="Simpan">
                                              <a href="javascript:history.back()"><button type="button" class="btn btn-warning">BACK</button></a>
                                          </div>
                                      </div>
                                  </div>
                                </form>
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
    <script src="assets/extra-libs/step/step.js"></script>

    <script src="assets/libs/toastr/build/toastr.min.js"></script>
    <script>
     //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
            todayHighlight: true
        });
        jQuery('#datepicker-autoclose2').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
            todayHighlight: true
        });
        jQuery('#datepicker-autoclose3').datepicker({
            format: "yyyy",
            autoclose: true,
            viewMode: "years", 
            minViewMode: "years"
        });
        jQuery('#datepicker-autoclose4').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
            todayHighlight: true
        });
        jQuery('#datepicker-autoclose5').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
            todayHighlight: true
        });
        jQuery('#datepicker-autoclose6').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
            todayHighlight: true
        });
        jQuery('#datepicker-autoclose7').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
    <?php include ('config_config_cs/fungsi_toast_notifikasi_tambah-pegawai.php'); ?>