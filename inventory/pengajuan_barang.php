<?php
include ('config_config_cs/fungsi_no_otomatis_inventory.php');

?>
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
                <?php
                    if($_SESSION['leveluser'] == 'USER') { ?>
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <a href="#myModal1" data-toggle = "modal">
                                    <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                                    <h6 class="text-white">Pengajuan Barang</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
                </div>

                            <div class="modal fade" id="myModal1" tabindex="-1" role="modal" aria-labelledby="exampleModalLabel" aria-hidden="true ">
                                <div class="modal-dialog" role="document ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Pengajuan Barang</h5>
                                            <input type="hidden" id="kodeElektronik" value="<?php echo $kodeElektronik;?>">
                                            <input type="hidden" id="kodeNonElektronik" value="<?php echo $kodeNonElektronik;?>">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true ">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" action="config_config_cs/pengajuan_barang_con.php" method="post">
                                            <input type="hidden" value="<?php echo $nip;?>" name="pj">
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">No. Inventory</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="noinven" class="form-control" id="nomor" placeholder="No. Inventory" required=""readonly/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Nama Barang</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="nama_barang" class="form-control" id="lname" placeholder="Nama Barang"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tipe</label>
                                                        <div class="col-sm-9">
                                                            <select name="tipe" class="form-control" id="type">
                                                                <option value="">Pilih Tipe</option>
                                                                <option value="Elektronik">Elektronik</option>
                                                                <option value="Non Elektronik">Non Elektronik</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Harga Barang</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="harga_barang" class="form-control" id="lname" placeholder="Harga Barang"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Lokasi Pembelian</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="lokasi_beli" class="form-control" id="lname" placeholder="Lokasi Pembelian Barang"/>
                                                        </div>
                                                    </div>
                                                    <div class="border-top">
                                                        <div class="card-body">
                                                            <input type="submit" name="submit" class="btn btn-primary" value="SUBMIT">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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
                                <h5 class="card-title">Data Pengajuan Barang</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">

                                            <?php
                                                if ($_SESSION['leveluser'] == 'SUPER ADMIN') { ?>
                                                <thead>
                                                    <tr>
                                                        <th>No Inventory</th>
                                                        <th>Nama Barang</th>
                                                        <th>Harga Barang</th>
                                                        <th>Lokasi Pembelian</th>
                                                        <th>Diajukan Oleh</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $view = mysqli_query($connect, "SELECT * FROM tbl_inventory JOIN tbl_harga_barang ON tbl_inventory.no_inventory = tbl_harga_barang.no_inventory JOIN tbl_pegawai ON tbl_pegawai.nik = tbl_inventory.pj WHERE tbl_inventory.stat='Pending2'");
                                                        while ($row = mysqli_fetch_array($view)) {
                                                    ?>
                                            <tr>
                                                <td><?php echo $row['no_inventory'];?></td>
                                                <td><?php echo $row['nama_barang'];?></td>
                                                <td><?php echo $row['harga'];?></td>
                                                <td><?php echo $row['lokasi_beli'];?></td>
                                                <td><?php echo $row['nama'];?></td>
                                                <td>
                                                    <?php
                                                        if ($row['stat'] == 'Pending1' || $row['stat'] == 'Pending2' || $row['stat'] == 'Pending3') { ?>
                                                            <span class="badge badge-pill badge-warning text-white">PENDING on <?php echo $row['user'];?></span>
                                                    <?php
                                                        } elseif ($row['stat'] == 'User1') {?>
                                                            <span class="badge badge-pill badge-info text-white">PROCCESS(uang) on <?php echo $row['user'];?></span>
                                                    <?php
                                                        } elseif ($row['stat'] == 'Finance2') {?>
                                                            <span class="badge badge-pill badge-info text-white">PROCCESS(uang) on <?php echo $row['user'];?></span>
                                                    <?php
                                                        } elseif ($row['stat'] == 'User2'){?>
                                                            <span class="badge badge-pill badge-info text-white">PROCCESS(barang) on <?php echo $row['user'];?></span>
                                                    <?php
                                                        } elseif ($row['stat'] == 'Finance3'){?>
                                                            <span class="badge badge-pill badge-info text-white">PROCCESS(barang) on <?php echo $row['user'];?></span>
                                                    <?php
                                                        } elseif ($row['stat'] == 'Rejected') {?>
                                                            <span class="badge badge-pill badge-danger text-white">REJECTED on <?php echo $row['user'];?></span>
                                                    <?php
                                                        } elseif ($row['stat'] == 'Approved') {?>
                                                            <span class="badge badge-pill badge-success text-white">APPROVED</span>
                                                    <?php
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="config_config_cs/approve2-pengajuan-con.php?id=<?php echo $row['no_inventory']; ?>&level=<?php echo $_SESSION['leveluser']?>" data-toggle="tooltip" title="Approve">
                                                        <span class="fa fa-check"></span></a>
                                                    | <a href="config_config_cs/reject-pengajuan-con.php?id=<?php echo $row['no_inventory']; ?>&level=<?php echo $_SESSION['leveluser']?>" data-toggle="tooltip" title="Reject")'>
                                                        <span class='fa fa-times'></span></a>
                                                </td>
                                            </tr>
                                            </tbody>

                                            <?php
                                            }
                                            ?>

                                            <?php
                                                } elseif ($_SESSION['leveluser'] == 'ADMIN') { ?>
                                                 <thead>
                                                    <tr>
                                                        <th>No Inventory</th>
                                                        <th>Nama Barang</th>
                                                        <th>Harga Barang</th>
                                                        <th>Lokasi Pembelian</th>
                                                        <th>Diajukan Oleh</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php
                                                        $view = mysqli_query($connect, "SELECT * FROM tbl_inventory JOIN tbl_harga_barang ON tbl_inventory.no_inventory = tbl_harga_barang.no_inventory JOIN tbl_pegawai ON tbl_inventory.pj = tbl_pegawai.nik ORDER BY stat ASC");
                                                        while ($row = mysqli_fetch_array($view)) {
                                                    ?>

                                                    <tr>
                                                <td><?php echo $row['no_inventory'];?></td>
                                                <td><?php echo $row['nama_barang'];?></td>
                                                <td><?php echo $row['harga'];?></td>
                                                <td><?php echo $row['lokasi_beli'];?></td>
                                                <td><?php echo $row['nama'];?></td>
                                                <td>
                                                    <?php
                                                        if ($row['stat'] == 'Pending1' || $row['stat'] == 'Pending2' || $row['stat'] == 'Pending3') { ?>
                                                            <span class="badge badge-pill badge-warning text-white">PENDING on <?php echo $row['user'];?></span>
                                                    <?php
                                                        } elseif ($row['stat'] == 'User1') {?>
                                                            <span class="badge badge-pill badge-info text-white">PROCCESS(uang) on <?php echo $row['user'];?></span>
                                                    <?php
                                                        } elseif ($row['stat'] == 'Finance2') {?>
                                                            <span class="badge badge-pill badge-info text-white">PROCCESS(uang) on <?php echo $row['user'];?></span>
                                                    <?php
                                                        } elseif ($row['stat'] == 'User2'){?>
                                                            <span class="badge badge-pill badge-info text-white">PROCCESS(barang) on <?php echo $row['user'];?></span>
                                                    <?php
                                                        } elseif ($row['stat'] == 'Finance3'){?>
                                                            <span class="badge badge-pill badge-info text-white">PROCCESS(barang) on <?php echo $row['user'];?></span>
                                                    <?php
                                                        } elseif ($row['stat'] == 'Rejected') {?>
                                                            <span class="badge badge-pill badge-danger text-white">REJECTED on <?php echo $row['user'];?></span>
                                                    <?php
                                                        } elseif ($row['stat'] == 'Approved') {?>
                                                            <span class="badge badge-pill badge-success text-white">APPROVED</span>
                                                    <?php
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            </tbody>

                                            <?php
                                            }
                                            ?>

                                            <?php
                                          } elseif ($_SESSION['leveluser'] == 'ADMIN GUDANG') { ?>
                                                 <thead>
                                                    <tr>
                                                        <th>No Inventory</th>
                                                        <th>Nama Barang</th>
                                                        <th>Harga Barang</th>
                                                        <th>Lokasi Pembelian</th>
                                                        <th>Diajukan Oleh</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php
                                                        $view = mysqli_query($connect, "SELECT * FROM tbl_inventory JOIN tbl_harga_barang ON tbl_inventory.no_inventory = tbl_harga_barang.no_inventory JOIN tbl_pegawai ON tbl_inventory.pj = tbl_pegawai.nik ORDER BY stat ASC");
                                                        while ($row = mysqli_fetch_array($view)) {
                                                    ?>

                                                    <tr>
                                                <td><?php echo $row['no_inventory'];?></td>
                                                <td><?php echo $row['nama_barang'];?></td>
                                                <td><?php echo $row['harga'];?></td>
                                                <td><?php echo $row['lokasi_beli'];?></td>
                                                <td><?php echo $row['nama'];?></td>
                                                <td>
                                                    <?php
                                                        if ($row['stat'] == 'Pending1' || $row['stat'] == 'Pending2' || $row['stat'] == 'Pending3') { ?>
                                                            <span class="badge badge-pill badge-warning text-white">PENDING on <?php echo $row['user'];?></span>
                                                    <?php
                                                        } elseif ($row['stat'] == 'User1') {?>
                                                            <span class="badge badge-pill badge-info text-white">PROCCESS(uang) on <?php echo $row['user'];?></span>
                                                    <?php
                                                        } elseif ($row['stat'] == 'Finance2') {?>
                                                            <span class="badge badge-pill badge-info text-white">PROCCESS(uang) on <?php echo $row['user'];?></span>
                                                    <?php
                                                        } elseif ($row['stat'] == 'User2'){?>
                                                            <span class="badge badge-pill badge-info text-white">PROCCESS(barang) on <?php echo $row['user'];?></span>
                                                    <?php
                                                        } elseif ($row['stat'] == 'Finance3'){?>
                                                            <span class="badge badge-pill badge-info text-white">PROCCESS(barang) on <?php echo $row['user'];?></span>
                                                    <?php
                                                        } elseif ($row['stat'] == 'Rejected') {?>
                                                            <span class="badge badge-pill badge-danger text-white">REJECTED on <?php echo $row['user'];?></span>
                                                    <?php
                                                        } elseif ($row['stat'] == 'Approved') {?>
                                                            <span class="badge badge-pill badge-success text-white">APPROVED</span>
                                                    <?php
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            </tbody>

                                            <?php
                                            }
                                            ?> 
                                            
                                            <?php
                                            } elseif($_SESSION['leveluser'] == 'ADMIN FINANCE') { ?>
                                                <thead>
                                                    <tr>
                                                        <th>No Inventory</th>
                                                        <th>Nama Barang</th>
                                                        <th>Harga Barang</th>
                                                        <th>Lokasi Pembelian</th>
                                                        <th>Diajukan Oleh</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                       $view = mysqli_query($connect, "SELECT * FROM tbl_inventory JOIN tbl_harga_barang ON tbl_inventory.no_inventory = tbl_harga_barang.no_inventory JOIN tbl_pegawai on tbl_pegawai.nik = tbl_inventory.pj WHERE tbl_inventory.stat='Pending3' || tbl_inventory.stat='Finance2' || tbl_inventory.stat='Finance3'");
                                                       while ($row = mysqli_fetch_array($view)) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row['no_inventory'];?></td>
                                                        <td><?php echo $row['nama_barang'];?></td>
                                                        <td><?php echo $row['harga'];?></td>
                                                        <td><?php echo $row['lokasi_beli'];?></td>
                                                        <td><?php echo $row['nama'];?></td>
                                                        <td>
                                                            <?php
                                                                if ($row['stat'] == 'Pending1' || $row['stat'] == 'Pending2' || $row['stat'] == 'Pending3') { ?>
                                                                    <span class="badge badge-pill badge-warning text-white">PENDING on <?php echo $row['user'];?></span>
                                                            <?php
                                                                } elseif ($row['stat'] == 'User1') {?>
                                                                    <span class="badge badge-pill badge-info text-white">PROCCESS(uang) on <?php echo $row['user'];?></span>
                                                            <?php
                                                                } elseif ($row['stat'] == 'Finance2') {?>
                                                                    <span class="badge badge-pill badge-info text-white">PROCCESS(uang) on <?php echo $row['user'];?></span>
                                                            <?php
                                                                } elseif ($row['stat'] == 'User2'){?>
                                                                    <span class="badge badge-pill badge-info text-white">PROCCESS(barang) on <?php echo $row['user'];?></span>
                                                            <?php
                                                                } elseif ($row['stat'] == 'Finance3'){?>
                                                                    <span class="badge badge-pill badge-info text-white">PROCCESS(barang) on <?php echo $row['user'];?></span>
                                                            <?php
                                                                } elseif ($row['stat'] == 'Rejected') {?>
                                                                    <span class="badge badge-pill badge-danger text-white">REJECTED on <?php echo $row['user'];?></span>
                                                            <?php
                                                                } elseif ($row['stat'] == 'Approved') {?>
                                                                    <span class="badge badge-pill badge-success text-white">APPROVED</span>
                                                            <?php
                                                                }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($row['stat'] == 'Pending3') { ?>
                                                                    <a href="config_config_cs/approve3-pengajuan-con.php?id=<?php echo $row['no_inventory']; ?>&level=<?php echo $_SESSION['leveluser']?>" title="Approve">
                                                                        <span class="fa fa-check"></span></a>
                                                            <?php
                                                                } elseif($row['stat'] == 'Finance2') {?>
                                                                    <a href="config_config_cs/finance2-pengajuan-con.php?id=<?php echo $row['no_inventory']; ?>&level=<?php echo $_SESSION['leveluser']?>" title="Approve">
                                                                        <span class="fa fa-check"></span></a>
                                                            <?php
                                                                } elseif($row['stat'] == 'Finance3') {?>
                                                                    <a href="config_config_cs/finance3-pengajuan-con.php?id=<?php echo $row['no_inventory']; ?>&level=<?php echo $_SESSION['leveluser']?>" title="Approve">
                                                                        <span class="fa fa-check"></span></a>
                                                            <?php
                                                                }
                                                            ?>
                                                            | <a href="config_config_cs/reject-pengajuan-con.php?id=<?php echo $row['no_inventory']; ?>&level=<?php echo $_SESSION['leveluser']?>" title="Reject">
                                                                <span class='fa fa-times'></span></a>
                                                        </td>
                                                    </tr>
                                                <?php
                                                    }
                                                ?>
                                                </tbody>

                                            <?php
                                                } elseif ($_SESSION['leveluser'] == 'ADMIN TEKNIS') {?>
                                                <thead>
                                                    <tr>
                                                        <th>No Inventory</th>
                                                        <th>Nama Barang</th>
                                                        <th>Harga Barang</th>
                                                        <th>Lokasi Pembelian</th>
                                                        <th>Diajukan Oleh</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php
                                                        $view = mysqli_query($connect, "SELECT * FROM tbl_inventory JOIN tbl_harga_barang ON tbl_inventory.no_inventory = tbl_harga_barang.no_inventory JOIN tbl_pegawai on tbl_pegawai.nik = tbl_inventory.pj WHERE tbl_inventory.stat='Pending1'");
                                                        while ($row = mysqli_fetch_array($view)) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row['no_inventory'];?></td>
                                                        <td><?php echo $row['nama_barang'];?></td>
                                                        <td><?php echo $row['harga'];?></td>
                                                        <td><?php echo $row['lokasi_beli'];?></td>
                                                        <td><?php echo $row['nama'];?></td>
                                                        <td>
                                                            <?php
                                                                if ($row['stat'] == 'Pending1' || $row['stat'] == 'Pending2' || $row['stat'] == 'Pending3') { ?>
                                                                    <span class="badge badge-pill badge-warning text-white">PENDING on <?php echo $row['user'];?></span>
                                                            <?php
                                                                } elseif ($row['stat'] == 'User1') {?>
                                                                    <span class="badge badge-pill badge-info text-white">PROCCESS(uang) on <?php echo $row['user'];?></span>
                                                            <?php
                                                                } elseif ($row['stat'] == 'Finance2') {?>
                                                                    <span class="badge badge-pill badge-info text-white">PROCCESS(uang) on <?php echo $row['user'];?></span>
                                                            <?php
                                                                } elseif ($row['stat'] == 'User2'){?>
                                                                    <span class="badge badge-pill badge-info text-white">PROCCESS(barang) on <?php echo $row['user'];?></span>
                                                            <?php
                                                                } elseif ($row['stat'] == 'Finance3'){?>
                                                                    <span class="badge badge-pill badge-info text-white">PROCCESS(barang) on <?php echo $row['user'];?></span>
                                                            <?php
                                                                } elseif ($row['stat'] == 'Rejected') {?>
                                                                    <span class="badge badge-pill badge-danger text-white">REJECTED on <?php echo $row['user'];?></span>
                                                            <?php
                                                                } elseif ($row['stat'] == 'Approved') {?>
                                                                    <span class="badge badge-pill badge-success text-white">APPROVED</span>
                                                            <?php
                                                                }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <a href="config_config_cs/approve1-pengajuan-con.php?id=<?php echo $row['no_inventory']; ?>&level=<?php echo $_SESSION['leveluser']?>" data-toggle="tooltip" title="Approve">
                                                                <span class="fa fa-check"></span></a>
                                                            | <a href="config_config_cs/reject-pengajuan-con.php?id=<?php echo $row['no_inventory']; ?>&level=<?php echo $_SESSION['leveluser']?>" data-toggle="tooltip" title="Reject">
                                                                <span class='fa fa-times'></span></a>
                                                        </td>
                                                    </tr>
                                                 </tbody>

                                            <?php
                                            }
                                            ?>

                                            <?php
                                                } elseif ($_SESSION['leveluser'] == 'USER') {?>
                                                <thead>
                                                    <tr>
                                                        <th>No Inventory</th>
                                                        <th>Nama Barang</th>
                                                        <th>Harga Barang</th>
                                                        <th>Lokasi Pembelian</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php
                                                        $view = mysqli_query($connect, "SELECT * FROM tbl_inventory JOIN tbl_harga_barang ON tbl_inventory.no_inventory = tbl_harga_barang.no_inventory WHERE tbl_inventory.pj = '$nip' AND stat!='Pinjam' AND stat!='PendingPinjam'");
                                                        while ($row = mysqli_fetch_array($view)) {
                                                    ?>
                                                    <tr>
                                                <td><?php echo $row['no_inventory'];?></td>
                                                <td><?php echo $row['nama_barang'];?></td>
                                                <td><?php echo $row['harga'];?></td>
                                                <td><?php echo $row['lokasi_beli'];?></td>
                                                <td>
                                                    <?php
                                                        if ($row['stat'] == 'Pending1' || $row['stat'] == 'Pending2' || $row['stat'] == 'Pending3') { ?>
                                                            <span class="badge badge-pill badge-warning text-white">PENDING on <?php echo $row['user'];?></span>
                                                    <?php
                                                        } elseif ($row['stat'] == 'User1') {?>
                                                            <span class="badge badge-pill badge-info text-white">PROCCESS(uang) on <?php echo $row['user'];?></span>
                                                    <?php
                                                        } elseif ($row['stat'] == 'Finance2') {?>
                                                            <span class="badge badge-pill badge-info text-white">PROCCESS(uang) on <?php echo $row['user'];?></span>
                                                    <?php
                                                        } elseif ($row['stat'] == 'User2'){?>
                                                            <span class="badge badge-pill badge-info text-white">PROCCESS(barang) on <?php echo $row['user'];?></span>
                                                    <?php
                                                        } elseif ($row['stat'] == 'Finance3'){?>
                                                            <span class="badge badge-pill badge-info text-white">PROCCESS(barang) on <?php echo $row['user'];?></span>
                                                    <?php
                                                        } elseif ($row['stat'] == 'Rejected') {?>
                                                            <span class="badge badge-pill badge-danger text-white">REJECTED on <?php echo $row['user'];?></span>
                                                    <?php
                                                        } elseif ($row['stat'] == 'Approved') {?>
                                                            <span class="badge badge-pill badge-success text-white">APPROVED</span>
                                                    <?php
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                        if ($row['stat'] == 'User1') {?>
                                                            <a href="config_config_cs/user1-pengajuan-con.php?id=<?php echo $row['no_inventory']; ?>" data-toggle="tooltip" title="Approve">
                                                            <span class='fa fa-check'></span></a>
                                                    <?php
                                                        } elseif ($row['stat'] == 'User2') {?>
                                                            <a href="config_config_cs/user2-pengajuan-con.php?id=<?php echo $row['no_inventory']; ?>" data-toggle="tooltip" title="Approve">
                                                            <span class='fa fa-check'></span></a>
                                                    <?php
                                                        }
                                                    ?>
                                                    | <a href="#<?php echo $row['no_inventory'];?>" data-target="#editmyModal<?php echo $row['no_inventory']; ?>" data-toggle="modal" title="Edit Data">
                                                        <span class="fa fa-edit"></span></a>
                                                    | <a href="config_config_cs/del-pengajuan-con.php?id=<?php echo $row['no_inventory']; ?>" data-toggle="tooltip" title="Hapus Data" onclick='/return konfirmasi("Menghapus data <?php echo $row[0];?>")'>
                                                        <span class='fa fa-trash'></span></a>
                                                </td>
                                            </tr>
                                            </tbody>

                            <div class="modal fade" id="editmyModal<?php echo $row['no_inventory']; ?>" tabindex="-1" role="modal" aria-labelledby="exampleModalLabel" aria-hidden="true ">
                                <div class="modal-dialog" role="document ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Pengajuan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true ">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" action="config_config_cs/edit-pengajuan-con.php" method="post">
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
                                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Harga Barang</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="harga_barang_edit" class="form-control" id="lname" placeholder="Nama Barang" value="<?php echo $row['harga']; ?>"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Lokasi Pembelian</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="lokasi_beli_edit" class="form-control" id="lname" placeholder="Nama Barang" value="<?php echo $row['lokasi_beli']; ?>"/>
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

                                            <?php
                                                }

                                            ?>
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

            <script type="text/javascript">
                $(document).ready(function(){
                    $("select#type").change(function(){
                        var select = $(this).children("option:selected").val();
                        if (select == "Elektronik"){
                            var count = document.getElementById('kodeElektronik').value;
                        } else if (select == "Non Elektronik"){
                            var count = document.getElementById('kodeNonElektronik').value;
                        }
                        document.getElementById('nomor').value = count;
                    });
                });
            </script>

    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
<?php include ('config_config_cs/fungsi_toast_notifikasi_tambah_barang.php'); ?>
<?php include ('config_config_cs/fungsi_toast_notifikasi_pengajuan.php'); ?>
