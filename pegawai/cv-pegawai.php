<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Kepegawaian - PT. Lumbung Riang Communication</title>
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../assets/extra-libs/multicheck/multicheck.css">
    <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
    <link href="../assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body style="background-color: #323743; background: #eaeaea; margin: 20px;" onload="window.print();">
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid" style="padding: 10px;">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <?php
                error_reporting(0);

                include "../config_config_cs/fungsi_indo_tgl.php";
                include "../config_config_cs/koneksi-data-peg-lr-com.php";

                    $id_daftar  = isset($_GET['nip']) ? $_GET['nip'] : "";
                                        
                    $q_data_edit  = mysqli_query($connect, "SELECT * FROM tbl_pegawai, tbl_kelahiran, tbl_jabatan, tbl_no_telp, tbl_status, tbl_alamat, tbl_tabungan,  tbl_dokumen, tbl_file, tbl_data_email_pegawai, tbl_data_jabatan, tbl_data_divisi, tbl_data_status_pegawai, tbl_data_status_kawin, tbl_data_agama, tbl_data_bank WHERE tbl_pegawai.id_lahir = tbl_kelahiran.id_lahir AND tbl_pegawai.id_jabatan = tbl_jabatan.id_jabatan AND tbl_pegawai.id_telp = tbl_no_telp.id_telp AND tbl_pegawai.id_status = tbl_status.id_status AND tbl_pegawai.id_alamat = tbl_alamat.id_alamat AND tbl_pegawai.id_tabungan = tbl_tabungan.id_tabungan AND tbl_data_email_pegawai.nip_pegawai = tbl_pegawai.nik AND tbl_data_jabatan.kode_jabatan = tbl_jabatan.jabatan AND tbl_data_divisi.kode_divisi = tbl_jabatan.divisi AND tbl_data_status_kawin.id_status_kawin = tbl_status.sts_kawin AND tbl_data_status_pegawai.kode_status = tbl_status.status_peg AND tbl_data_agama.kode_agama = tbl_kelahiran.agama AND tbl_dokumen.id_dokumen = tbl_pegawai.id_dokumen AND tbl_file.id_file = tbl_pegawai.id_file AND tbl_data_bank.kode_bank = tbl_tabungan.bank AND tbl_pegawai.nik= '$id_daftar'") or die (mysqli_error($connect));

                          $a_data_edit  = mysqli_fetch_array($q_data_edit);
                          
                            $id_lahir       = $a_data_edit['id_lahir']; 
                            $id_alamat      = $a_data_edit['id_alamat'];
                            $id_jabatan     = $a_data_edit['id_jabatan']; 
                            $id_telp        = $a_data_edit['id_telp'];
                            $id_status      = $a_data_edit['id_status'];  
                            $id_tabungan    = $a_data_edit['id_tabungan'];
                            $id_pendidikan  = $a_data_edit['id_pendidikan'];
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
                                                                        
                                                                        
                ?>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="comment-widgets scrollable">
                                <div class="row el-element-overlay">
                                    <div class="card">
                                        <div class="el-card-item">
                                            <?php
                                                if ($p_foto == NULL) { ?>
                                                    <div class="el-card-avatar el-overlay-1"> <img src="../assets/images/users/1.jpg" alt="user" />
                                                        <div class="el-overlay">
                                                            <ul class="list-style-none el-info">
                                                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../assets/images/users/1.jpg"><i class="mdi mdi-magnify-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                            <?php
                                                } else { ?>
                                                    <div class="el-card-avatar el-overlay-1"> <img src="../<?php echo $p_foto; ?>" />
                                                        <div class="el-overlay">
                                                            <ul class="list-style-none el-info">
                                                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../<?php echo $p_foto; ?>"><i class="mdi mdi-magnify-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                            <?php    
                                                }
                                            ?>
                                            <div class="card-body">
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
                                                    <li><i class="fas fa-calendar user-profile-icon"></i> <?php echo $p_tmpt_lahir; ?>, <?php echo tgl_indo($p_tgl_lahir); ?>
                                                    </li><br>

                                                    <li><i class="fas fa-map-marker-alt user-profile-icon"></i> <?php echo $p_kota; ?>, <?php echo $p_provinsi; ?>, INDONESIA
                                                    </li><br>

                                                    <li>
                                                        <i class="fas fa-briefcase user-profile-icon"></i> <?php echo $p_jabatan; ?> - <?php echo $p_divisi; ?>
                                                    </li><br>

                                                    <li class="m-top-xs">
                                                        <i class="fas fa-external-link-alt user-profile-icon"></i>
                                                        <a href="#"> <?php echo $p_email; ?><?php echo $p_domain; ?></a>
                                                    </li><br>
                                                    <li class="m-top-xs">
                                                        <i class="mdi mdi-phone user-profile-icon"></i>
                                                        <a href="#"> <?php echo $p_no_hp; ?></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>                            
                        <!-- toggle part -->
                            <div id="accordian-4">
                                <div class="card m-t-30">
                                    <div class="card-body">
                                        <h4 class="card-title">Skill</h4>
                                        <?php
                                        
                                            $view = mysqli_query($connect, "SELECT * FROM tbl_pegawai, tbl_skil WHERE tbl_pegawai.nik = tbl_skil.nip AND tbl_pegawai.nik= '$id_daftar'");
                                                    
                                            while ($row = mysqli_fetch_array($view)) {        
                                        ?>
                                        <div class="m-t-25 border-top"><br>
                                            <div class="d-flex no-block align-items-center">
                                                <span><?php echo $row['skil']; ?></span>
                                                <div class="ml-auto">
                                                    <span><?php echo $row['kompetensi']; ?>%</span>
                                                </div>
                                            </div>
                                            <div class="progress">   
                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: <?php echo $row['kompetensi']?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div> 
                                            </div>
                                        </div>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title m-b-0">Tentang Saya</h4><hr>
                                <ul class="list-style-none">
                                    <?php
                                        
                                        $view = mysqli_query($connect, "SELECT * FROM tbl_pegawai, tbl_about_me WHERE tbl_pegawai.nik = tbl_about_me.nip AND  tbl_pegawai.nik= '$id_daftar'");
                                                    
                                        while ($row = mysqli_fetch_array($view)) {        
                                    ?>
                                    <li class="d-flex no-block card-body">
                                        <div>
                                            <a href="#" class="m-b-0 font-large p-0"><?php echo $row['about']; ?></a>
                                        </div>
                                    </li>
                                    <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title m-b-0">Pendidikan</h4><hr>
                                <ul class="list-style-none">
                                    <?php
                                        
                                        $view = mysqli_query($connect, "SELECT * FROM tbl_pegawai, tbl_detail_pendidikan WHERE tbl_detail_pendidikan.nip = tbl_pegawai.nik AND  tbl_pegawai.nik= '$id_daftar'");
                                                    
                                        while ($row = mysqli_fetch_array($view)) {        
                                    ?>
                                    <li class="d-flex no-block card-body">
                                        <i class="mdi mdi-school w-30px m-t-5"></i>
                                        <div>
                                            <a href="#" class="m-b-0 font-medium p-0"><?php echo $row['nama_instansi']; ?></a>
                                            <span class="text-muted">Telah Menyelesaikan Pendidikan Di <?php echo $row['nama_instansi']; ?> Dengan Baik Pada Tahun <?php echo $row['tahun_ajaran']; ?></span>
                                        </div>
                                        <div class="ml-auto">
                                            <div class="tetx-right">
                                                <h5 class="text-muted m-b-0"><?php echo $row['masa_didik']; ?></h5>
                                                <span class="text-muted font-16">THN</span>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    
                         <!-- card new -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title m-b-0">Pengalaman Pekerjaan</h4><hr>
                                <ul class="list-style-none">
                                    <?php
                                        
                                        $view = mysqli_query($connect, "SELECT * FROM tbl_pegawai, tbl_pengalaman_kerja WHERE tbl_pegawai.nik = tbl_pengalaman_kerja.nip AND tbl_pegawai.nik= '$id_daftar'");
                                                    
                                        while ($row = mysqli_fetch_array($view)) {        
                                    ?>
                                    <li class="d-flex no-block card-body">
                                        <i class="fa fa-check-circle w-30px m-t-5"></i>
                                        <div>
                                            <a href="#" class="m-b-0 font-medium p-0"><?php echo $row['jabatan']; ?> - <?php echo $row['nama_instansi'] ?></a>
                                            <span class="text-danger"><i class="mdi mdi-calendar"> <?php echo $row['dari']; ?> - <?php echo $row['sampai']; ?></i></span><br>
                                            <span class="text-muted"><?php echo $row['deskripsi']; ?></span>
                                        </div>
                                        <div class="ml-auto">
                                            <div class="tetx-right">
                                                <h5 class="text-muted m-b-0"><?php echo $row['lama_kerja']; ?></h5>
                                                <span class="text-muted font-16"><?php if ($row['ket'] == 'HARI') { ?>
                                                    HARI
                                                <?php } elseif ($row['ket'] == 'BULAN') { ?>
                                                    BLN
                                                <?php } elseif ($row['ket'] == 'TAHUN') { ?>
                                                    THN
                                                <?php } ?></span>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>                        
                        <!-- card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Penguasaan Bahasa</h4>
                                <?php
                                        
                                            $view = mysqli_query($connect, "SELECT * FROM tbl_pegawai, tbl_skil_bahasa WHERE tbl_pegawai.nik = tbl_skil_bahasa.nip AND tbl_pegawai.nik= '$id_daftar'");
                                                    
                                            while ($row = mysqli_fetch_array($view)) {        
                                        ?>
                                        <div class="m-t-25 border-top"><br>
                                            <div class="d-flex no-block align-items-center">
                                                <span><?php echo $row['bahasa']; ?></span>
                                                <div class="ml-auto">
                                                    <span><?php echo $row['kompetensi']; ?>%</span>
                                                </div>
                                            </div>
                                            <div class="progress">   
                                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: <?php echo $row['kompetensi']?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div> 
                                            </div>
                                        </div>
                                        <?php
                                            }
                                        ?>
                            </div>
                        </div>
                                                 <!-- card new -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title m-b-0">Prestasi</h4><hr>
                                <ul class="list-style-none">
                                    <?php
                                            
                                        $view = mysqli_query($connect, "SELECT * FROM tbl_pegawai, tbl_prestasi WHERE tbl_pegawai.nik = tbl_prestasi.nip AND tbl_pegawai.nik= '$id_daftar'");
                                                        
                                        while ($row = mysqli_fetch_array($view)) {        
                                    ?>
                                    <li class="d-flex no-block card-body">
                                        <i class="mdi mdi-trophy w-30px m-t-5"></i>
                                        <div>
                                            <a href="#" class="m-b-0 font-medium p-0"><?php echo $row['ket']; ?> - <?php echo $row['nama_prestasi'] ?></a>                                                    <span class="text-danger"><i class="mdi mdi-calendar"> <?php echo tgl_indo($row['tanggal']); ?></i></span>
                                        </div>
                                    </li>
                                    <?php
                                        }
                                    ?>
                                </ul>
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
            <!-- ============================================================== -->
            <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="../assets/libs/magnific-popup/meg.init.js"></script>
</body>

</html>