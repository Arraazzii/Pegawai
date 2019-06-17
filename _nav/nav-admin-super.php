<?php
    $nip=$_SESSION['nip'];
    $level = $_SESSION['leveluser'];
    $sesi_nip = isset($_SESSION['nip']) ? $_SESSION['nip'] : NULL;
    if ($_SESSION['leveluser']=='ADMIN' ||$_SESSION['leveluser']=='SUPER ADMIN' ||$_SESSION['leveluser']=='USER'||$_SESSION['leveluser']=='ADMIN TEKNIS' ||$_SESSION['leveluser']=='ADMIN FINANCE' ||$_SESSION['leveluser']=='ADMIN GUDANG') {

        $view = mysqli_query($connect, "SELECT * FROM tbl_pegawai, tbl_user_lr, tbl_file WHERE tbl_user_lr.nip = tbl_pegawai.nik AND tbl_pegawai.id_file = tbl_file.id_file AND tbl_user_lr.nip = '$sesi_nip'");
                                                    
            $row = mysqli_fetch_array($view);
?>
<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="?view=halaman-utama&id=9973838hupa&name=pegaaplication&dashboard" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-desktop-mac"></i><span class="hide-menu">Data Master </span></a>
    <ul aria-expanded="false" class="collapse  first-level">
        <li class="sidebar-item"><a href="?view=jabatan&mod=add&id=9973841hupa&name=pegaaplication&jabatan" class="waves-effect waves-dark sidebar-link"><i class="mdi mdi-tie"></i><span class="hide-menu"> Jabatan </span></a></li>
        <li class="sidebar-item"><a href="?view=divisi&id=9973842hupa&name=pegaaplication&divisi" class="sidebar-link"><i class="mdi mdi-pocket"></i><span class="hide-menu"> Divisi </span></a></li>
        <li class="sidebar-item"><a href="?view=agama&id=9973843hupa&name=pegaaplication&agama" class="sidebar-link"><i class="mdi mdi-book-open"></i><span class="hide-menu"> Agama </span></a></li>
        <li class="sidebar-item"><a href="?view=absen&id=9973844hupa&name=pegaaplication&absen" class="sidebar-link"><i class="mdi mdi-human"></i><span class="hide-menu"> Absen </span></a></li>
        <li class="sidebar-item"><a href="?view=cuti&id=9973845hupa&name=pegaaplication&cuti" class="sidebar-link"><i class="mdi mdi-calendar"></i><span class="hide-menu"> Cuti </span></a></li>
        <li class="sidebar-item"><a href="?view=status-pegawai&id=9973846hupa&name=pegaaplication&statusPegawai" class="sidebar-link"><i class="mdi mdi-contacts"></i><span class="hide-menu"> Status Pegawai </span></a></li>
        <li class="sidebar-item"><a href="?view=email-pegawai&id=9973848hupa&name=pegaaplication&emailPegawai" class="sidebar-link"><i class="mdi mdi-email"></i><span class="hide-menu"> Email Pegawai </span></a></li>
        <li class="sidebar-item"><a href="?view=bank&id=9973849hupa&name=pegaaplication&bank" class="sidebar-link"><i class="mdi mdi-credit-card"></i><span class="hide-menu"> Bank Transfer </span></a></li>
        <li class="sidebar-item"><a href="?view=lokasi&id=9973849hupa&name=pegaaplication&lokasi" class="sidebar-link"><i class="fas fa-location-arrow"></i><span class="hide-menu"> Lokasi </span></a></li>
        <li class="sidebar-item"><a href="?view=list-user&id=9973860hupa&name=pegaaplication&listUser" class="sidebar-link"><i class="mdi mdi-human-male-female"></i><span class="hide-menu"> List User </span></a></li>
        <li class="sidebar-item"><a href="?view=pengumuman&id=9973861hupa&name=pegaaplication&pengumuman" class="sidebar-link"><i class="mdi mdi-calendar-plus"></i><span class="hide-menu"> Pengumuman </span></a></li>
    </ul>
</li>
<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-clipboard-account"></i><span class="hide-menu">Pegawai </span></a>
    <ul aria-expanded="false" class="collapse  first-level">
        <li class="sidebar-item"><a href="?view=data-pegawai&id=9973850hupa&name=pegaaplication&pegawai" class="sidebar-link"><i class="mdi mdi-account"></i><span class="hide-menu"> Daftar Pegawai </span></a></li>
        <li class="sidebar-item"><a href="?view=data-pegawai-pkl&id=9973850hupa&name=pegaaplication&pegawaiPKL" class="sidebar-link"><i class="mdi mdi-account-multiple"></i><span class="hide-menu"> Daftar PKL </span></a></li>
        <!-- <li class="sidebar-item"><a href="?view=data-pegawai-aktif&id=9973850hupa&name=pegaaplication&pegawaiAktif" class="sidebar-link"><i class="mdi mdi-account-check"></i><span class="hide-menu"> Daftar Pegawai Aktif </span></a></li>
                                <li class="sidebar-item"><a href="?view=data-pegawai-pkl-aktif&id=9973850hupa&name=pegaaplication&pegawaiPKLAktif" class="sidebar-link"><i class="mdi mdi-account-check"></i><span class="hide-menu"> Daftar PKL Aktif </span></a></li>
                                <li class="sidebar-item"><a href="?view=data-pegawai-non-aktif&id=9973850hupa&name=pegaaplication&pegawaiNonAktif" class="sidebar-link"><i class="mdi mdi-account-off"></i><span class="hide-menu"> Daftar Pegawai Non Aktif </span></a></li>
                                <li class="sidebar-item"><a href="?view=data-pegawai-pkl-non-aktif&id=9973850hupa&name=pegaaplication&pegawaiPKLNonAktif" class="sidebar-link"><i class="mdi mdi-account-off"></i><span class="hide-menu"> Daftar PKL Non Aktif </span></a></li> -->
    </ul>
</li>
<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Cuti dan Absensi </span></a>
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
                    <li class="sidebar-item"><a href="?view=daftar-absen&id=9973852hupa&name=pegaaplication&daftarAbsen" class="sidebar-link"><i class="mdi mdi-human"></i><span class="hide-menu"> Data Absen </span></a></li>
                <?php
                } else if ($check_in != NULL && $check_out == NULL) { ?>
                    <li class="sidebar-item"><a href="&mod=add" data-toggle="modal" data-target="#Modal3"  class="sidebar-link"><i class="fas fa-hand-paper"></i><span class="hide-menu"> Check Out </span></a></li>
                    <li class="sidebar-item"><a href="&mod=add" data-toggle="modal" data-target="#Modal4"  class="sidebar-link"><i class="fas fa-hand-paper"></i><span class="hide-menu"> Check Out On Site</span></a></li>
                    <li class="sidebar-item"><a href="?view=daftar-absen&id=9973852hupa&name=pegaaplication&daftarAbsen" class="sidebar-link"><i class="mdi mdi-human"></i><span class="hide-menu"> Data Absen </span></a></li>
                <?php
                } else if ($check_in != NULL && $check_out != NULL) { ?>
                    <li class="sidebar-item"><a href="?view=daftar-absen&id=9973852hupa&name=pegaaplication&daftarAbsen" class="sidebar-link"><i class="mdi mdi-human"></i><span class="hide-menu"> Data Absen </span></a></li>
                <?php
                } else { ?>
                    <li class="sidebar-item"><a href="?view=daftar-absen&id=9973852hupa&name=pegaaplication&daftarAbsen" class="sidebar-link"><i class="mdi mdi-human"></i><span class="hide-menu"> Data Absen </span></a></li>
                <?php
                }    
            } else { ?>
                <li class="sidebar-item"><a href="&mod=add" data-toggle="modal" data-target="#Modal1" class="sidebar-link"><i class="fas fa-hand-paper"></i><span class="hide-menu"> Check In </span></a></li>
                <li class="sidebar-item"><a href="&mod=add" data-toggle="modal" data-target="#Modal2" class="sidebar-link"><i class="fas fa-hand-paper"></i><span class="hide-menu"> Check In On Site </span></a></li>
                <li class="sidebar-item"><a href="?view=daftar-absen&id=9973852hupa&name=pegaaplication&daftarAbsen" class="sidebar-link"><i class="mdi mdi-human"></i><span class="hide-menu"> Data Absen </span></a></li>
            <?php
            }
        ?>
        <li class="sidebar-item"><a href="?view=daftar-cuti&id=9973851hupa&name=pegaaplication&daftarCuti" class="sidebar-link"><i class="mdi mdi-calendar"></i><span class="hide-menu"> Data Cuti </span></a></li>
        <li class="sidebar-item"><a href="?view=daftar-lembur&id=9973853hupa&name=pegaaplication&daftarLembur" class="sidebar-link"><i class="mdi mdi-clock"></i><span class="hide-menu"> Lembur </span></a></li>
    </ul>
</li>
<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-cash"></i><span class="hide-menu">Finance </span></a>
    <ul aria-expanded="false" class="collapse  first-level">
        <li class="sidebar-item"><a href="?view=gaji-pegawai&id=9973854hupa&name=pegaaplication&gajiPegawai" class="sidebar-link"><i class="mdi mdi-credit-card"></i><span class="hide-menu"> Gaji Pegawai </span></a></li>
        <li class="sidebar-item"><a href="?view=lembur&id=9973855hupa&name=pegaaplication&uangLembur" class="sidebar-link"><i class="mdi mdi-clock"></i><span class="hide-menu"> Lembur </span></a></li>
        <li class="sidebar-item"><a href="?view=pajak&id=9973856hupa&name=pegaaplication&Pajak" class="sidebar-link"><i class="mdi mdi-credit-card-off"></i><span class="hide-menu"> Pajak </span></a></li>
        <li class="sidebar-item"><a href="?view=pinjaman&id=9973857hupa&name=pegaaplication&pinjaman" class="sidebar-link"><i class="mdi mdi-credit-card-plus"></i><span class="hide-menu"> Pinjaman </span></a></li>
        <li class="sidebar-item">
            <!-- <a href="?view=potongan&id=9973858hupa&name=pegaaplication&potongan" class="sidebar-link"><i class="mdi mdi-credit-card-off"></i><span class="hide-menu"> Potongan </span></a></li>
                                <li class="sidebar-item"><a href="?view=check-out&id=9973859hupa&name=pegaaplication&prosesPayroll" class="sidebar-link"><i class="mdi mdi-cash-multiple"></i><span class="hide-menu"> Proses Payroll </span></a></li> -->
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