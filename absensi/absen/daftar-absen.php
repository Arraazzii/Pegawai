<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
<link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<link href="assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
<link href="dist/css/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
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
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <a href="&mod=add" data-toggle="modal" data-target="#ModalX">
                <div class="card card-hover">
                    <div class="box bg-purple text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-file-excel"></i></h1>
                        <h6 class="text-white">Export</h6>
                    </div>
                </div>
            </a>
            <!--modal-->
            <div class="modal fade" id="ModalX" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
                <div class="modal-dialog" role="document ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Export Dokumen Berdasarkan Kategori</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true ">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="config_config_cs/export-excel-absen.php" method="post" id="tambah">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-left control-label col-form-label">Nama Pegawai</label>
                                        <div class="col-sm-9">
                                            <select name="nip" class="form-control" id="type" required="">
                                                <option value="">Nama Pegawai</option>
                                                <?php
                                                    $q = mysqli_query($connect, "SELECT * FROM tbl_pegawai ORDER BY nama ASC"); 

                                                      while ($a = mysqli_fetch_array($q)){
                                                        echo "<option value='$a[0]'>$a[1]</option>";
                                                      
                                                      }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-left control-label col-form-label">Bulan</label>
                                        <div class="col-sm-6">
                                            <div class="input-group date form_month" data-date-format="mm" data-link-field="dtp_input5">
                                                <input class="form-control" size="16" type="text" value="" placeholder="Bulan" name="bulan">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                            </div>
                                            <input type="hidden" id="dtp_input5" value="" /><br />
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="input-group date form_year" data-date-format="yyyy" data-link-field="dtp_input4">
                                                <input class="form-control" size="16" type="text" value="" placeholder="Tahun" name="tahun">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                            </div>
                                            <input type="hidden" id="dtp_input4" value="" /><br />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-left control-label col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <select name="status" class="form-control" id="type" required="">
                                                <option value="">Pilih Status</option>
                                                <option value="All">All</option>
                                                <option value="Hadir">Hadir</option>
                                                <option value="Terlambat">Terlambat</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <div class="card-body">
                                            <input type="submit" name="export" class="btn btn-primary" id="submit" value="EXPORT">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                    <th>Nama Pegawai</th>
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
                                        
                                            $view = mysqli_query($connect, "SELECT * FROM tbl_absen JOIN tbl_pegawai ON tbl_absen.nip = tbl_pegawai.nik");
                                            $no =1;
                                            while ($row = mysqli_fetch_array($view)) {
                                                
                                                
                                            ?>
                                <tr>
                                    <td>
                                        <?= $no ?>
                                    </td>
                                    <td>
                                        <?= $row['nik'] ?> - <?= $row['nama'] ?>
                                    </td>
                                    <td>
                                        <?= bln_indo($row['tgl_absen']) ?>
                                    </td>
                                    <td>
                                        <?= $row['tgl_absen'] ?>
                                    </td>
                                    <td>
                                        <?= $row['check_in'] ?>
                                    </td>
                                    <td>
                                        <?= $row['check_out'] ?>
                                    </td>
                                    <td>
                                        <?= $row['status'] ?>
                                    </td>
                                    <td>
                                        <a title="Lihat Detail" data-target="#myModalDetail<?= $row['id_absen']; ?>" data-toggle="modal" href="#<?= $row['id_absen']; ?>">
                                            <span class="fa fa-list"></span>
                                        </a> |
                                        <a data-target="#myModalEdit<?= $row['id_absen']; ?>" data-toggle="modal" href="#<?= $row['id_absen']; ?>" title="Edit Data">
                                            <span class="fa fa-edit"></span>
                                        </a> |
                                        <a href="config_config_cs/del-absen-pegawai-con.php?id=<?= $row['id_absen']; ?>" data-toggle="tooltip" title="Hapus Data" onClick="return confirm('Anda Yakin Ingin Menghapus Data <?php echo $row['nama'];?> Di Tanggal <?= $row['tgl_absen'] ?> ?')">
                                            <span class="fa fa-trash"></span>
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
                                        
    $view = mysqli_query($connect, "SELECT * FROM tbl_absen JOIN tbl_pegawai ON tbl_pegawai.nik = tbl_absen.nip ");
    $no =1;
    while ($row = mysqli_fetch_array($view)) {
                                                
?>
<div class="modal fade" id="myModalEdit<?php echo $row['id_absen']; ?>" tabindex="-1" role="modal" aria-labelledby="exampleModalLabel" aria-hidden="true ">
    <div class="modal-dialog modal-lg" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Absen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <form class="form-horizontal children" method="POST" action="config_config_cs/edit-absen-con.php">
                                    <div class="
                                card-body">
                                        <div class="form-group col-md-12">
                                            <input type="hidden" name="id" value="<?= $row['id_absen'] ?>">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="control-label">Nomor Induk Pegawai</label>
                                                    <input maxlength="100" name="nip" type="text" id="nik<?= $row['id_absen'] ?>" required="required" class="form-control" placeholder="NIP Pegawai" value="<?= $row['nip'] ?>" readonly />
                                                    <span id="pesan<?= $row['id_absen'] ?>"></span>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="control-label">Tanggal Absen</label>
                                                    <div class="input-group date form_date" data-date-format="yyyy-mm-dd" data-link-field="dtp_input1">
                                                        <input class="form-control" size="16" type="text" value="<?= $row['tgl_absen'] ?>" placeholder="yyyy-mm-dd" name="tgl_absen">
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                                    </div>
                                                    <input type="hidden" id="dtp_input1" value="" /><br />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="control-label">Check In</label>
                                                    <div class="input-group date form_datetime" data-date-format="yyyy-mm-dd hh:ii:ss" data-link-field="dtp_input2">
                                                        <input class="form-control" size="16" type="text" value="<?= $row['check_in'] ?>" placeholder="yyyy-mm-dd hh:ii:ss" name="check_in">
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                                    </div>
                                                    <input type="hidden" id="dtp_input2" value="" /><br />
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="control-label">Check Out</label>
                                                    <div class="input-group date form_datetime2" data-date-format="yyyy-mm-dd hh:ii:ss" data-link-field="dtp_input3">
                                                        <input class="form-control" size="16" type="text" value="<?= $row['check_out'] ?>" placeholder="yyyy-mm-dd hh:ii:ss" name="check_out">
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                                    </div>
                                                    <input type="hidden" id="dtp_input3" value="" /><br />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="control-label">Keterangan Check In</label>
                                                    <textarea class="form-control" name="keterangan_ci"><?= $row['keterangan_ci'] ?></textarea>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="control-label">Keterangan Check Out</label>
                                                    <textarea class="form-control" name="keterangan_co"><?= $row['keterangan_co'] ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="control-label">Geolocation Check In</label>
                                                    <input maxlength="100" name="geotag_ci" type="text" required="required" class="form-control" placeholder="Geolocation Check In" value="<?= $row['geotag_ci'] ?>" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="control-label">Geolocation Check Out</label>
                                                    <input maxlength="100" name="geotag_co" type="text" required="required" class="form-control" placeholder="Geolocation Check Out" value="<?= $row['geotag_co'] ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <div class="card-body">
                                            <button type="submit" class="btn btn-primary" name="simpan">Save</button>
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
<?php
        $no++;
    }
?>
<?php
                                        
    $view1 = mysqli_query($connect, "SELECT * FROM tbl_absen JOIN tbl_pegawai ON tbl_pegawai.nik = tbl_absen.nip ");
    $no =1;
    while ($row1 = mysqli_fetch_array($view1)) {
                                                
?>
<div class="modal fade" id="myModalDetail<?php echo $row1['id_absen']; ?>" tabindex="-1" role="modal" aria-labelledby="exampleModalLabel" aria-hidden="true ">
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
                                        <th style="width:40%">Nama Pegawai</th>
                                        <td style="width:60%">
                                            <?= $row1['nik']; ?> -
                                            <?= $row1['nama']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="width:40%">Tanggal Absen</th>
                                        <td style="width:60%">
                                            <?= tgl_indo($row1['tgl_absen']); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="width:40%">Status Absen</th>
                                        <td style="width:60%">
                                            <?php
                                            if ($row1['status'] == 'Hadir') { ?>
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
                                        <?= $row1['check_in']; ?>
                                    </td>
                                    <td>
                                        <?= $row1['keterangan_ci']; ?>
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
                                        <?= $row1['check_out']; ?>
                                    </td>
                                    <td>
                                        <?= $row1['keterangan_co']; ?>
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
<script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="assets/extra-libs/datetimepicker/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script>
/****************************************
 *       Basic Table                   *
 ****************************************/
// DataTable
$('#zero_config tfoot th').each(function() {
    var title = $(this).text();
    $(this).html('<input type="text" placeholder="' + title + '" />');
});

var table = $('#zero_config').DataTable({
    language: {
        "decimal": "",
        "emptyTable": "Data Tidak Tersedia Di Table",
        "info": "Menampilkan _START_ Sampai _END_ Dari _TOTAL_ Data",
        "infoEmpty": "Menampilkan 0 Sampai 0 Dari 0 Data",
        "infoFiltered": "(Dari Total _MAX_ Data)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Menampilkan _MENU_ Data",
        "loadingRecords": "Loading...",
        "processing": "Memproses...",
        "search": "Cari :",
        "zeroRecords": "Tidak Ada Data Yang Sesuai",
        "paginate": {
            "first": "Pertama",
            "last": "Terakhir",
            "next": "Selanjutnya",
            "previous": "Sebelumnya"
        },
        "aria": {
            "sortAscending": ": activate to sort column ascending",
            "sortDescending": ": activate to sort column descending"
        }
    },
    initComplete: function() {
        this.api().columns([0, 1, 2, 6]).every(function() {
            var column = this;
            var select = $('<select><option value=""></option></select>')
                .appendTo($(column.footer()).empty())
                .on('change', function() {
                    var val = $.fn.dataTable.util.escapeRegex(
                        $(this).val()
                    );

                    column
                        .search(val ? '^' + val + '$' : '', true, false)
                        .draw();
                });

            column.data().unique().sort().each(function(d, j) {
                select.append('<option value="' + d + '">' + d + '</option>')
            });
        });
    }
});



// Apply the search
table.columns().every(function() {
    var that = this;

    $('input', this.footer()).on('keyup change', function() {
        if (that.search() !== this.value) {
            that
                .search(this.value)
                .draw();
        }
    });
});
</script>
<script>
$('.form_datetime').datetimepicker({
    //language:  'fr',
    weekStart: 1,
    todayBtn: 1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    forceParse: 0,
    showMeridian: 1
});
$('.form_datetime2').datetimepicker({
    //language:  'fr',
    weekStart: 1,
    todayBtn: 1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    forceParse: 0,
    showMeridian: 1
});
$('.form_date').datetimepicker({
    weekStart: 1,
    todayBtn: 1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
});
$('.form_month').datetimepicker({
    weekStart: 1,
    todayBtn: 1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 3,
    minView: 3,
    forceParse: 0
});
$('.form_year').datetimepicker({
    weekStart: 1,
    todayBtn: 1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 4,
    minView: 4,
    forceParse: 0
});
</script>
<?php
                                        
    $view = mysqli_query($connect, "SELECT * FROM tbl_absen JOIN tbl_pegawai ON tbl_pegawai.nik = tbl_absen.nip ");
    $no =1;
    while ($row = mysqli_fetch_array($view)) {
                                                
?>
<script type="text/javascript">
$(document).ready(function() {
            $('#nik<?= $row['
                id_absen '] ?>').change(function() {
                    $('#pesan<?= $row['
                        id_absen '] ?>').html('<img style="margin-left:10px; width:10px" src="loading.gif">');
                    var nik = $(this).val();

                    $.ajax({
                            type: 'POST',
                            url: 'proses.php',
                            data: 'nik=' + nik,
                            success: function(data) {
                                $('#pesan<?= $row['
                                    id_absen '] ?>').html(data);
                            })

                    });
            });
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#nik<?= $row['
        id_absen '] ?>').show(function() {
        $('#pesan<?= $row['
            id_absen '] ?>').html('<img style="margin-left:10px; width:10px" src="loading.gif">');
        var nik = $(this).val();

        $.ajax({
            type: 'POST',
            url: 'proses.php',
            data: 'nik=' + nik,
            success: function(data) {
                $('#pesan<?= $row['
                    id_absen '] ?>').html(data);
                hitung();
            }
        })

    });
});
</script>
<?php
        $no++;
    }
?>
<?php include ('config_config_cs/fungsi_toast_notifikasi_tambah_barang.php'); ?>