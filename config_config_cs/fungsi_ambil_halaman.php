<?php
    session_start();

    include "config_config_cs/timeout.php";
    include "config_config_cs/fungsi_indo_tgl.php";
    include "config_config_cs/koneksi-data-peg-lr-com.php";

    $nav                = "";
    $ambil_halaman      = "home.php";
    $ambilcss1          ="";
    $ambilcss2          ="";
    $ambilcss3          ="";
    $ambilcss4          ="";
    $ambilcss5          ="";
    $ambilcss6          ="";
    $ambilcss7          ="";
    $ambilcss8          ="";
    $ambilcss9          ="";
    $ambilcss10         ="";

    $ambiljs1           ="";
    $ambiljs2           ="";
    $ambiljs3           ="";
    $ambiljs4           ="";
    $ambiljs5           ="";
    $ambiljs6           ="";
    $ambiljs7           ="";
    $ambiljs8           ="";
    $ambiljs9           ="";
    $ambiljs10          ="";
    $ambiljs11          ="";
    $ambiljs12          ="";
    $ambiljs13          ="";
    $ambiljs14          ="";
    $ambiljs15          ="";
    $ambiljs16          ="";
    $ambiljs17          ="";
    $ambiljs18          ="";
    $ambiljs19          ="";
    $ambiljs20          ="";
    $ambilfungsi        ="";
    $ambilfungsi2       ="";

    $view                 = isset($_GET['view']) ? $_GET['view'] : "";
    if ($view == "") {
            $nav                ="Dashboard";
            $ambil_halaman      ="home.php";
            $ambil_gambar       ="assets/images/favicon.png";
            $ambilcss1          ="assets/libs/flot/css/float-chart.css";
            $ambilcss2          ="dist/css/style.min.css";
            $ambiljs1           ="assets/libs/jquery/dist/jquery.min.js";
            $ambiljs2           ="assets/libs/popper.js/dist/umd/popper.min.js";
            $ambiljs3           ="assets/libs/bootstrap/dist/js/bootstrap.min.js";
            $ambiljs4           ="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js";
            $ambiljs5           ="assets/extra-libs/sparkline/sparkline.js";
            $ambiljs6           ="dist/js/waves.js";
            $ambiljs7           ="dist/js/sidebarmenu.js";
            $ambiljs8           ="dist/js/custom.min.js";
            $ambiljs9           ="dist/js/pages/dashboards/dashboard1.js";
            $ambiljs10          ="assets/libs/flot/excanvas.js";
            $ambiljs11          ="assets/libs/flot/jquery.flot.js";
            $ambiljs12          ="assets/libs/flot/jquery.flot.pie.js";
            $ambiljs13          ="assets/libs/flot/jquery.flot.time.js";
            $ambiljs14          ="assets/libs/flot/jquery.flot.stack.js";
            $ambiljs15          ="assets/libs/flot/jquery.flot.crosshair.js";
            $ambiljs16          ="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js";
            $ambiljs17          ="dist/js/pages/chart/chart-page-init.js";       
    } elseif ($view == "add-pegawai") {
            $nav                ="Tambah Pegawai";
            $ambil_halaman      ="pegawai/pegawai.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "edit-pegawai") {
            $nav                ="Edit Pegawai";
            $ambil_halaman      ="pegawai/edit-pegawai.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "data-pegawai") {
            $nav                ="Data Pegawai";
            $ambil_halaman      ="pegawai/data-pegawai.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "data-pegawai-pkl") {
            $nav                ="Data Pegawai PKL";
            $ambil_halaman      ="pegawai/data-pegawai-pkl.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "data-pegawai-aktif") {
            $nav                ="Data Pegawai Aktif";
            $ambil_halaman      ="pegawai/data-pegawai-aktif.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "data-pegawai-non-aktif") {
            $nav                ="Data Pegawai Non Aktif";
            $ambil_halaman      ="pegawai/data-pegawai-non-aktif.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "data-pegawai-pkl-aktif") {
            $nav                ="Data Pegawai PKL Aktif";
            $ambil_halaman      ="pegawai/data-pegawai-pkl-aktif.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "data-pegawai-pkl-non-aktif") {
            $nav                ="Data Pegawai PKL Non Aktif";
            $ambil_halaman      ="pegawai/data-pegawai-pkl-non-aktif.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "detail-pegawai") {
            $nav                ="Detail Pegawai";
            $ambil_halaman      ="pegawai/detail-pegawai.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "jabatan") {
            $nav                ="Data Master Jabatan";
            $ambil_halaman      ="reF/jabatan.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "divisi") {
            $nav                ="Data Master Divisi";
            $ambil_halaman      ="reF/divisi.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "agama") {
            $nav                ="Data Master Agama";
            $ambil_halaman      ="reF/agama.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "status-pegawai") {
            $nav                ="Data Master Status Pegawai";
            $ambil_halaman      ="reF/status-pegawai.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "email-pegawai") {
            $nav                ="Data Master Email Pegawai";
            $ambil_halaman      ="reF/email-pegawai.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "bank") {
            $nav                ="Data Master Bank Transfer";
            $ambil_halaman      ="reF/bank.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "lokasi") {
            $nav                ="Data Master Lokasi";
            $ambil_halaman      ="reF/lokasi.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "list-user") {
            $nav                ="List User";
            $ambil_halaman      ="user/user-list.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "login") {
            header('Location:login.php?view=login&id=9973801hupa&name=pegaaplication&Silahkan Login');
    } elseif ($view == "logout") {
            header('Location:user/logout.php?view=logout&id=9973803hupa&name=pegaaplication&Silahkan Login');
    } elseif ($view == "profil-pribadi") {
            $nav                ="Profil Data Diri";
            $ambil_halaman      ="user/_data-pribadi/detail-pegawai.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "edit-profil-pegawai") {
            $nav                ="Edit Profil Pegawai";
            $ambil_halaman      ="user/_data-pribadi/edit-pegawai.php";
            $ambil_gambar       ="assets/images/favicon.png";
    }elseif ($view == "tambah-barang") {
            $nav                ="Tambah Barang";
            $ambil_halaman      ="inventory/tambah_barang.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "inventory-barang") {
            $nav                ="Inventory Barang";
            $ambil_halaman      ="inventory/inventory_barang.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "pengajuan-inventory-barang") {
            $nav                ="Pengajuan Inventory Barang";
            $ambil_halaman      ="inventory/pengajuan_barang.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "peminjaman-barang") {
            $nav                ="Peminjaman Barang";
            $ambil_halaman      ="inventory/peminjaman_barang.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "detail-barang") {
            $nav                ="Detail Barang";
            $ambil_halaman      ="inventory/detail_barang.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "peminjaman-barang") {
            $nav                ="Peminjaman Barang";
            $ambil_halaman      ="inventory/peminjaman_barang.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "peminjaman") {
            $nav                ="Peminjaman Barang";
            $ambil_halaman      ="inventory/peminjaman.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "pengumuman") {
            $nav                ="Pengumuman";
            $ambil_halaman      ="user/news.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "gaji-pegawai") {
            $nav                ="Gaji Pegawai";
            $ambil_halaman      ="finance/gaji/gaji-pegawai.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "tambah-gaji-pegawai") {
            $nav                ="Tambah Gaji Pegawai";
            $ambil_halaman      ="finance/gaji/tambah-gaji-pegawai.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "detail-gaji-pegawai") {
            $nav                ="Detail Gaji Pegawai";
            $ambil_halaman      ="finance/gaji/detail-gaji-pegawai.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "edit-gaji-pegawai") {
            $nav                ="Edit Gaji Pegawai";
            $ambil_halaman      ="finance/gaji/edit-gaji-pegawai.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "save-as-gaji-pegawai") {
            $nav                ="Save As Gaji Pegawai";
            $ambil_halaman      ="finance/gaji/save-as-gaji-pegawai.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "pinjaman") {
            $nav                ="Pinjaman Pegawai";
            $ambil_halaman      ="finance/pinjaman/pinjaman-pegawai.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "tambah-pinjaman-pegawai") {
            $nav                ="Tambah Pinjaman Pegawai";
            $ambil_halaman      ="finance/pinjaman/tambah-pinjaman-pegawai.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } elseif ($view == "edit-pinjaman") {
            $nav                ="Edit Pinjaman Pegawai";
            $ambil_halaman      ="finance/pinjaman/edit-pinjaman-pegawai.php";
            $ambil_gambar       ="assets/images/favicon.png";
    } else {
            $nav                ="Dashboard";
            $ambil_halaman      ="home.php";
            $ambil_gambar       ="assets/images/favicon.png";
            $ambilcss1          ="assets/libs/flot/css/float-chart.css";
            $ambilcss2          ="dist/css/style.min.css";
            $ambiljs1           ="assets/libs/jquery/dist/jquery.min.js";
            $ambiljs2           ="assets/libs/popper.js/dist/umd/popper.min.js";
            $ambiljs3           ="assets/libs/bootstrap/dist/js/bootstrap.min.js";
            $ambiljs4           ="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js";
            $ambiljs5           ="assets/extra-libs/sparkline/sparkline.js";
            $ambiljs6           ="dist/js/waves.js";
            $ambiljs7           ="dist/js/sidebarmenu.js";
            $ambiljs8           ="dist/js/custom.min.js";
            $ambiljs9           ="dist/js/pages/dashboards/dashboard1.js";
            $ambiljs10          ="assets/libs/flot/excanvas.js";
            $ambiljs11          ="assets/libs/flot/jquery.flot.js";
            $ambiljs12          ="assets/libs/flot/jquery.flot.pie.js";
            $ambiljs13          ="assets/libs/flot/jquery.flot.time.js";
            $ambiljs14          ="assets/libs/flot/jquery.flot.stack.js";
            $ambiljs15          ="assets/libs/flot/jquery.flot.crosshair.js";
            $ambiljs16          ="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js";
            $ambiljs17          ="dist/js/pages/chart/chart-page-init.js";
    }
?>