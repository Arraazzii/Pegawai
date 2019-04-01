
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
    <link href="assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    

            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <div class="row hidden-print">
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
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Detail Data Pegawai</h5>
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
                                                    <h4 class="m-b-0 text-center"><?php echo $p_nama; ?></h4><hr>
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
                                                    
                                                    <li><i class="fas fa-map-marker-alt user-profile-icon"></i> <?php echo $p_kota; ?>, <?php echo $p_provinsi; ?>, INDONESIA
                                                    </li><br>

                                                    <li>
                                                      <i class="fas fa-briefcase user-profile-icon"></i> <?php echo $p_jabatan; ?> - <?php echo $p_divisi; ?>
                                                    </li><br>

                                                    <li class="m-top-xs">
                                                      <i class="fas fa-external-link-alt user-profile-icon"></i>
                                                      <a href="mailto:<?php echo $p_email; ?><?php echo $p_domain; ?>" target="_blank"> <?php echo $p_email; ?><?php echo $p_domain; ?></a>
                                                    </li><br>
                                                    <li class="m-top-xs">
                                                      <i class="mdi mdi-phone user-profile-icon"></i>
                                                      <a href="#"> <?php echo $p_no_hp; ?></a>
                                                    </li><br>
                                                    <li class="m-top-xs">
                                                        <i class="mdi mdi-calendar user-profile-icon"></i>
                                                        <a href="#"> <?php echo tgl_indo($p_tgl_masuk); ?></a>
                                                    </li><br>
                                                  </ul>
                                                  <center>
                                                      <a href="?view=edit-pegawai&id=997386799hupa&name=pegaaplication&editPegawai&nip=<?php echo $p_nip;?>" class="btn btn-outline-success" data-toggle="tooltip" title="Edit Data"><span class="fa fa-edit"></span></a>
                                                      <a href="pegawai/cv-pegawai.php?id=997386796hupa&name=pegaaplication&CVPegawai&nip=<?php echo $p_nip;?>" target="_blank" class="btn btn-outline-success" data-toggle="tooltip" title="Print CV"><span class="fas fa-print"></span></a>
                                                      <a href="javascript:history.back()" class="btn btn-outline-success" data-toggle="tooltip" title="Back"><span class="fa fa-arrow-left"></span></a>
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
                                                    <a href="#" class="m-b-0 font-medium p-0"> <?php echo $p_nip; ?></a>
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
                                                    <a href="#" class="m-b-0 font-medium p-0"> <?php echo $p_tmpt_lahir; ?>, <?php echo tgl_indo($p_tgl_lahir);?></a>
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
                                                    <a href="#" class="m-b-0 font-medium p-0"> <?php echo $p_agama; ?></a>
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
                                                    <a href="#" class="m-b-0 font-medium p-0"> <?php echo $p_status_peg; ?> - <?php echo $p_status_kawin; ?></a>
                                                    <span class="text-muted">Status Pegawai - Status Kawin</span>
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
                                                    <a href="#" class="m-b-0 font-medium p-0"> <?php echo tgl_indo($p_tgl_mulai_kontrak_1); ?> - <?php echo tgl_indo($p_tgl_selesai_kontrak_1); ?></a>
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
                                                    <a href="#" class="m-b-0 font-medium p-0"> <?php echo tgl_indo($p_tgl_mulai_kontrak_2); ?> - <?php echo tgl_indo($p_tgl_selesai_kontrak_2); ?></a>
                                                    <span class="text-muted">Tanggal Mulai Kontrak 2 - Tanggal Selesai Kontrak 2</span>
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
                                                    <a href="#" class="m-b-0 font-medium p-0"> <?php echo $p_nik; ?> - <?php echo $p_no_kk; ?></a>
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
                                                    <a href="#" class="m-b-0 font-medium p-0">  <?php echo $p_no_sim_a; ?> - <?php echo $p_no_sim_c; ?></a>
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
                                                                    <a href="#" class="m-b-0 font-medium p-0">  <?php echo $p_no_bpjs_kes; ?> - <?php echo $p_no_bpjs_tk; ?></a>
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
                                                    <a href="#" class="m-b-0 font-medium p-0">  <?php echo $p_nama_bank; ?> - <?php echo $p_no_rekening; ?></a>
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
