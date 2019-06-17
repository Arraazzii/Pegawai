<?php
    $nip  = isset($_GET['nip']) ? $_GET['nip'] : "";
?>
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
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Absen</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="10px">No.</th>
                                                <th>Bulan</th>
                                                <th>Tanggal Absen</th>
                                                <th>Check In</th>
                                                <th>Check Out</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>  
                                        <tbody>
                                        <?php
                                        
                                            $view = mysqli_query($connect, "SELECT * FROM tbl_absen WHERE nip = '$nip'");
                                            $no =1;
                                            while ($row = mysqli_fetch_array($view)) {
                                                
                                                
                                            ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= bln_indo($row['tgl_absen']) ?></td>
                                                <td><?= $row['tgl_absen'] ?></td>
                                                <td><?= $row['check_in'] ?></td>
                                                <td><?= $row['check_out'] ?></td>
                                                <td><?= $row['status'] ?></td>
                                                <td>
                                                    <a title="Lihat Detail" data-target="#myModalDetail<?= $row['id_absen']; ?>" data-toggle="modal" href="#<?= $row['id_absen']; ?>">
                                                        <span class="fa fa-list"></span>
                                                    </a>
                                                </td>
                                            </tr> 
                                            <?php
                                                $no++;
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
                                                <th colspan="2">Cari</th>
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
<?php
                                        
    $view = mysqli_query($connect, "SELECT * FROM tbl_absen WHERE nip = '$nip'");
    $no =1;
    while ($row = mysqli_fetch_array($view)) {
                                                
?>
<div class="modal fade" id="myModalDetail<?php echo $row['id_absen']; ?>" tabindex="-1" role="modal" aria-labelledby="exampleModalLabel" aria-hidden="true ">
    <div class="modal-dialog modal-lg" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Absen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="row">
                        <div class="table-responsive">
                            <div class="col-md-12">
                                <table class="table">
                                    <tr>
                                        <th style="width:40%">Tanggal Absen</th>
                                        <td style="width:60%">
                                            <?= tgl_indo($row['tgl_absen']); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="width:40%">Status Absen</th>
                                        <td style="width:60%">
                                            <?php
                                            if ($row['status'] == 'Hadir') { ?>
                                            <span class="badge badge-success">Hadir</span>
                                            <?php
                                            } else { ?>
                                            <span class="badge badge-danger">Terlambat</span>
                                            <?php 
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <h4>
                        <center>Detail Absen</center>
                    </h4><br />
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h6>
                            Check In
                        </h6>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Check In</th>
                                    <th>Keterangan</th>
                                    <th>Geolocation</th>
                                </tr>
                                <tr>
                                    <td>
                                        <?= $row['check_in']; ?>
                                    </td>
                                    <td>
                                        <?= $row['keterangan_ci']; ?>
                                    </td>
                                    <td>
                                        <a href="https://www.google.com/maps/place/<?= $row1['geotag_ci']; ?>" target="_blank"><?= $row1['geotag_ci']; ?></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-12">
                        <h6>
                            Check Out
                        </h6>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Check Out</th>
                                    <th>Keterangan</th>
                                    <th>Geolocation</th>
                                </tr>
                                <tr>
                                    <td>
                                        <?= $row['check_out']; ?>
                                    </td>
                                    <td>
                                        <?= $row['keterangan_co']; ?>
                                    </td>
                                    <td>
                                        <a href="https://www.google.com/maps/place/<?= $row1['geotag_co']; ?>" target="_blank"><?= $row1['geotag_co']; ?></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
        $no++;
    }
?>
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
            this.api().columns([0, 1, 5]).every( function () {
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