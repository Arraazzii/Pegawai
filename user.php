<!DOCTYPE html>
<html lang="en">

<?php include('config_config_cs/fungsi_ambil_halaman.php'); ?>
<?php
    $nip=$_SESSION['nip'];
    $level = $_SESSION['leveluser'];
    $sesi_nip           = isset($_SESSION['nip']) ? $_SESSION['nip'] : NULL;
    if ($sesi_username != NULL || !empty($sesi_username) ||$_SESSION['leveluser']=='ADMIN' ||$_SESSION['leveluser']=='SUPER ADMIN' ||$_SESSION['leveluser']=='USER') {
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $ambil_gambar; ?>" />
    <title>Kepegawaian - PT. Lumbung Riang Communication</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="dist/css/step.css" rel="stylesheet">
    <link href="assets/libs/toastr/build/toastr.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo $ambilcss1; ?>" />
    <link rel="stylesheet" href="<?php echo $ambilcss2; ?>" />
    <link rel="stylesheet" href="<?php echo $ambilcss3; ?>" />
    <link rel="stylesheet" href="<?php echo $ambilcss4; ?>" />
    <link rel="stylesheet" href="<?php echo $ambilcss5; ?>" />
    <link rel="stylesheet" href="<?php echo $ambilcss6; ?>" />
    <link rel="stylesheet" href="<?php echo $ambilcss7; ?>" />
    <link rel="stylesheet" href="<?php echo $ambilcss8; ?>" />
    <link rel="stylesheet" href="<?php echo $ambilcss9; ?>" />
    <link rel="stylesheet" href="<?php echo $ambilcss10; ?>" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar hidden-print" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="#"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="?view=halaman-utama&id=9973838hupa&name=pegaaplication&dashboard">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo-icon.png" alt="homepage" class="light-logo" />

                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="assets/images/Logo-text.png" alt="homepage" class="light-logo" />

                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="#" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="#" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="?view=my-profile&id=9973839hupa&name=pegaaplication&my-profile"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="?view=logout&id=9973840hupa&name=pegaaplication&Logout"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar hidden-print" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="?view=halaman-utama&id=9973838hupa&name=pegaaplication&dashboard" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-desktop-mac"></i><span class="hide-menu">Referensi </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="?view=jabatan&mod=add&id=9973841hupa&name=pegaaplication&jabatan" class="sidebar-link"><i class="mdi mdi-tie"></i><span class="hide-menu"> Jabatan </span></a></li>
                                <li class="sidebar-item"><a href="?view=divisi&id=9973842hupa&name=pegaaplication&divisi" class="sidebar-link"><i class="mdi mdi-pocket"></i><span class="hide-menu"> Divisi </span></a></li>
                                <li class="sidebar-item"><a href="?view=agama&id=9973843hupa&name=pegaaplication&agama" class="sidebar-link"><i class="mdi mdi-book-open"></i><span class="hide-menu"> Agama </span></a></li>
                                <li class="sidebar-item"><a href="?view=absen&id=9973844hupa&name=pegaaplication&absen" class="sidebar-link"><i class="mdi mdi-human"></i><span class="hide-menu"> Absen </span></a></li>
                                <li class="sidebar-item"><a href="?view=cuti&id=9973845hupa&name=pegaaplication&cuti" class="sidebar-link"><i class="mdi mdi-calendar"></i><span class="hide-menu"> Cuti </span></a></li>
                                <li class="sidebar-item"><a href="?view=status-pegawai&id=9973846hupa&name=pegaaplication&statusPegawai" class="sidebar-link"><i class="mdi mdi-contacts"></i><span class="hide-menu"> Status Pegawai </span></a></li>
                                <li class="sidebar-item"><a href="?view=email-pegawai&id=9973848hupa&name=pegaaplication&emailPegawai" class="sidebar-link"><i class="mdi mdi-email"></i><span class="hide-menu"> Email Pegawai </span></a></li>
                                <li class="sidebar-item"><a href="?view=bank&id=9973849hupa&name=pegaaplication&bank" class="sidebar-link"><i class="mdi mdi-credit-card"></i><span class="hide-menu"> Bank Transfer </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="?view=data-pegawai&id=9973850hupa&name=pegaaplication&pegawai" aria-expanded="false"><i class="mdi mdi-clipboard-account"></i><span class="hide-menu">Pegawai</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Cuti dan Absensi </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="?view=daftar-cuti&id=9973851hupa&name=pegaaplication&daftarCuti" class="sidebar-link"><i class="mdi mdi-calendar"></i><span class="hide-menu"> Data Cuti </span></a></li>
                                <li class="sidebar-item"><a href="?view=daftar-absen&id=9973852hupa&name=pegaaplication&daftarAbsen" class="sidebar-link"><i class="mdi mdi-human"></i><span class="hide-menu"> Data Absen </span></a></li>
                                <li class="sidebar-item"><a href="?view=daftar-lembur&id=9973853hupa&name=pegaaplication&daftarLembur" class="sidebar-link"><i class="mdi mdi-clock"></i><span class="hide-menu"> Lembur </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-cash"></i><span class="hide-menu">Finance </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="?view=gaji-pegawai&id=9973854hupa&name=pegaaplication&gajiPegawai" class="sidebar-link"><i class="mdi mdi-credit-card"></i><span class="hide-menu"> Gaji Pegawai </span></a></li>
                                <li class="sidebar-item"><a href="?view=lembur&id=9973855hupa&name=pegaaplication&uangLembur" class="sidebar-link"><i class="mdi mdi-clock"></i><span class="hide-menu"> Lembur </span></a></li>
                                <li class="sidebar-item"><a href="?view=pajak&id=9973856hupa&name=pegaaplication&Pajak" class="sidebar-link"><i class="mdi mdi-credit-card-off"></i><span class="hide-menu"> Pajak </span></a></li>
                                <li class="sidebar-item"><a href="?view=pinjaman&id=9973857hupa&name=pegaaplication&pinjaman" class="sidebar-link"><i class="mdi mdi-credit-card-plus"></i><span class="hide-menu"> Pinjaman </span></a></li>
                                <li class="sidebar-item"><a href="?view=potongan&id=9973858hupa&name=pegaaplication&potongan" class="sidebar-link"><i class="mdi mdi-credit-card-off"></i><span class="hide-menu"> Potongan </span></a></li>
                                <li class="sidebar-item"><a href="?view=check-out&id=9973859hupa&name=pegaaplication&prosesPayroll" class="sidebar-link"><i class="mdi mdi-cash-multiple"></i><span class="hide-menu"> Proses Payroll </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-bookmark"></i><span class="hide-menu">More Pages </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="?view=list-user&id=9973860hupa&name=pegaaplication&listUser" class="sidebar-link"><i class="mdi mdi-human-male-female"></i><span class="hide-menu"> List User </span></a></li>
                                <li class="sidebar-item"><a href="?view=pengumuman&id=9973861hupa&name=pegaaplication&pengumuman" class="sidebar-link"><i class="mdi mdi-calendar-plus"></i><span class="hide-menu"> Pengumuman </span></a></li>
                                <li class="sidebar-item"><a href="?view=logout&id=9973840hupa&name=pegaaplication&Logout" class="sidebar-link"><i class="fa fa-power-off m-r-5 m-l-5"></i><span class="hide-menu"> Logout </span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb hidden-print">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title"><?php echo $nav; ?></h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="?view=halaman-utama&id=9973838hupa&name=pegaaplication&dashboard">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo $nav; ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

             <?php include $ambil_halaman; ?>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="hidden-print">
              <div class="footer_fixed footer text-center">
                2018 &copy All Rights Reserved by PT. Lumbung Riang Communication. Designed and Developed by <a href="https://lrcom.co.id" target="_blank">PT. Lumbung Riang Communication</a>.
              </div>
              <div class="clearfix"></div>
            </footer>
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

    <script src="<?php echo $ambiljs1; ?>"></script>
    <script src="<?php echo $ambiljs2; ?>"></script>
    <script src="<?php echo $ambiljs3; ?>"></script>
    <script src="<?php echo $ambiljs4; ?>"></script>
    <script src="<?php echo $ambiljs5; ?>"></script>
    <script src="<?php echo $ambiljs6; ?>"></script>
    <script src="<?php echo $ambiljs7; ?>"></script>
    <script src="<?php echo $ambiljs8; ?>"></script>
    <script src="<?php echo $ambiljs9; ?>"></script>
    <script src="<?php echo $ambiljs10; ?>"></script>
    <script src="<?php echo $ambiljs11; ?>"></script>
    <script src="<?php echo $ambiljs12; ?>"></script>
    <script src="<?php echo $ambiljs13; ?>"></script>
    <script src="<?php echo $ambiljs14; ?>"></script>
    <script src="<?php echo $ambiljs15; ?>"></script>
    <script src="<?php echo $ambiljs16; ?>"></script>
    <script src="<?php echo $ambiljs17; ?>"></script>
    <script src="<?php echo $ambiljs18; ?>"></script>
    <script src="<?php echo $ambiljs19; ?>"></script>
    <script src="<?php echo $ambiljs20; ?>"></script>

        <!-- this page js -->
    <script src="assets/libs/toastr/build/toastr.min.js"></script>

    <?php include ('config_config_cs/fungsi_toast_notifikasi_login.php'); ?>
</body>

</html>
<?php
} else {
    session_destroy(); ?>
    <script type="text/javascript">
        window.location="?view=login&id=9973801hupa&name=pegaaplication&Silahkan Login";
    </script>
<?php
    }
?>
