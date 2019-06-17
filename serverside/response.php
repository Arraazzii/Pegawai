<?php
session_start();
include "lib/config.php";
include "../config_config_cs/fungsi_indo_tgl.php";

$tampil     = isset($_GET['view']) ? $_GET['view'] : NULL;
$nip        = isset($_GET['nip']) ? $_GET['nip'] : "";

if ($tampil == 'inventory') {
    //kolom apa saja yang akan ditampilkan
    $columns = array(
        'no_inventory',
        'nama_barang',
        'serial_number',
        'tipe',
        'lokasi',
        );


    //jika ingin langsung menambahkan kondisi where dengan parameter terentu query seperti ini 
        //misal kita akan langsung menambahkan kondisi langsung hanya menampilkan provinsi jawabarat saja, 
    //prepared statement untuk keamanan data
    /*$array_id_provinsi = array('provinsi.id_prov' => 32); //32 adalah id untuk jawabarat
        $query = $datatable->get_custom("select provinsi.nama_prov,kabupaten.nama_kab, kecamatan.nama_kec,id_kec
    from provinsi inner join kabupaten 
    on provinsi.id_prov=kabupaten.id_prov
    inner join kecamatan on kabupaten.id_kab=kecamatan.id_kab where provinsi.id_prov=?",$columns,$array_id_provinsi);*/

    //untuk mencobanya uncomment query diatas dan comment query dibawah

    //lakukan query data dari 3 table dengan inner join
        $array_status = array('stat' => "Approved");
        $query = $datatable->get_custom("SELECT * FROM tbl_inventory WHERE stat=?",$columns,$array_status);


        //buat inisialisasi array data
        $data = array();

        $no = 1;
        foreach ($query as $value) {

        //array sementara data
        $ResultData = array();
        
        //masukan data ke array sesuai kolom table
        $ResultData[] = $value->no_inventory;
        $ResultData[] = $value->nama_barang;
        $ResultData[] = $value->serial_number;
        $ResultData[] = $value->tipe;
        $ResultData[] = $value->lokasi;

        //bisa juga pake logic misal jika value tertentu maka outputnya

        //kita bisa buat tombol untuk keperluan edit, delete, dll, 
        $ResultData[] = 
            '<a data-toggle="tooltip" title="Lihat Detail" href="?view=detail-barang&id=997386798hupa&name=pegaaplication&detailBarang&noinven='.$value->no_inventory.'">
                <span class="fa fa-list"></span></a> |
            <a href="#'.$value->no_inventory.'" data-target="#myModal'.$value->no_inventory.'" data-toggle="modal" title="Edit Data">
                <span class="fa fa-edit"></span></a> | 
            <a href="config_config_cs/del-barang-con.php?id='.$value->no_inventory.'" data-toggle="tooltip" title="Hapus Data"><span class="fa fa-trash" onClick="return confirm(\'Anda Yakin Ingin Menghapus Data '.$value->no_inventory.' ?\')"></span></a>';        

        //memasukan array ke variable $data

        $data[] = $ResultData;
        $no++;
        }

    //set data
    $datatable->set_data($data);
    //create our json
    $datatable->create_data();

} elseif ($tampil == 'gaji-pegawai') {
    //kolom apa saja yang akan ditampilkan
    $columns = array(
        'gaji.nik',
        'tbl_pegawai.nama',
        'tbl_data_email_pegawai.email_pegawai',
        'tbl_data_email_pegawai.domain',
        'gaji.tgl',
        'tbl_data_jabatan.nama_jabatan',
        );


    //jika ingin langsung menambahkan kondisi where dengan parameter terentu query seperti ini 
        //misal kita akan langsung menambahkan kondisi langsung hanya menampilkan provinsi jawabarat saja, 
    //prepared statement untuk keamanan data
    /*$array_id_provinsi = array('provinsi.id_prov' => 32); //32 adalah id untuk jawabarat
        $query = $datatable->get_custom("select provinsi.nama_prov,kabupaten.nama_kab, kecamatan.nama_kec,id_kec
    from provinsi inner join kabupaten 
    on provinsi.id_prov=kabupaten.id_prov
    inner join kecamatan on kabupaten.id_kab=kecamatan.id_kab where provinsi.id_prov=?",$columns,$array_id_provinsi);*/

    //untuk mencobanya uncomment query diatas dan comment query dibawah

    //lakukan query data dari 3 table dengan inner join
        $array_status = array('stat' => "Approved");
        $query = $datatable->get_custom("SELECT * FROM gaji JOIN tbl_pegawai ON tbl_pegawai.nik = gaji.nik JOIN tbl_data_email_pegawai ON tbl_data_email_pegawai.nip_pegawai = gaji.nik JOIN  tbl_jabatan ON tbl_pegawai.id_jabatan = tbl_jabatan.id_jabatan JOIN tbl_data_jabatan ON tbl_jabatan.jabatan = tbl_data_jabatan.kode_jabatan ",$columns);


        //buat inisialisasi array data
        $data = array();

        $no = 1;
        foreach ($query as $value) {

        //array sementara data
        $ResultData = array();
        
        //masukan data ke array sesuai kolom table
        $ResultData[] = $no;
        $ResultData[] = $value->nik .' - '. $value->nama;
        $ResultData[] = $value->email_pegawai . '@lrcom.co.id';
        $ResultData[] = bln_indo($value->tgl);
        $ResultData[] = $value->nama_jabatan;

        //bisa juga pake logic misal jika value tertentu maka outputnya

        //kita bisa buat tombol untuk keperluan edit, delete, dll, 
        $ResultData[] = 
            '<a title="Lihat Detail" data-toggle="tooltip" href="?view=detail-gaji-pegawai&id=997386798hupa&name=pegaaplication&detailGajiPegawai&id='. $value->id .'">
                <span class="fa fa-list"></span>
            </a> |
            <a href="?view=edit-gaji-pegawai&id=997386798hupa&name=pegaaplication&editGajiPegawai&id='. $value->id .'" data-toggle="tooltip" title="Edit Data">
                <span class="fa fa-edit"></span>
            </a> |
            <a href="?view=save-as-gaji-pegawai&id=997386798hupa&name=pegaaplication&saveAsGajiPegawai&id='. $value->id .'" data-toggle="tooltip" title="Save As Data">
                <span class="fa fa-search-plus"></span>
            </a> |
            <a href="#'.$value->id.'" data-target="#myModal'.$value->id.'" data-toggle="modal" title="Add Note">
                <span class="fas fa-comment"></span>
            </a> |
            <a href="#'.$value->id.'" data-target="#myModalEmail'.$value->id.'" data-toggle="modal" title="Sent Email">
                <span class="fas fa-paper-plane"></span>
            </a> |
            <a href="config_config_cs/del-gaji-pegawai-con.php?id='. $value->id .'" data-toggle="tooltip" title="Hapus Data" onClick="return confirm(\'Anda Yakin Ingin Menghapus Data '.$value->nik.' - '.$value->nama.' ?\')">
                <span class="fa fa-trash"></span>
            </a>';        

        //memasukan array ke variable $data

        $data[] = $ResultData;
        $no++;
        }

    //set data
    $datatable->set_data($data);
    //create our json
    $datatable->create_data();

} elseif ($tampil == 'pinjaman-pegawai') {
    //kolom apa saja yang akan ditampilkan
    $columns = array(
        'tbl_pinjaman.nik',
        'tbl_pegawai.nama',
        'tbl_pinjaman.besar_pinjaman',
        'tbl_pinjaman.term',
        'tbl_pinjaman.status',
        );


    //jika ingin langsung menambahkan kondisi where dengan parameter terentu query seperti ini 
        //misal kita akan langsung menambahkan kondisi langsung hanya menampilkan provinsi jawabarat saja, 
    //prepared statement untuk keamanan data
    /*$array_id_provinsi = array('provinsi.id_prov' => 32); //32 adalah id untuk jawabarat
        $query = $datatable->get_custom("select provinsi.nama_prov,kabupaten.nama_kab, kecamatan.nama_kec,id_kec
    from provinsi inner join kabupaten 
    on provinsi.id_prov=kabupaten.id_prov
    inner join kecamatan on kabupaten.id_kab=kecamatan.id_kab where provinsi.id_prov=?",$columns,$array_id_provinsi);*/

    //untuk mencobanya uncomment query diatas dan comment query dibawah

    //lakukan query data dari 3 table dengan inner join
        $array_status = array('stat' => "Approved");
        $query = $datatable->get_custom("SELECT * FROM tbl_pinjaman JOIN tbl_pegawai ON tbl_pegawai.nik = tbl_pinjaman.nik ",$columns);


        //buat inisialisasi array data
        $data = array();

        $no = 1;
        foreach ($query as $value) {

        //array sementara data
        $ResultData = array();
        
        //masukan data ke array sesuai kolom table
        $ResultData[] = $no;
        $ResultData[] = $value->nik .' - '. $value->nama;
        $ResultData[] = 'Rp. '. number_format($value->besar_pinjaman, 0, ".", ".");
        $ResultData[] = 'x'.$value->term;
        // $ResultData[] = $value->status;

        if ($value->status === 'APPROVED') {
            $ResultData[] = '<span class="badge badge-success"> APPROVED </span>';
        } else if ($value->status === 'PENDING') {
            $ResultData[] = '<span class="badge badge-warning"> PENDING </span>';
        } else {
            $ResultData[] = '<span class="badge badge-danger"> REJECTED </span>';
        }
        

        //bisa juga pake logic misal jika value tertentu maka outputnya

        //kita bisa buat tombol untuk keperluan edit, delete, dll,
        $ResultData[] = 
            '<a title="Lihat Detail" data-target="#myModalDetail'.$value->id.'" data-toggle="modal"href="#'.$value->id.'">
                <span class="fa fa-list"></span>
            </a> |
            <a href="?view=edit-pinjaman&id=997386798hupa&name=pegaaplication&editPinjamanPegawai&id='. $value->id .'" data-toggle="tooltip" title="Edit Data">
                <span class="fa fa-edit"></span>
            </a> |
            <a href="config_config_cs/del-pinjaman-pegawai-con.php?id='. $value->id .'" data-toggle="tooltip" title="Hapus Data" onClick="return confirm(\'Anda Yakin Ingin Menghapus Data '.$value->nik.' - '.$value->nama.' ?\')">
                <span class="fa fa-trash"></span>
            </a>';        

        //memasukan array ke variable $data

        $data[] = $ResultData;
        $no++;
        }

    //set data
    $datatable->set_data($data);
    //create our json
    $datatable->create_data();

} elseif ($tampil == 'absen-pegawai') {

    //kolom apa saja yang akan ditampilkan
    $columns = array(
        'tbl_absen.nip',
        'tbl_absen.tgl_absen',
        'tbl_absen.check_in',
        'tbl_absen.keterangan_ci',
        'tbl_absen.geotag_ci',
        'tbl_absen.check_out',
        'tbl_absen.keterangan_co',
        'tbl_absen.geotag_co',
        'tbl_absen.status',
        );


    //jika ingin langsung menambahkan kondisi where dengan parameter terentu query seperti ini 
        //misal kita akan langsung menambahkan kondisi langsung hanya menampilkan provinsi jawabarat saja, 
    //prepared statement untuk keamanan data
    /*$array_id_provinsi = array('provinsi.id_prov' => 32); //32 adalah id untuk jawabarat
        $query = $datatable->get_custom("select provinsi.nama_prov,kabupaten.nama_kab, kecamatan.nama_kec,id_kec
    from provinsi inner join kabupaten 
    on provinsi.id_prov=kabupaten.id_prov
    inner join kecamatan on kabupaten.id_kab=kecamatan.id_kab where provinsi.id_prov=?",$columns,$array_id_provinsi);*/

    //untuk mencobanya uncomment query diatas dan comment query dibawah

    //lakukan query data dari 3 table dengan inner join
        $array_status = array('nip' => $nip);
        $query = $datatable->get_custom("SELECT * FROM tbl_absen WHERE nip=?",$columns,$array_status);


        //buat inisialisasi array data
        $data = array();

        $no = 1;
        foreach ($query as $value) {

        //array sementara data
        $ResultData = array();
        
        //masukan data ke array sesuai kolom table
        $ResultData[] = $no;
        $ResultData[] = bln_indo($value->tgl_absen);
        $ResultData[] = $value->tgl_absen;
        $ResultData[] = $value->check_in;
        $ResultData[] = $value->keterangan_ci;
        $ResultData[] = $value->geotag_ci;
        $ResultData[] = $value->check_out;
        $ResultData[] = $value->keterangan_co;
        $ResultData[] = $value->geotag_co;
        // $ResultData[] = $value->status;

        if ($value->status === 'Hadir') {
            $ResultData[] = '<span class="badge badge-success">Hadir</span>';
        } else {
            $ResultData[] = '<span class="badge badge-danger">Terlambat</span>';
        }
        

        //bisa juga pake logic misal jika value tertentu maka outputnya

        //kita bisa buat tombol untuk keperluan edit, delete, dll,
        // $ResultData[] = 
        //     '<a title="Lihat Detail" data-target="#myModalDetail'.$value->id.'" data-toggle="modal"href="#'.$value->id.'">
        //         <span class="fa fa-list"></span>
        //     </a> |
        //     <a href="?view=edit-pinjaman&id=997386798hupa&name=pegaaplication&editPinjamanPegawai&id='. $value->id .'" data-toggle="tooltip" title="Edit Data">
        //         <span class="fa fa-edit"></span>
        //     </a> |
        //     <a href="config_config_cs/del-pinjaman-pegawai-con.php?id='. $value->id .'" data-toggle="tooltip" title="Hapus Data" onClick="return confirm(\'Anda Yakin Ingin Menghapus Data '.$value->nik.' - '.$value->nama.' ?\')">
        //         <span class="fa fa-trash"></span>
        //     </a>';        

        //memasukan array ke variable $data

        $data[] = $ResultData;
        $no++;
        }

    //set data
    $datatable->set_data($data);
    //create our json
    $datatable->create_data();

}