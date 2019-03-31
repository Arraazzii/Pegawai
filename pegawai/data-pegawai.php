
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
    <style type="text/css">
        tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
    </style>
    

            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-2">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <a href="?view=data-pegawai&id=9973850hupa&name=pegaaplication&pegawai">
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
                                <a href="?view=data-pegawai&id=9973850hupa&name=pegaaplication&pegawai">
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Pegawai</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="10px">No.</th>
                                                <th width="275px">Nama Pegawai</th>
                                                <th>TTL</th>
                                                <th>No. Telp</th>
                                                <th>Jabatan</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>  
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $view = mysqli_query($connect, "SELECT * FROM tbl_pegawai JOIN tbl_kelahiran ON tbl_pegawai.id_lahir = tbl_kelahiran.id_lahir JOIN tbl_jabatan ON tbl_pegawai.id_jabatan = tbl_jabatan.id_jabatan JOIN tbl_data_jabatan ON tbl_jabatan.jabatan = tbl_data_jabatan.kode_jabatan JOIN tbl_no_telp ON tbl_pegawai.id_telp = tbl_no_telp.id_telp JOIN tbl_status ON tbl_status.id_status = tbl_pegawai.id_status WHERE tbl_status.status_peg != 'STP0003'");
                                                    
                                            while ($row = mysqli_fetch_array($view)) {
                                                
                                                
                                            ?>
                                            <tr>
                                                <td width="10px"><?php echo $no++;?>.</td>
                                                <td width="275px"><?php echo $row['nik'];?> - <?php echo $row['nama'];?></td>
                                                <td><?php echo $row['tmpt_lahir'];?>, <?php echo tgl_indo($row['tgl_lahir']);?></td>
                                                <td><?php echo $row['hp'];?></td>
                                                <td><?php echo $row['nama_jabatan'];?></td>
                                                <td><?php echo $row['ket'];?></td>
                                                <td>
                                                    <a data-toggle="tooltip" title="Lihat Detail" href="?view=detail-pegawai&id=997386798hupa&name=pegaaplication&detailPegawai&nip=<?php echo $row['nik'];?>">
                                                        <span class="fa fa-list"></span>
                                                    </a>  <?php if ($row['ket'] == 'Aktif') { ?>
                                                        <a href=
                                                    "config_config_cs/non-aktif-pegawai-con.php?id=<?php echo $row['nik']; ?>&hal=data-pegawai&add=pegawai" data-toggle="tooltip" title="Non Aktifkan" onClick="return confirm('Anda Yakin Ingin Nonaktifkan <?php echo $row['nama'];?> ?')"><span class='fa fa-times'></span></a>
                                                    <?php    
                                                    } else { ?>
                                                        <a href=
                                                    "config_config_cs/aktif-pegawai-con.php?id=<?php echo $row['nik']; ?>&hal=data-pegawaiadd=pegawai" data-toggle="tooltip" title="Aktifkan" onclick='/return konfirmasi("
                                                    Aktifkan Pegawai <?php echo $row['nik'];?>")'><span class='fa fa-check'></span></a>
                                                    <?php
                                                    } ?>
                                                    <br>
                                                    <a href="?view=edit-pegawai&id=997386799hupa&name=pegaaplication&editPegawai&nip=<?php echo $row['nik'];?>" data-toggle="tooltip" title="Edit Data"><span class="fa fa-edit"></span></a> 
                                                    <a href=
                                                    "config_config_cs/del-pegawai-con.php?id=<?php echo $row['nik']; ?>" data-toggle="tooltip" title="Hapus Data" onclick='/return konfirmasi("
                                                    Menghapus data <?php echo $row['nik'];?>")'><span class='fa fa-trash'></span></a>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Cari</th>
                                                <th>Cari</th>
                                                <th>Cari</th>
                                                <th>Cari</th>
                                                <th>Cari</th>
                                                <th>Cari</th>
                                                <th>Cari</th>
                                            </tr>
                                        </tfoot>
                                    </table>
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
    <script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>

    <script src="assets/libs/toastr/build/toastr.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
         // DataTable
         $('#zero_config tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="'+title+'" />' );
    } );
 
    var table = $('#zero_config').DataTable({
        language: {
                    "decimal":        "",
                    "emptyTable":     "Data Tidak Tersedia Di Table",
                    "info":           "Menampilkan _START_ Sampai _END_ Dari _TOTAL_ Data",
                    "infoEmpty":      "Menampilkan 0 Sampai 0 Dari 0 Data",
                    "infoFiltered":   "(Dari Total _MAX_ Data)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Menampilkan _MENU_ Data",
                    "loadingRecords": "Loading...",
                    "processing":     "Memproses...",
                    "search":         "Cari :",
                    "zeroRecords":    "Tidak Ada Data Yang Sesuai",
                    "paginate": {
                        "first":      "Pertama",
                        "last":       "Terakhir",
                        "next":       "Selanjutnya",
                        "previous":   "Sebelumnya"
                    },
                    "aria": {
                        "sortAscending":  ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                },
        initComplete: function () {
            this.api().columns([5]).every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    });
 

    
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );



    </script>
<?php include ('config_config_cs/fungsi_toast_notifikasi_tambah-pegawai.php'); ?>