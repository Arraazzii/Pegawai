<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
<link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<link href="assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
<link href="assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/libs/select2/dist/css/select2.min.css">
<link rel="stylesheet" type="text/css" href="assets/libs/jquery-minicolors/jquery.minicolors.css">
<link rel="stylesheet" type="text/css" href="assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" type="text/css" href="assets/libs/quill/dist/quill.snow.css">
<style type="text/css">
.range {
    display: table;
    position: relative;
    height: 25px;
    margin-top: 20px;
    background-color: rgb(245, 245, 245);
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.1);
    cursor: pointer;
}

.range input[type="range"] {
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    -ms-appearance: none !important;
    -o-appearance: none !important;
    appearance: none !important;

    display: table-cell;
    width: 100%;
    background-color: transparent;
    height: 25px;
    cursor: pointer;
}

.range input[type="range"]::-webkit-slider-thumb {
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    -ms-appearance: none !important;
    -o-appearance: none !important;
    appearance: none !important;

    width: 20px;
    height: 25px;
    color: rgb(255, 255, 255);
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0px;
    background-color: rgb(153, 153, 153);
}

.range input[type="range"]::-moz-slider-thumb {
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    -ms-appearance: none !important;
    -o-appearance: none !important;
    appearance: none !important;

    width: 11px;
    height: 25px;
    color: rgb(255, 255, 255);
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0px;
    background-color: rgb(153, 153, 153);
}

.range output {
    display: table-cell;
    padding: 3px 5px 2px;
    min-width: 40px;
    color: rgb(255, 255, 255);
    background-color: rgb(153, 153, 153);
    text-align: center;
    text-decoration: none;
    border-radius: 4px;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
    width: 1%;
    white-space: nowrap;
    vertical-align: middle;

    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    transition: all 0.5s ease;

    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: -moz-none;
    -o-user-select: none;
    user-select: none;
}

.range input[type="range"] {
    outline: none;
}

.range.range-primary input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(66, 139, 202);
}

.range.range-primary input[type="range"]::-moz-slider-thumb {
    background-color: rgb(66, 139, 202);
}

.range.range-primary output {
    background-color: rgb(66, 139, 202);
}

.range.range-primary input[type="range"] {
    outline-color: rgb(66, 139, 202);
}

.range.range-success input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(92, 184, 92);
}

.range.range-success input[type="range"]::-moz-slider-thumb {
    background-color: rgb(92, 184, 92);
}

.range.range-success output {
    background-color: rgb(92, 184, 92);
}

.range.range-success input[type="range"] {
    outline-color: rgb(92, 184, 92);
}

.range.range-info input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(91, 192, 222);
}

.range.range-info input[type="range"]::-moz-slider-thumb {
    background-color: rgb(91, 192, 222);
}

.range.range-info output {
    background-color: rgb(91, 192, 222);
}

.range.range-info input[type="range"] {
    outline-color: rgb(91, 192, 222);
}

.range.range-warning input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(240, 173, 78);
}

.range.range-warning input[type="range"]::-moz-slider-thumb {
    background-color: rgb(240, 173, 78);
}

.range.range-warning output {
    background-color: rgb(240, 173, 78);
}

.range.range-warning input[type="range"] {
    outline-color: rgb(240, 173, 78);
}

.range.range-danger input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(217, 83, 79);
}

.range.range-danger input[type="range"]::-moz-slider-thumb {
    background-color: rgb(217, 83, 79);
}

.range.range-danger output {
    background-color: rgb(217, 83, 79);
}

.range.range-danger input[type="range"] {
    outline-color: rgb(217, 83, 79);
}
</style>
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <?php

                    $id_daftar  = isset($_GET['nip']) ? $_GET['nip'] : "";
                                        
                    $q_data_edit  = mysqli_query($connect, "SELECT * FROM tbl_pegawai, tbl_kelahiran, tbl_jabatan, tbl_no_telp, tbl_status, tbl_alamat, tbl_tabungan,  tbl_dokumen, tbl_file, tbl_data_email_pegawai, tbl_data_jabatan, tbl_data_divisi, tbl_data_status_pegawai, tbl_data_status_kawin, tbl_data_agama, tbl_data_bank WHERE tbl_pegawai.id_lahir = tbl_kelahiran.id_lahir AND tbl_pegawai.id_jabatan = tbl_jabatan.id_jabatan AND tbl_pegawai.id_telp = tbl_no_telp.id_telp AND tbl_pegawai.id_status = tbl_status.id_status AND tbl_pegawai.id_alamat = tbl_alamat.id_alamat AND tbl_pegawai.id_tabungan = tbl_tabungan.id_tabungan AND tbl_data_email_pegawai.nip_pegawai = tbl_pegawai.nik AND tbl_data_jabatan.kode_jabatan = tbl_jabatan.jabatan AND tbl_data_divisi.kode_divisi = tbl_jabatan.divisi AND tbl_data_status_kawin.id_status_kawin = tbl_status.sts_kawin AND tbl_data_status_pegawai.kode_status = tbl_status.status_peg AND tbl_data_agama.kode_agama = tbl_kelahiran.agama AND tbl_dokumen.id_dokumen = tbl_pegawai.id_dokumen AND tbl_file.id_file = tbl_pegawai.id_file AND tbl_data_bank.kode_bank = tbl_tabungan.bank AND tbl_pegawai.nik= '$id_daftar'") or die (mysqli_error($connect));

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
                            $p_agama        = $a_data_edit['nama_agama'];
                            $p_nama_jalan   = $a_data_edit['nama_jalan']; 
                            $p_rt           = $a_data_edit['rt'];
                            $p_rw           = $a_data_edit['rw']; 
                            $p_kelurahan    = $a_data_edit['kelurahan'];
                            $p_kecamatan    = $a_data_edit['kecamatan'];  
                            $p_kota         = $a_data_edit['kota'];
                            $p_provinsi     = $a_data_edit['provinsi']; 
                            $p_kode_pos     = $a_data_edit['kode_pos'];
                            $p_jabatan      = $a_data_edit['nama_jabatan'];  
                            $p_divisi       = $a_data_edit['nama_divisi'];
                            $p_npwp         = $a_data_edit['no_npwp']; 
                            $p_tgl_masuk    = $a_data_edit['tgl_masuk'];
                            $p_tgl_mulai_kontrak_1 = $a_data_edit['tgl_mulai_kontrak_1'];
                            $p_tgl_selesai_kontrak_1 = $a_data_edit['tgl_selesai_kontrak_1'];
                            $p_tgl_mulai_kontrak_2 = $a_data_edit['tgl_mulai_kontrak_2'];
                            $p_tgl_selesai_kontrak_2 = $a_data_edit['tgl_selesai_kontrak_2'];
                            $p_no_telp      = $a_data_edit['telp']; 
                            $p_no_hp        = $a_data_edit['hp'];
                            $p_status_peg   = $a_data_edit['nama_status']; 
                            $p_status_kawin = $a_data_edit['status_kawin'];
                            $p_nama_bank    = $a_data_edit['nama_bank']; 
                            $p_no_rekening  = $a_data_edit['no_rekening'];
                            $p_email        = $a_data_edit['email_pegawai'];
                            $p_domain       = $a_data_edit['domain'];
                            $p_nik          = $a_data_edit['no_ktp'];
                            $p_no_kk        = $a_data_edit['no_kk'];
                            $p_no_sim_a     = $a_data_edit['no_sim_a'];
                            $p_no_sim_c     = $a_data_edit['no_sim_c'];
                            $p_foto         = $a_data_edit['foto'];
                            $p_no_bpjs_kes  = $a_data_edit['no_bpjs_kes'];
                            $p_no_bpjs_tk   = $a_data_edit['no_bpjs_tk'];
                                                                        
                                                                        
                ?>
    <div class="row">
        <!-- Tabs -->
        <div class="col col-md-12 card">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Profil</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Kelengkapan Dokumen</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Kelengkapan Data Diri</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#password" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Ubah Password</span></a> </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content tabcontent-border">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <div class="p-20">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Profil Data Diri</h5>
                                <hr><br>
                                <div class="clear-fix"></div>
                                <div class="row el-element-overlay">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="el-card-item">
                                                <?php
                                                                    if ($p_foto == NULL) { ?>
                                                <div class="el-card-avatar el-overlay-1"> <img src="assets/images/users/1.jpg" alt="user" />
                                                    <div class="el-overlay">
                                                        <ul class="list-style-none el-info">
                                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="assets/images/users/1.jpg"><i class="mdi mdi-magnify-plus"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <?php
                                                                    } else { ?>
                                                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo $p_foto; ?>" />
                                                    <div class="el-overlay">
                                                        <ul class="list-style-none el-info">
                                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo $p_foto; ?>"><i class="mdi mdi-magnify-plus"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <?php    
                                                                    }
                                                                ?>
                                                <div class="el-card-content text-left">
                                                    <h4 class="m-b-0 text-center">
                                                        <?php echo $p_nama; ?>
                                                    </h4>
                                                    <hr>
                                                    <ul class="list-unstyled user_data">
                                                        <?php
                                                                            if ($p_jk == 'LK') { ?>
                                                        <li><i class="mdi mdi-gender-male user-profile-icon"></i> MALE
                                                        </li><br>
                                                        <?php
                                                                            } elseif ($p_jk == 'P') { ?>
                                                        <li><i class="mdi mdi-gender-female user-profile-icon"></i> FEMALE
                                                        </li><br>
                                                        <?php
                                                                            }
                                                                        ?>
                                                        <li><i class="fas fa-map-marker-alt user-profile-icon"></i>
                                                            <?php echo $p_kota; ?>,
                                                            <?php echo $p_provinsi; ?>, INDONESIA
                                                        </li><br>
                                                        <li>
                                                            <i class="fas fa-briefcase user-profile-icon"></i>
                                                            <?php echo $p_jabatan; ?> -
                                                            <?php echo $p_divisi; ?>
                                                        </li><br>
                                                        <li class="m-top-xs">
                                                            <i class="fas fa-external-link-alt user-profile-icon"></i>
                                                            <a href="mailto:<?php echo $p_email; ?><?php echo $p_domain; ?>" target="_blank">
                                                                <?php echo $p_email; ?>
                                                                <?php echo $p_domain; ?></a>
                                                        </li><br>
                                                        <li class="m-top-xs">
                                                            <i class="mdi mdi-phone user-profile-icon"></i>
                                                            <a href="#">
                                                                <?php echo $p_no_hp; ?></a>
                                                        </li><br>
                                                        <li class="m-top-xs">
                                                            <i class="mdi mdi-calendar user-profile-icon"></i>
                                                            <a href="#">
                                                                <?php echo tgl_indo($p_tgl_masuk); ?></a>
                                                        </li><br>
                                                    </ul>
                                                    <center>
                                                        <a href="?view=edit-profil-pegawai&id=997386799hupa&name=pegaaplication&editPegawai&nip=<?php echo $id_daftar;?>" class="btn btn-outline-success" data-toggle="tooltip" title="Edit Data"><span class="fa fa-edit"></span></a>
                                                        <a href="pegawai/cv-pegawai.php?id=997386796hupa&name=pegaaplication&CVPegawai&nip=<?php echo $id_daftar;?>" target="_blank" class="btn btn-outline-success" data-toggle="tooltip" title="Print CV"><span class="fas fa-print"></span></a>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card">
                                            <ul class="list-style-none">
                                                <li class="d-flex no-block card-body alert">
                                                    <div>
                                                        <a href="#" class="m-b-0 font-medium p-0">
                                                            <?php echo $p_nip; ?></a>
                                                        <span class="text-muted">Nomer Induk Pegawai</span>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <div class="tetx-right">
                                                            <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex no-block card-body border-top alert">
                                                    <div>
                                                        <a href="#" class="m-b-0 font-medium p-0">
                                                            <?php echo $p_tmpt_lahir; ?>,
                                                            <?php echo tgl_indo($p_tgl_lahir);?></a>
                                                        <span class="text-muted">Tempat, Tanggal Lahir</span>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <div class="tetx-right">
                                                            <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex no-block card-body border-top alert">
                                                    <div>
                                                        <a href="#" class="m-b-0 font-medium p-0">
                                                            <?php echo $p_agama; ?></a>
                                                        <span class="text-muted">Agama</span>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <div class="tetx-right">
                                                            <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex no-block card-body border-top alert">
                                                    <div>
                                                        <a href="#" class="m-b-0 font-medium p-0">
                                                            <?php echo $p_status_peg; ?> -
                                                            <?php echo $p_status_kawin; ?></a>
                                                        <span class="text-muted">Status Pegawai - Status Kawin</span>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <div class="tetx-right">
                                                            <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- <li class="d-flex no-block card-body border-top alert">
                                                    <div>
                                                        <a href="#" class="m-b-0 font-medium p-0">
                                                            <?php echo tgl_indo($p_tgl_mulai_kontrak_1); ?> -
                                                            <?php echo tgl_indo($p_tgl_selesai_kontrak_1); ?></a>
                                                        <span class="text-muted">Tanggal Mulai Kontrak 1 - Tanggal Selesai Kontrak 1</span>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <div class="tetx-right">
                                                            <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex no-block card-body border-top alert">
                                                    <div>
                                                        <a href="#" class="m-b-0 font-medium p-0">
                                                            <?php echo tgl_indo($p_tgl_mulai_kontrak_2); ?> -
                                                            <?php echo tgl_indo($p_tgl_selesai_kontrak_2); ?></a>
                                                        <span class="text-muted">Tanggal Mulai Kontrak 2 - Tanggal Selesai Kontrak 2</span>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <div class="tetx-right">
                                                            <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li> -->
                                                <li class="d-flex no-block card-body border-top alert">
                                                    <div>
                                                        <a href="#" class="m-b-0 font-medium p-0">
                                                            <?php echo $p_nik; ?> -
                                                            <?php echo $p_no_kk; ?></a>
                                                        <span class="text-muted">No. NIK - No KK</span>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <div class="tetx-right">
                                                            <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex no-block card-body border-top alert">
                                                    <div>
                                                        <a href="#" class="m-b-0 font-medium p-0">
                                                            <?php echo $p_no_sim_a; ?> -
                                                            <?php echo $p_no_sim_c; ?></a>
                                                        <span class="text-muted">No SIM A - No SIM C</span>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <div class="tetx-right">
                                                            <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex no-block card-body border-top alert">
                                                    <div>
                                                        <a href="#" class="m-b-0 font-medium p-0">
                                                            <?php echo $p_no_bpjs_kes; ?> -
                                                            <?php echo $p_no_bpjs_tk; ?></a>
                                                        <span class="text-muted">No BPJS Kesehatan - No BPJS Tenaga Kerja</span>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <div class="tetx-right">
                                                            <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex no-block card-body border-top alert">
                                                    <div>
                                                        <a href="#" class="m-b-0 font-medium p-0">
                                                            <?php echo $p_nama_bank; ?> -
                                                            <?php echo $p_no_rekening; ?></a>
                                                        <span class="text-muted">Rekening Bank</span>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <div class="tetx-right">
                                                            <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex no-block card-body border-top alert">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane  p-20" id="profile" role="tabpanel">
                    <br>
                    <?php include ('user/_data-pribadi/modal-foto.php'); ?>
                    <?php include ('user/_data-pribadi/modal-ktp.php'); ?>
                    <?php include ('user/_data-pribadi/modal-kk.php'); ?>
                    <?php include ('user/_data-pribadi/modal-sim-a.php'); ?>
                    <?php include ('user/_data-pribadi/modal-sim-c.php'); ?>
                    <?php include ('user/_data-pribadi/modal-ijazah.php'); ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title m-b-0">Data Dokumen
                                        <?php echo $p_nama; ?>
                                    </h5>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Foto</th>
                                                <th scope="col">KTP</th>
                                                <th scope="col">KK</th>
                                                <th scope="col">SIM A</th>
                                                <th scope="col">SIM C</th>
                                                <th scope="col">Ijazah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                            $q_bagian   = mysqli_query($connect, "SELECT * FROM tbl_pegawai, tbl_file WHERE tbl_file.id_file = tbl_pegawai.id_file AND tbl_file.id_file = '$id_file'") or die (mysqli_error($connect));
                                                            $j_data     = mysqli_num_rows($q_bagian);

                                                            if ($j_data == 0) {
                                                                echo "<tr><td id='tengah' colspan='4' align='center'>-- Tidak Ada Data --</td></tr>";
                                                            } else {
                                                                $no = 1;
                                                                while ($a_bag = mysqli_fetch_array($q_bagian)) { ?>
                                            <td id='tengah'>
                                                <?php echo $no; ?>
                                            </td>
                                            <td>
                                                <?php if ($a_bag['foto'] == NULL) { ?>
                                                <a href="&mod=add" data-toggle="modal" data-target="#ModalFoto" class="btn btn-outline-success"><i class="mdi mdi-upload">
                                                        Tambah</i>
                                                </a>
                                                <?php    
                                                            } else { ?>
                                                <a class=" image-popup-vertical-fit el-link" href="<?php echo $a_bag['foto']; ?>">
                                                    <?php echo $a_bag['foto']; ?></a><br><br><a href="&mod=add" data-toggle="modal" data-target="#ModalFoto" class="btn btn-outline-success"><i class="mdi mdi-upload">
                                                        Ubah</i>
                                                </a>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <?php if ($a_bag['ktp'] == NULL) { ?>
                                                <a href="&mod=add" data-toggle="modal" data-target="#ModalKTP" class="btn btn-outline-success"><i class="mdi mdi-upload">
                                                        Tambah</i>
                                                </a>
                                                <?php    
                                                            } else { ?>
                                                <a class=" image-popup-vertical-fit el-link" href="<?php echo $a_bag['ktp']; ?>">
                                                    <?php echo $a_bag['ktp']; ?></a><br><br><a href="&mod=add" data-toggle="modal" data-target="#ModalKTP" class="btn btn-outline-success"><i class="mdi mdi-upload">
                                                        Ubah</i>
                                                </a>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <?php if ($a_bag['kk'] == NULL) { ?>
                                                <a href="&mod=add" data-toggle="modal" data-target="#ModalKK" class="btn btn-outline-success"><i class="mdi mdi-upload">
                                                        Tambah</i>
                                                </a>
                                                <?php    
                                                            } else { ?>
                                                <a class=" image-popup-vertical-fit el-link" href="<?php echo $a_bag['kk']; ?>">
                                                    <?php echo $a_bag['kk']; ?></a><br><br><a href="&mod=add" data-toggle="modal" data-target="#ModalKK" class="btn btn-outline-success"><i class="mdi mdi-upload">
                                                        Ubah</i>
                                                </a>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <?php if ($a_bag['sim_a'] == NULL) { ?>
                                                <a href="&mod=add" data-toggle="modal" data-target="#ModalSIM_A" class="btn btn-outline-success"><i class="mdi mdi-upload">
                                                        Tambah</i>
                                                </a>
                                                <?php    
                                                            } else { ?>
                                                <a class=" image-popup-vertical-fit el-link" href="<?php echo $a_bag['sim_a']; ?>">
                                                    <?php echo $a_bag['sim_a']; ?></a><br><br><a href="&mod=add" data-toggle="modal" data-target="#ModalSIM_A" class="btn btn-outline-success"><i class="mdi mdi-upload">
                                                        Ubah</i>
                                                </a>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <?php if ($a_bag['sim_c'] == NULL) { ?>
                                                <a href="&mod=add" data-toggle="modal" data-target="#ModalSIM_C" class="btn btn-outline-success"><i class="mdi mdi-upload">
                                                        Tambah</i>
                                                </a>
                                                <?php    
                                                            } else { ?>
                                                <a class=" image-popup-vertical-fit el-link" href="<?php echo $a_bag['sim_c']; ?>">
                                                    <?php echo $a_bag['sim_c']; ?></a><br><br><a href="&mod=add" data-toggle="modal" data-target="#ModalSIM_C" class="btn btn-outline-success"><i class="mdi mdi-upload">
                                                        Ubah</i>
                                                </a>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <?php if ($a_bag['ijazah'] == NULL) { ?>
                                                <a href="&mod=add" data-toggle="modal" data-target="#ModalIjazah" class="btn btn-outline-success"><i class="mdi mdi-upload">
                                                        Tambah</i>
                                                </a>
                                                <?php    
                                                            } else { ?>
                                                <a class=" image-popup-vertical-fit el-link" href="<?php echo $a_bag['ijazah']; ?>">
                                                    <?php echo $a_bag['ijazah']; ?></a><br><br><a href="&mod=add" data-toggle="modal" data-target="#ModalIjazah" class="btn btn-outline-success"><i class="mdi mdi-upload">
                                                        Ubah</i>
                                                </a>
                                                <?php } ?>
                                            </td>
                                            <?php
                                                            $no++;
                                                                }   
                                                            }
                                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane p-20" id="messages" role="tabpanel"><br>
                    <div class="accordion" id="accordionExample">
                        <div class="card m-b-0">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="mdi mdi-arrow-right-bold-circle" aria-hidden="true"></i>
                                        <span>Tentang Saya</span>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <?php
                                        
                                                    $view = mysqli_query($connect, "SELECT * FROM tbl_pegawai, tbl_about_me WHERE tbl_pegawai.nik = tbl_about_me.nip AND  tbl_pegawai.nik= '$id_daftar'");
                                                                
                                                    while ($row = mysqli_fetch_array($view)) {        
                                                ?>
                                <div class="card-body">
                                    <?php
                                                        if ($row['about'] == NULL) { ?>
                                    <a href="&mod=add" data-toggle="modal" data-target="#ModalAddAbout" class="btn btn-success"><i class="mdi mdi-pencil"> Tambah </i></a>
                                    <?php include ('user/_data-pribadi/modal-add-about.php'); ?>
                                    <?php    
                                                        } else { ?>
                                    <?php echo $row['about']; ?><br><br>
                                    <a href="&mod=add" data-toggle="modal" data-target="#ModalEditAbout" class="btn btn-info"><i class="fa fa-edit"> Edit </i></a>
                                    <?php include ('user/_data-pribadi/modal-edit-about.php'); ?>
                                    <?php
                                                        }
                                                    ?>
                                </div>
                                <?php
                                                    }
                                                ?>
                            </div>
                        </div>
                        <div class="card m-b-0 border-top">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="mdi mdi-arrow-right-bold-circle" aria-hidden="true"></i>
                                        <span>Pendidikan</span>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <h5 class="card-title m-b-0">Data Pendidikan
                                        <?php echo $p_nama; ?>
                                    </h5>
                                    <a href="&mod=add" data-toggle="modal" data-target="#ModalAddPendidikan" class="btn btn-warning"><i class="mdi mdi-pencil"> Tambah </i></a><br><br>
                                    <?php include ('user/_data-pribadi/modal-add-pendidikan.php'); ?>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Jenjang</th>
                                                    <th scope="col">Nama Instansi</th>
                                                    <th scope="col">Tahun Ajaran</th>
                                                    <th scope="col">Masa Didik</th>
                                                    <th scope="col">Tahun Lulus</th>
                                                    <th scope="col">Ket. Ijazah</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                            $q_bagian   = mysqli_query($connect, "SELECT * FROM tbl_pegawai, tbl_detail_pendidikan WHERE tbl_detail_pendidikan.nip = tbl_pegawai.nik AND tbl_pegawai.nik = '$id_daftar'") or die (mysqli_error($connect));
                                                            $j_data     = mysqli_num_rows($q_bagian);

                                                            if ($j_data == 0) {
                                                                echo "<tr><td id='tengah' colspan='8' align='center'>-- Tidak Ada Data --</td></tr>";
                                                            } else {
                                                                $no = 1;
                                                                while ($a_bag = mysqli_fetch_array($q_bagian)) { ?>
                                                <td id='tengah'>
                                                    <?php echo $no; ?>
                                                </td>
                                                <td id='tengah'>
                                                    <?php echo $a_bag['jenjang']; ?>
                                                </td>
                                                <td id='tengah'>
                                                    <?php echo $a_bag['nama_instansi']; ?>
                                                </td>
                                                <td id='tengah'>
                                                    <?php echo $a_bag['tahun_ajaran']; ?>
                                                </td>
                                                <td id='tengah'>
                                                    <?php echo $a_bag['masa_didik']; ?> Tahun</td>
                                                <td id='tengah'>
                                                    <?php echo $a_bag['tahun_lulus']; ?>
                                                </td>
                                                <td id='tengah'>
                                                    <?php echo $a_bag['ket_ijazah']; ?>
                                                </td>
                                                <td id='tengah'>
                                                    <a href="&mod=add" data-toggle="modal" data-target="#ModalEditPendidikan<?php echo $a_bag['id']; ?>"><span class="fa fa-edit"></span></a> |
                                                    <a href="config_config_cs/del-pendidikan-con.php?id=<?php echo $a_bag['id']; ?>&nip=<?php echo $a_bag['nip']; ?>" title="Hapus Data" onclick='/return konfirmasi("
                                                                Menghapus data<?php echo $a_bag[' id'];?>")'><span class="fa fa-trash"></span></a></tr>
                                                    <?php include ('user/_data-pribadi/modal-edit-pendidikan.php'); ?>
                                                    <?php
                                                            $no++;
                                                                }   
                                                            }
                                                        ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-b-0 border-top">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="mdi mdi-arrow-right-bold-circle" aria-hidden="true"></i>
                                        <span>Pekerjaan</span>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <h5 class="card-title m-b-0">Data Pengalaman Kerja
                                        <?php echo $p_nama; ?>
                                    </h5>
                                    <a href="&mod=add" data-toggle="modal" data-target="#ModalAddPekerjaan" class="btn btn-warning"><i class="mdi mdi-pencil"> Tambah </i></a><br><br>
                                    <?php include ('user/_data-pribadi/modal-add-pekerjaan.php'); ?>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Nama Instansi</th>
                                                    <th scope="col">Jabatan</th>
                                                    <th scope="col">Lama Kerja</th>
                                                    <th scope="col">Dari</th>
                                                    <th scope="col">Sampai</th>
                                                    <th scope="col">Deskripsi Pekerjaan</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                            $q_bagian   = mysqli_query($connect, "SELECT * FROM tbl_pegawai, tbl_pengalaman_kerja WHERE tbl_pengalaman_kerja.nip = tbl_pegawai.nik AND tbl_pegawai.nik = '$id_daftar'") or die (mysqli_error($connect));
                                                            $j_data     = mysqli_num_rows($q_bagian);

                                                            if ($j_data == 0) {
                                                                echo "<tr><td id='tengah' colspan='8' align='center'>-- Tidak Ada Data --</td></tr>";
                                                            } else {
                                                                $no = 1;
                                                                while ($a_bag = mysqli_fetch_array($q_bagian)) { ?>
                                                <td id='tengah'>
                                                    <?php echo $no; ?>
                                                </td>
                                                <td id='tengah'>
                                                    <?php echo $a_bag['nama_instansi']; ?>
                                                </td>
                                                <td id='tengah'>
                                                    <?php echo $a_bag['jabatan']; ?>
                                                </td>
                                                <td id='tengah'>
                                                    <?php echo $a_bag['lama_kerja']; ?>
                                                    <?php echo $a_bag['ket'];?>
                                                </td>
                                                <td id='tengah'>
                                                    <?php echo tgl_indo($a_bag['dari']); ?>
                                                </td>
                                                <td id='tengah'>
                                                    <?php echo tgl_indo($a_bag['sampai']); ?>
                                                </td>
                                                <td id='tengah'>
                                                    <?php echo $a_bag['deskripsi']; ?>
                                                </td>
                                                <td id='tengah'>
                                                    <a href="&mod=add" data-toggle="modal" data-target="#ModalEditPekerjaan<?php echo $a_bag['id']; ?>"><span class="fa fa-edit"></span></a> |
                                                    <a href="config_config_cs/del-pekerjaan-con.php?id=<?php echo $a_bag['id']; ?>&nip=<?php echo $a_bag['nip']; ?>" title="Hapus Data" onclick='/return konfirmasi("
                                                                Menghapus data<?php echo $a_bag[' id'];?>")'><span class='fa fa-trash'></span></a></tr>
                                                    <?php include ('user/_data-pribadi/modal-edit-pekerjaan.php'); ?>
                                                    <?php
                                                            $no++;
                                                                }   
                                                            }
                                                        ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-b-0 border-top">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <i class="mdi mdi-arrow-right-bold-circle" aria-hidden="true"></i>
                                        <span>Skill Dan Prestasi</span>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    <h5 class="card-title m-b-0">Data Kemampuan / Skill
                                        <?php echo $p_nama; ?>
                                    </h5>
                                    <a href="&mod=add" data-toggle="modal" data-target="#ModalAddSkill" class="btn btn-warning"><i class="mdi mdi-pencil"> Tambah </i></a><br><br>
                                    <?php include ('user/_data-pribadi/modal-add-skill.php'); ?>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Nama Skill</th>
                                                    <th scope="col">Kompetensi</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                            $q_bagian   = mysqli_query($connect, "SELECT * FROM tbl_pegawai, tbl_skil WHERE tbl_skil.nip = tbl_pegawai.nik AND tbl_pegawai.nik = '$id_daftar'") or die (mysqli_error($connect));
                                                            $j_data     = mysqli_num_rows($q_bagian);

                                                            if ($j_data == 0) {
                                                                echo "<tr><td id='tengah' colspan='4' align='center'>-- Tidak Ada Data --</td></tr>";
                                                            } else {
                                                                $no = 1;
                                                                while ($a_bag = mysqli_fetch_array($q_bagian)) { ?>
                                                <td id='tengah'>
                                                    <?php echo $no; ?>
                                                </td>
                                                <td id='tengah'>
                                                    <?php echo $a_bag['skil']; ?>
                                                </td>
                                                <td id='tengah'>
                                                    <?php echo $a_bag['kompetensi']; ?>
                                                </td>
                                                <td id='tengah'>
                                                    <a href="&mod=add" data-toggle="modal" data-target="#ModalEditSkill<?php echo $a_bag['id']; ?>"><span class="fa fa-edit"></span></a> |
                                                    <a href="config_config_cs/del-skill-con.php?id=<?php echo $a_bag['id']; ?>&nip=<?php echo $a_bag['nip']; ?>" title="Hapus Data" onclick='/return konfirmasi("
                                                                Menghapus data<?php echo $a_bag[' id'];?>")'><span class='fa fa-trash'></span></a></tr>
                                                    <?php include ('user/_data-pribadi/modal-edit-skill.php'); ?>
                                                    <?php
                                                            $no++;
                                                                }   
                                                            }
                                                        ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <h5 class="card-title m-b-0">Data Kemampuan Berbahasa
                                        <?php echo $p_nama; ?>
                                    </h5>
                                    <a href="&mod=add" data-toggle="modal" data-target="#ModalAddSkillBahasa" class="btn btn-warning"><i class="mdi mdi-pencil"> Tambah </i></a><br><br>
                                    <?php include ('user/_data-pribadi/modal-add-skill-bahasa.php'); ?>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Bahasa</th>
                                                    <th scope="col">Kompetensi</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                            $q_bagian   = mysqli_query($connect, "SELECT * FROM tbl_pegawai, tbl_skil_bahasa WHERE tbl_skil_bahasa.nip = tbl_pegawai.nik AND tbl_pegawai.nik = '$id_daftar'") or die (mysqli_error($connect));
                                                            $j_data     = mysqli_num_rows($q_bagian);

                                                            if ($j_data == 0) {
                                                                echo "<tr><td id='tengah' colspan='4' align='center'>-- Tidak Ada Data --</td></tr>";
                                                            } else {
                                                                $no = 1;
                                                                while ($a_bag = mysqli_fetch_array($q_bagian)) { ?>
                                                <td id='tengah'>
                                                    <?php echo $no; ?>
                                                </td>
                                                <td id='tengah'>
                                                    <?php echo $a_bag['bahasa']; ?>
                                                </td>
                                                <td id='tengah'>
                                                    <?php echo $a_bag['kompetensi']; ?>
                                                </td>
                                                <td id='tengah'>
                                                    <a href="&mod=add" data-toggle="modal" data-target="#ModalEditSkillBahasa<?php echo $a_bag['id']; ?>"><span class="fa fa-edit"></span></a> |
                                                    <a href="config_config_cs/del-skill-bahasa-con.php?id=<?php echo $a_bag['id']; ?>&nip=<?php echo $a_bag['nip']; ?>" title="Hapus Data" onclick='/return konfirmasi("
                                                                Menghapus data<?php echo $a_bag[' id'];?>")'><span class='fa fa-trash'></span></a></tr>
                                                    <?php include ('user/_data-pribadi/modal-edit-skill-bahasa.php'); ?>
                                                    <?php
                                                            $no++;
                                                                }   
                                                            }
                                                        ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <h5 class="card-title m-b-0">Data Prestasi
                                        <?php echo $p_nama; ?>
                                    </h5>
                                    <a href="&mod=add" data-toggle="modal" data-target="#ModalAddPrestasi" class="btn btn-warning"><i class="mdi mdi-pencil"> Tambah </i></a><br><br>
                                    <?php include ('user/_data-pribadi/modal-add-prestasi.php'); ?>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Ajang</th>
                                                    <th scope="col">tanggal Kejuaraan</th>
                                                    <th scope="col">Ket</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                            $q_bagian   = mysqli_query($connect, "SELECT * FROM tbl_pegawai, tbl_prestasi WHERE tbl_prestasi.nip = tbl_pegawai.nik AND tbl_pegawai.nik = '$id_daftar'") or die (mysqli_error($connect));
                                                            $j_data     = mysqli_num_rows($q_bagian);

                                                            if ($j_data == 0) {
                                                                echo "<tr><td id='tengah' colspan='5' align='center'>-- Tidak Ada Data --</td></tr>";
                                                            } else {
                                                                $no = 1;
                                                                while ($a_bag = mysqli_fetch_array($q_bagian)) { ?>
                                                <td id='tengah'>
                                                    <?php echo $no; ?>
                                                </td>
                                                <td id='tengah'>
                                                    <?php echo $a_bag['nama_prestasi']; ?>
                                                </td>
                                                <td id='tengah'>
                                                    <?php echo tgl_indo($a_bag['tanggal']); ?>
                                                </td>
                                                <td id='tengah'>
                                                    <?php echo $a_bag['ket']; ?>
                                                </td>
                                                <td id='tengah'>
                                                    <a href="&mod=add" data-toggle="modal" data-target="#ModalEditPrestasi<?php echo $a_bag['id']; ?>"><span class="fa fa-edit"></span></a> |
                                                    <a href="config_config_cs/del-prestasi-con.php?id=<?php echo $a_bag['id']; ?>&nip=<?php echo $a_bag['nip']; ?>" title="Hapus Data" onclick='/return konfirmasi("
                                                                Menghapus data<?php echo $a_bag[' id'];?>")'><span class='fa fa-trash'></span></a></tr>
                                                    <?php include ('user/_data-pribadi/modal-edit-prestasi.php'); ?>
                                                    <?php
                                                            $no++;
                                                                }   
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
                <div class="tab-pane  p-20" id="password" role="tabpanel">
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title m-b-0">Ubah Password
                                        <?php echo $p_nama; ?>
                                    </h5><br>
                                    <form role="form" action="config_config_cs/ubah-password-con.php" method="POST" class="form-horizontal">
                                        <input type="hidden" name="id" value="<?php echo $nip; ?>">
                                        <div class="form-group">
                                            <div class="row">
                                                <label for="password">Password Baru :</label>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label for="password">Konfirmasi Password :</label>
                                                <input type="password" class="form-control" name="password2">
                                            </div>
                                        </div>
                                        <div class="form-action">
                                            <div class="row">
                                                <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
<script src="assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="assets/libs/magnific-popup/meg.init.js"></script>
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
<!-- CKEditor -->
<script src="assets/libs/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
if (typeof CKEDITOR == 'undefined') {
    document.write(
        'CKEditor not _found');
} else {
    var editor = CKEDITOR.replace('detail');
    CKFinder.setupCKEditor(editor, '');
}
</script>
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
    format: "yyyy",
    autoclose: true,
    viewMode: "years",
    minViewMode: "years"
});
jQuery('#datepicker-autoclose5').datepicker({
    format: "yyyy",
    autoclose: true,
    viewMode: "years",
    minViewMode: "years"
});
jQuery('#datepicker-autoclose6').datepicker({
    format: "yyyy",
    autoclose: true,
    viewMode: "years",
    minViewMode: "years"
});
jQuery('#datepicker-autoclose7').datepicker({
    format: "yyyy",
    autoclose: true,
    viewMode: "years",
    minViewMode: "years"
});
jQuery('#datepicker-autoclose8').datepicker({
    format: "yyyy",
    autoclose: true,
    viewMode: "years",
    minViewMode: "years"
});
jQuery('#datepicker-autoclose9').datepicker({
    format: "yyyy-mm-dd",
    autoclose: true,
    todayHighlight: true
});
jQuery('#datepicker-autoclose10').datepicker({
    format: "yyyy-mm-dd",
    autoclose: true,
    todayHighlight: true
});
var quill = new Quill('#editor', {
    theme: 'snow'
});
var slider = new Slider("#ex8", {
    tooltip: 'always'
});
</script>
<?php include ('config_config_cs/fungsi_toast_notifikasi_tambah-pegawai.php'); ?>
<?php include ('config_config_cs/fungsi_toast_notifikasi_upload.php'); ?>
<?php include ('config_config_cs/fungsi_toast_notifikasi_about.php'); ?>