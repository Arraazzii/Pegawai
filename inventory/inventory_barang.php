
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
    

            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="alert alert-success alert-dismissible col-md-12" role="alert">
                        <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <strong><i class="fa fa-warning"></i></strong> <marquee><p style="font-family: Impact; font-size: 13pt">Barang yang dipinjam menjadi tanggung jawab peminjam!</p></marquee>
                    </div>
                </div>

                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-2">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <a href="?view=inventory-barang&id=9973861hupa&name=pegaaplication&Inventory">
                                    <h1 class="font-light text-white"><i class="fas fa-briefcase"></i></h1>
                                    <h6 class="text-white">Inventory</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <a href="?view=inventory-barang&id=9973850hupa&name=pegaaplication&inventoryBarang">
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
                                <a href="?view=tambah-barang&id=9973865hupa&name=pegaaplication&tambahBarang">
                                    <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                                    <h6 class="text-white">Tambah Barang</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="&mod=add" data-toggle="modal" data-target="#Modal1">
                            <div class="card card-hover">
                                <div class="box bg-purple text-center">
                                        <h1 class="font-light text-white"><i class="mdi mdi-file-excel"></i></h1>
                                        <h6 class="text-white">Export</h6>
                                </div>
                            </div>
                        </a>
                        <!--modal-->
                            <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
                                <div class="modal-dialog" role="document ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Export Dokumen Berdasarkan Kategori</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true ">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" action="config_config_cs/export-excel-inventory.php" method="post" id="tambah">
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <label for="fname" class="col-sm-2 text-left control-label col-form-label">Tipe</label>
                                                        <div class="col-sm-9">
                                                            <select name="tipe" class="form-control" id="type" required="">
                                                                <option value="">Pilih Tipe</option>
                                                                <option value="All">All</option>
                                                                <option value="Elektronik">Elektronik</option>
                                                                <option value="Non Elektronik">Non Elektronik</option>
                                                                <option value="Indosat">Indosat</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fname" class="col-sm-2 text-left control-label col-form-label">Status</label>
                                                        <div class="col-sm-9">
                                                            <select name="status" class="form-control" id="type" required="">
                                                                <option value="">Pilih Status</option>
                                                                <option value="All">All</option>
                                                                <option value="Approved">Ada</option>
                                                                <option value="Pinjam">Dipinjam</option>
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
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Inventory Barang</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No Inventory</th>
                                                <th>Nama Barang</th>
                                                <th>Serial Number</th>
                                                <th>Tipe</th>
                                                <th>Lokasi</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>  
                                        <tbody>
                                            <?php
                                        
                                            $view = mysqli_query($connect, "SELECT * FROM tbl_inventory WHERE stat='Approved'");
                                                    
                                            while ($row = mysqli_fetch_array($view)) {
                                                
                                                
                                            ?>
                                            <tr>
                                                <td><?php echo $row['no_inventory'];?></td>
                                                <td><?php echo $row['nama_barang'];?></td>
                                                <td><?php echo $row['serial_number'];?></td>
                                                <td><?php echo $row['tipe'];?></td>
                                                <td><?php echo $row['lokasi'];?></td>
                                                <td><a data-toggle="tooltip" title="Lihat Detail" href="?view=detail-barang&id=997386798hupa&name=pegaaplication&detailBarang&noinven=<?php echo $row['no_inventory'];?>">
                                                        <span class="fa fa-list"></span></a> |
                                                    <a href="#<?php echo $row['no_inventory'];?>" data-target="#myModal<?php echo $row['no_inventory']; ?>" data-toggle="modal" title="Edit Data">
                                                        <span class="fa fa-edit"></span></a> | 
                                                    <a href="config_config_cs/del-barang-con.php?id=<?php echo $row['no_inventory']; ?>" data-toggle="tooltip" title="Hapus Data" onclick='/return konfirmasi("Menghapus data <?php echo $row[0];?>")'><span class='fa fa-trash'></span></a>
                                                </td>
                                            </tr>

                            <div class="modal fade" id="myModal<?php echo $row['no_inventory']; ?>" tabindex="-1" role="modal" aria-labelledby="exampleModalLabel" aria-hidden="true ">
                                <div class="modal-dialog" role="document ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Barang</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true ">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" action="config_config_cs/edit-barang-con.php" method="post">
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">No. Inventory</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="noinven_edit" class="form-control" id="fname" placeholder="No. Inventory" value="<?php echo $row['no_inventory']; ?>" required=""readonly/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Nama Barang</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="nama_barang_edit" class="form-control" id="lname" placeholder="Nama Barang" value="<?php echo $row['nama_barang']; ?>"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Serial Number</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="serial_edit" class="form-control" id="lname" placeholder="Serial Number" value="<?php echo $row['serial_number']; ?>"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tipe</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="tipe_edit" class="form-control" id="fname" placeholder="Tipe" value="<?php echo $row['tipe']; ?>" required=""readonly/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Deskripsi</label>
                                                        <div class="col-sm-9">
                                                            <textarea class="form-control" name="deskripsi_edit"><?php echo $row['deskripsi']; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Lokasi</label>
                                                        <div class="col-sm-9">
                                                        <select name="lokasi_edit" class="form-control">
                                                            <?php
                                                                $q = mysqli_query($connect, "SELECT * from tbl_data_lokasi");

                                                                while($a = mysqli_fetch_array($q))
                                                                {
                                                                    echo "<option value='$a[1]'>$a[1]</option>";
                                                                }
                                                            
                                                            ?>
                                                        </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Penanggung Jawab</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="pj_edit" class="form-control" id="lname" placeholder="Penanggung Jawab" value="<?php echo $row['pj']; ?>"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Keterangan</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="ket_edit" class="form-control" id="lname" placeholder="Keterangan" value="<?php echo $row['ket']; ?>"/>
                                                        </div>
                                                    </div>
                                                    <div class="border-top">
                                                        <div class="card-body">
                                                            <input type="submit" name="simpan_edit" class="btn btn-primary" value="SIMPAN">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
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
        $('#zero_config').DataTable({
            "bProcessing": true,
            "bServerSide": true,
            "ajax": "serverside/response.php?view=inventory",
        });
    </script>
<?php include ('config_config_cs/fungsi_toast_notifikasi_tambah_barang.php'); ?>