<?php
    $nip=$_SESSION['nip'];
    $level = $_SESSION['leveluser'];
    $sesi_nip = isset($_SESSION['nip']) ? $_SESSION['nip'] : NULL;
    if ($_SESSION['leveluser']=='ADMIN' ||$_SESSION['leveluser']=='SUPER ADMIN' ||$_SESSION['leveluser']=='USER'||$_SESSION['leveluser']=='ADMIN TEKNIS' ||$_SESSION['leveluser']=='ADMIN FINANCE' ||$_SESSION['leveluser']=='ADMIN GUDANG') {

        $view = mysqli_query($connect, "SELECT * FROM tbl_pegawai, tbl_user_lr, tbl_file WHERE tbl_user_lr.nip = tbl_pegawai.nik AND tbl_pegawai.id_file = tbl_file.id_file AND tbl_user_lr.nip = '$sesi_nip'");
                                                    
            $row = mysqli_fetch_array($view);
?>
<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="?view=halaman-utama&id=9973838hupa&name=pegaaplication&dashboard" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-clipboard-account"></i><span class="hide-menu">Data Pribadi</span></a>
    <ul aria-expanded="false" class="collapse  first-level">
        <li class="sidebar-item"><a href="?view=profil-pribadi&id=997386798hupa&name=pegaaplication&detailPegawai&nip=<?php echo $sesi_nip;?>" class="sidebar-link"><i class="mdi mdi-human"></i><span class="hide-menu">Profil </span></a></li>
        <li class="sidebar-item"><a href="?view=daftar-absen&id=9973852hupa&name=pegaaplication&daftarAbsen" class="sidebar-link"><i class="mdi mdi-credit-card"></i><span class="hide-menu"> Data Gaji </span></a></li>
        <li class="sidebar-item"><a href="?view=daftar-lembur&id=9973853hupa&name=pegaaplication&daftarLembur" class="sidebar-link"><i class="mdi mdi-clock"></i><span class="hide-menu"> Lembur </span></a></li>
    </ul>
</li>
<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Absensi </span></a>
    <ul aria-expanded="false" class="collapse  first-level">
        <?php
            date_default_timezone_set('Asia/Jakarta');
            $tanggal = date("Y-m-d");
            // $tgl2 = date('Y-m-d H:i:s', strtotime('+9 hours +30 minutes', strtotime($tanggal)));
            // echo $tgl2;
            $cari=mysqli_query($connect, "SELECT * FROM tbl_absen WHERE nip='$sesi_nip' AND tgl_absen = '$tanggal'") or die(mysqli_error($connect));
            $ketemu = mysqli_num_rows($cari);
            $r      = mysqli_fetch_array($cari);

            $check_in = $r['check_in'];
            $check_out = $r['check_out'];

            if ($ketemu > 0) { 
                if ($check_in == NULL) { ?>
                    <li class="sidebar-item"><a href="&mod=add" data-toggle="modal" data-target="#Modal1" class="sidebar-link"><i class="fas fa-hand-paper"></i><span class="hide-menu"> Check In </span></a></li>
                    <li class="sidebar-item"><a href="&mod=add" data-toggle="modal" data-target="#Modal2" class="sidebar-link"><i class="fas fa-hand-paper"></i><span class="hide-menu"> Check In On Site </span></a></li>
                    <li class="sidebar-item"><a href="?view=daftar-absen-pegawai&id=9973853hupa&name=pegaaplication&daftarAbsen&nip=<?php echo $sesi_nip;?>" class="sidebar-link"><i class="mdi mdi-human"></i><span class="hide-menu"> Data Absen </span></a></li>
                <?php
                } else if ($check_in != NULL && $check_out == NULL) { ?>
                    <li class="sidebar-item"><a href="&mod=add" data-toggle="modal" data-target="#Modal3"  class="sidebar-link"><i class="fas fa-hand-paper"></i><span class="hide-menu"> Check Out </span></a></li>
                    <li class="sidebar-item"><a href="&mod=add" data-toggle="modal" data-target="#Modal4"  class="sidebar-link"><i class="fas fa-hand-paper"></i><span class="hide-menu"> Check Out On Site</span></a></li>
                    <li class="sidebar-item"><a href="?view=daftar-absen-pegawai&id=9973853hupa&name=pegaaplication&daftarAbsen&nip=<?php echo $sesi_nip;?>" class="sidebar-link"><i class="mdi mdi-human"></i><span class="hide-menu"> Data Absen </span></a></li>
                <?php
                } else if ($check_in != NULL && $check_out != NULL) { ?>
                    <li class="sidebar-item"><a href="?view=daftar-absen-pegawai&id=9973853hupa&name=pegaaplication&daftarAbsen&nip=<?php echo $sesi_nip;?>" class="sidebar-link"><i class="mdi mdi-human"></i><span class="hide-menu"> Data Absen </span></a></li>
                <?php
                } else { ?>
                    <li class="sidebar-item"><a href="?view=daftar-absen-pegawai&id=9973853hupa&name=pegaaplication&daftarAbsen&nip=<?php echo $sesi_nip;?>" class="sidebar-link"><i class="mdi mdi-human"></i><span class="hide-menu"> Data Absen </span></a></li>
                <?php
                }    
            } else { ?>
                <li class="sidebar-item"><a href="&mod=add" data-toggle="modal" data-target="#Modal1" class="sidebar-link"><i class="fas fa-hand-paper"></i><span class="hide-menu"> Check In </span></a></li>
                <li class="sidebar-item"><a href="&mod=add" data-toggle="modal" data-target="#Modal2" class="sidebar-link"><i class="fas fa-hand-paper"></i><span class="hide-menu"> Check In On Site </span></a></li>
                <li class="sidebar-item"><a href="?view=daftar-absen-pegawai&id=9973853hupa&name=pegaaplication&daftarAbsen&nip=<?php echo $sesi_nip;?>" class="sidebar-link"><i class="mdi mdi-human"></i><span class="hide-menu"> Data Absen </span></a></li>
            <?php
            }
        ?>
    </ul>
</li>
<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Pengajuan </span></a>
    <ul aria-expanded="false" class="collapse  first-level">
        <li class="sidebar-item"><a href="?view=daftar-cuti&id=9973851hupa&name=pegaaplication&daftarCuti" class="sidebar-link"><i class="mdi mdi-calendar"></i><span class="hide-menu"> Cuti </span></a></li>
        <li class="sidebar-item"><a href="?view=daftar-absen&id=9973852hupa&name=pegaaplication&daftarAbsen" class="sidebar-link"><i class="mdi mdi-clock"></i><span class="hide-menu"> Lembur </span></a></li>
        <li class="sidebar-item"><a href="?view=daftar-lembur&id=9973853hupa&name=pegaaplication&daftarLembur" class="sidebar-link"><i class="mdi mdi-credit-card-plus"></i><span class="hide-menu"> Pinjaman Karyawan </span></a></li>
    </ul>
</li>
<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-briefcase"></i><span class="hide-menu">Inventory </span></a>
    <ul aria-expanded="false" class="collapse  first-level">
        <li class="sidebar-item"><a href="?view=inventory-barang&id=9973861hupa&name=pegaaplication&Inventory" class="sidebar-link"><i class="mdi mdi-briefcase"></i><span class="hide-menu"> Inventory Barang </span></a></li>
        <li class="sidebar-item"><a href="?view=pengajuan-inventory-barang&id=9973861hupa&name=pegaaplication&pengajuanInventory" class="sidebar-link"><i class="mdi mdi-briefcase-check"></i><span class="hide-menu"> Pengajuan Inventori Barang </span></a></li>
        <li class="sidebar-item"><a href="?view=peminjaman-barang&id=9973861hupa&name=pegaaplication&peminjamanBarang" class="sidebar-link"><i class="fas fa-briefcase-medical"></i><span class="hide-menu"> Peminjaman Barang </span></a></li>
    </ul>
</li>
<?php
} else {
    session_destroy(); ?>
<script type="text/javascript">
window.location = "?view=login&id=9973801hupa&name=pegaaplication&Silahkan Login";
</script>
<?php
    }
?>