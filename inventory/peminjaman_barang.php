
    <meta charset="utf-8">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="assets/libs/toastr/build/toastr.min.css" rel="stylesheet">

    <div class="container-fluid">
        <div class="row">
            <div class="alert alert-success alert-dismissible col-md-12" role="alert">
                <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <strong><i class="fa fa-warning"></i></strong> <marquee><p style="font-family: Impact; font-size: 13pt">Barang yang dipinjam menjadi tanggung jawab peminjam!</p></marquee>
            </div>
        </div>

                    <!-- Column -->
                <?php 
                    if($_SESSION['leveluser'] == 'USER') { ?>
                        <div id="accordian-4">
                            <div class="card m-t-30">
                                <a class="card-header link border-top" data-toggle="collapse" data-parent="#accordian-4" href="#Toggle-2" aria-expanded="false" aria-controls="Toggle-2">
                                    <i class="far fa-plus-square" aria-hidden="true"></i>
                                    <span>Pinjam Barang</span>
                                </a>
                                <div id="Toggle-2" class="multi-collapse collapse" style="">
                                    <div class="card-body widget-content">
                                        <form class="form-horizontal" action="config_config_cs/peminjaman-barang-con.php" method="post">
                                            <input type="hidden" value="<?php echo $nip; ?>" name="pj">
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <label for="fname" class="col-sm-3 text-left control-label col-form-label">No. Inventory</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="no_inven" class="form-control" id="nomor" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="lname" class="col-sm-3 text-left control-label col-form-label">Nama Barang</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="nama_barang" class="form-control" id="nama" placeholder="Nama Barang" >                                                    
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
                <?php
                    }
                ?>
                                        

                <?php
                    if($_SESSION['leveluser'] == 'USER') {?>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Data Peminjaman Barang</h5>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>No Inventory</th>
                                                    <th>Nama Barang</th>
                                                    <th>Status</th>
                                                    <th>Tanggal Pinjam</th>
                                                    <th>Tanggal Kembali</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>  
                                            <tbody>
                                                <?php
                                            
                                                $view = mysqli_query($connect, "SELECT * FROM tbl_peminjaman JOIN tbl_pegawai ON tbl_peminjaman.pj2 = tbl_pegawai.nik JOIN tbl_inventory ON tbl_inventory.no_inventory = tbl_peminjaman.no_inventory2 WHERE tbl_peminjaman.pj2='$nip' AND tbl_peminjaman.stat2!='0'");
                                                        
                                                while ($row = mysqli_fetch_array($view)) {
                                                    
                                                    
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['no_inventory'];?></td>
                                                    <td><?php echo $row['nama_barang'];?></td>
                                                    <td>
                                                        <?php 
                                                            if($row['stat2'] == '1' || $row['stat2'] =='2') {?>
                                                                <span class="badge badge-pill badge-warning text-white">PENDING on <?php echo $row['user'];?></span>
                                                        <?php
                                                            } elseif($row['stat2'] =='4' || $row['stat2'] =='5') {?>
                                                                <span class="badge badge-pill badge-info text-white">PROCCESS(pengembalian) on <?php echo $row['user']; ?></span>
                                                        <?php
                                                            } elseif($row['stat2'] == '3') {?>
                                                                <span class="badge badge-pill badge-success text-white">DIPINJAM</span>
                                                        <?php
                                                            } elseif($row['stat2'] == '6') {?>
                                                                <span class="badge badge-pill badge-danger text-white">REJECTED</span>
                                                        <?php
                                                            }
                                                        ?>
                                                    </td>
                                                    <td><?php echo $row['waktupinjam'];?></td>
                                                    <td><?php echo $row['waktukembali'];?></td>
                                                    <td>
                                                        <?php
                                                            if($row['stat2'] == '3') { ?>
                                                                <a href="config_config_cs/kembali-peminjaman-con.php?id=<?php echo $row['id']; ?>&no=<?php echo $row['no_inventory']; ?>" title="Selesai">
                                                                    <span class="fa fa-check"></span></a>
                                                        <?php
                                                            } elseif($row['stat2'] == '1' || $row['stat2'] == '2') {?>
                                                                <a href="config_config_cs/cancel-peminjaman-con.php?id=<?php echo $row['id']; ?>&no=<?php echo $row['no_inventory']; ?>" title="Cancel">
                                                                    <span class="fa fa-times"></span></a>
                                                        <?php
                                                            } 
                                                        ?>


                                                    </td>
                                                </tr>

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

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title m-b-0">Histori Peminjaman Barang</h5>
                                </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-stripped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No Inventory</th>
                                                <th>Nama Barang</th>
                                                <th>Tanggal Pinjam</th>
                                                <th>Tanggal Kembali</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        
                                            $view = mysqli_query($connect, "SELECT * FROM tbl_peminjaman WHERE pj2='$nip' AND stat2='0' ORDER BY id DESC");
                                                    
                                            while ($row = mysqli_fetch_array($view)) { ?>
                                                
                                            <tr>
                                                <td><?php echo $row['no_inventory2']; ?></td>
                                                <td><?php echo $row['nama_barang2']; ?></td>
                                                <td><?php echo $row['waktupinjam']; ?></td>
                                                <td><?php echo $row['waktukembali']; ?></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                    } elseif($_SESSION['leveluser'] == 'ADMIN TEKNIS') {?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Data Peminjaman Barang</h5>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>No Inventory</th>
                                                        <th>Nama Barang</th>
                                                        <th>Dipinjam Oleh</th>
                                                        <th>Status</th>
                                                        <th>Tanggal Pinjam</th>
                                                        <th>Tanggal Kembali</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>  
                                                <tbody>
                                                    <?php
                                                
                                                    $view = mysqli_query($connect, "SELECT * FROM tbl_peminjaman JOIN tbl_pegawai ON tbl_peminjaman.pj2 = tbl_pegawai.nik JOIN tbl_inventory ON tbl_inventory.no_inventory = tbl_peminjaman.no_inventory2 WHERE tbl_peminjaman.stat2!='0' AND tbl_peminjaman.stat2!='6'");
                                                            
                                                    while ($row = mysqli_fetch_array($view)) {
                                                        
                                                        
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row['no_inventory'];?></td>
                                                        <td><?php echo $row['nama_barang'];?></td>
                                                        <td><?php echo $row['nama']; ?></td>
                                                        <td>
                                                            <?php 
                                                                if($row['stat2'] == '1' || $row['stat2'] =='2') {?>
                                                                    <span class="badge badge-pill badge-warning text-white">PENDING on <?php echo $row['user'];?></span>
                                                            <?php
                                                                } elseif($row['stat2'] =='4' || $row['stat2'] =='5') {?>
                                                                    <span class="badge badge-pill badge-info text-white">PROCCESS(pengembalian) on <?php echo $row['user']; ?></span>
                                                            <?php
                                                                }elseif($row['stat2'] == '3') {?>
                                                                    <span class="badge badge-pill badge-success text-white">DIPINJAM</span>
                                                            <?php
                                                                }
                                                            ?>
                                                        </td>
                                                        <td><?php echo $row['waktupinjam']; ?></td>
                                                        <td><?php echo $row['waktukembali']; ?></td>
                                                        <td>
                                                            <?php 
                                                                if($row['stat2'] == '1') {?>
                                                                    <a href="config_config_cs/approve-peminjaman-con.php?id=<?php echo $row['id']; ?>&no=<?php echo $row['no_inventory']; ?>" title="Approve">
                                                                        <span class="fa fa-check"></span></a> 
                                                                    | <a href="config_config_cs/reject-peminjaman-con.php?id=<?php echo $row['id']; ?>&no=<?php echo $row['no_inventory']; ?>" title="Reject"'>
                                                                        <span class='fa fa-times'></span></a>
                                                            <?php
                                                                } if($row['stat2'] == '4') {?>
                                                                    <a href="config_config_cs/approve-kembali-con.php?id=<?php echo $row['id']; ?>&no=<?php echo $row['no_inventory']; ?>" title="Approve">
                                                                        <span class="fa fa-check"></span></a> 
                                                                    | <a href="config_config_cs/reject-peminjaman-con.php?id=<?php echo $row['id']; ?>&no=<?php echo $row['no_inventory']; ?>" title="Reject"'>
                                                                        <span class='fa fa-times'></span></a>
                                                            <?php
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>

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

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title m-b-0">Histori Peminjaman Barang</h5>
                                </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-stripped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No Inventory</th>
                                                <th>Nama Barang</th>
                                                <th>Dipinjam Oleh</th>
                                                <th>Tanggal Pinjam</th>
                                                <th>Tanggal Kembali</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        
                                            $view = mysqli_query($connect, "SELECT * FROM tbl_peminjaman JOIN tbl_pegawai ON tbl_peminjaman.pj2 = tbl_pegawai.nik WHERE stat2='0' ORDER BY id DESC");
                                                    
                                            while ($row = mysqli_fetch_array($view)) { ?>
                                                
                                            <tr>
                                                <td><?php echo $row['no_inventory2']; ?></td>
                                                <td><?php echo $row['nama_barang2']; ?></td>
                                                <td><?php echo $row['nama']; ?></td>
                                                <td><?php echo $row['waktupinjam']; ?></td>
                                                <td><?php echo $row['waktukembali']; ?></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                    } elseif($_SESSION['leveluser'] == 'ADMIN GUDANG') {?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Data Peminjaman Barang</h5>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>No Inventory</th>
                                                        <th>Nama Barang</th>
                                                        <th>Dipinjam Oleh</th>
                                                        <th>Status</th>
                                                        <th>Tanggal Pinjam</th>
                                                        <th>Tanggal Kembali</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>  
                                                <tbody>
                                                    <?php
                                                
                                                    $view = mysqli_query($connect, "SELECT * FROM tbl_peminjaman JOIN tbl_pegawai ON tbl_peminjaman.pj2 = tbl_pegawai.nik JOIN tbl_inventory ON tbl_inventory.no_inventory = tbl_peminjaman.no_inventory2 WHERE tbl_peminjaman.stat2!='0' AND tbl_peminjaman.stat2!='6'");
                                                            
                                                    while ($row = mysqli_fetch_array($view)) {
                                                        
                                                        
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row['no_inventory'];?></td>
                                                        <td><?php echo $row['nama_barang'];?></td>
                                                        <td><?php echo $row['nama']; ?></td>
                                                        <td>
                                                            <?php 
                                                                if($row['stat2'] == '1' || $row['stat2'] =='2') {?>
                                                                    <span class="badge badge-pill badge-warning text-white">PENDING on <?php echo $row['user'];?></span>
                                                            <?php
                                                                } elseif($row['stat2'] =='4' || $row['stat2'] =='5') {?>
                                                                    <span class="badge badge-pill badge-info text-white">PROCCESS(pengembalian) on <?php echo $row['user']; ?></span>
                                                            <?php
                                                                }elseif($row['stat2'] == '3') {?>
                                                                    <span class="badge badge-pill badge-success text-white">DIPINJAM</span>
                                                            <?php
                                                                }
                                                            ?>
                                                        </td>
                                                        <td><?php echo $row['waktupinjam']; ?></td>
                                                        <td><?php echo $row['waktukembali']; ?></td>
                                                        <td>
                                                            <?php 
                                                                if($row['stat2'] == '2') {?>
                                                                    <a href="config_config_cs/approve2-peminjaman-con.php?id=<?php echo $row['id']; ?>&no=<?php echo $row['no_inventory']; ?>" title="Approve">
                                                                        <span class="fa fa-check"></span></a> 
                                                                    | <a href="config_config_cs/reject-peminjaman-con.php?id=<?php echo $row['id']; ?>&no=<?php echo $row['no_inventory']; ?>" title="Reject"'>
                                                                        <span class='fa fa-times'></span></a>
                                                            <?php
                                                                } if($row['stat2'] == '5') {?>
                                                                    <a href="config_config_cs/approve2-kembali-con.php?id=<?php echo $row['id']; ?>&no=<?php echo $row['no_inventory']; ?>" title="Approve">
                                                                        <span class="fa fa-check"></span></a>
                                                            <?php
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>

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

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title m-b-0">Histori Peminjaman Barang</h5>
                                </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-stripped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No Inventory</th>
                                                <th>Nama Barang</th>
                                                <th>Dipinjam Oleh</th>
                                                <th>Tanggal Pinjam</th>
                                                <th>Tanggal Kembali</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        
                                            $view = mysqli_query($connect, "SELECT * FROM tbl_peminjaman JOIN tbl_pegawai ON tbl_peminjaman.pj2 = tbl_pegawai.nik WHERE stat2='0' ORDER BY id DESC");
                                                    
                                            while ($row = mysqli_fetch_array($view)) { ?>
                                                
                                            <tr>
                                                <td><?php echo $row['no_inventory2']; ?></td>
                                                <td><?php echo $row['nama_barang2']; ?></td>
                                                <td><?php echo $row['nama']; ?></td>
                                                <td><?php echo $row['waktupinjam']; ?></td>
                                                <td><?php echo $row['waktukembali']; ?></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                    } elseif($_SESSION['leveluser'] == 'ADMIN FINANCE') {?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Data Peminjaman Barang</h5>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>No Inventory</th>
                                                        <th>Nama Barang</th>
                                                        <th>Dipinjam Oleh</th>
                                                        <th>Status</th>
                                                        <th>Tanggal Pinjam</th>
                                                        <th>Tanggal Kembali</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>  
                                                <tbody>
                                                    <?php
                                                
                                                    $view = mysqli_query($connect, "SELECT * FROM tbl_peminjaman JOIN tbl_pegawai ON tbl_peminjaman.pj2 = tbl_pegawai.nik JOIN tbl_inventory ON tbl_inventory.no_inventory = tbl_peminjaman.no_inventory2 WHERE tbl_peminjaman.stat2!='0' AND tbl_peminjaman.stat2!='6'");                                                            
                                                    while ($row = mysqli_fetch_array($view)) {
                                                        
                                                        
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row['no_inventory'];?></td>
                                                        <td><?php echo $row['nama_barang'];?></td>
                                                        <td><?php echo $row['nama']; ?></td>
                                                        <td>
                                                            <?php 
                                                                if($row['stat2'] == '1' || $row['stat2'] =='2') {?>
                                                                    <span class="badge badge-pill badge-warning text-white">PENDING on <?php echo $row['user'];?></span>
                                                            <?php
                                                                } elseif($row['stat2'] =='4' || $row['stat2'] =='5') {?>
                                                                    <span class="badge badge-pill badge-info text-white">PROCCESS(pengembalian) on <?php echo $row['user']; ?></span>
                                                            <?php
                                                                }elseif($row['stat2'] == '3') {?>
                                                                    <span class="badge badge-pill badge-success text-white">DIPINJAM</span>
                                                            <?php
                                                                }
                                                            ?>
                                                        </td>
                                                        <td><?php echo $row['waktupinjam']; ?></td>
                                                        <td><?php echo $row['waktukembali']; ?></td>
                                                        <td></td>
                                                    </tr>

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

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title m-b-0">Histori Peminjaman Barang</h5>
                                </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-hover table-bordered table-stripped">
                                        <thead>
                                            <tr>
                                                <th>No Inventory</th>
                                                <th>Nama Barang</th>
                                                <th>Dipinjam Oleh</th>
                                                <th>Tanggal Pinjam</th>
                                                <th>Tanggal Kembali</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        
                                            $view = mysqli_query($connect, "SELECT * FROM tbl_peminjaman JOIN tbl_pegawai ON tbl_peminjaman.pj2 = tbl_pegawai.nik WHERE stat2='0' ORDER BY id DESC");
                                                    
                                            while ($row = mysqli_fetch_array($view)) { ?>
                                                
                                            <tr>
                                                <td><?php echo $row['no_inventory2']; ?></td>
                                                <td><?php echo $row['nama_barang2']; ?></td>
                                                <td><?php echo $row['nama']; ?></td>
                                                <td><?php echo $row['waktupinjam']; ?></td>
                                                <td><?php echo $row['waktukembali']; ?></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                <?php
                    } elseif($_SESSION['leveluser'] == 'ADMIN') {?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Data Peminjaman Barang</h5>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>No Inventory</th>
                                                        <th>Nama Barang</th>
                                                        <th>Dipinjam Oleh</th>
                                                        <th>Status</th>
                                                        <th>Tanggal Pinjam</th>
                                                        <th>Tanggal Kembali</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>  
                                                <tbody>
                                                    <?php
                                                
                                                    $view = mysqli_query($connect, "SELECT * FROM tbl_peminjaman JOIN tbl_pegawai ON tbl_peminjaman.pj2 = tbl_pegawai.nik JOIN tbl_inventory ON tbl_inventory.no_inventory = tbl_peminjaman.no_inventory2 WHERE tbl_peminjaman.stat2!='0' AND tbl_peminjaman.stat2!='6'");
                                                            
                                                    while ($row = mysqli_fetch_array($view)) {
                                                        
                                                        
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row['no_inventory'];?></td>
                                                        <td><?php echo $row['nama_barang'];?></td>
                                                        <td><?php echo $row['nama']; ?></td>
                                                        <td>
                                                            <?php 
                                                                if($row['stat2'] == '1' || $row['stat2'] =='2') {?>
                                                                    <span class="badge badge-pill badge-warning text-white">PENDING on <?php echo $row['user'];?></span>
                                                            <?php
                                                                } elseif($row['stat2'] =='4' || $row['stat2'] =='5') {?>
                                                                    <span class="badge badge-pill badge-info text-white">PROCCESS(pengembalian) on <?php echo $row['user']; ?></span>
                                                            <?php
                                                                }elseif($row['stat2'] == '3') {?>
                                                                    <span class="badge badge-pill badge-success text-white">DIPINJAM</span>
                                                            <?php
                                                                }
                                                            ?>
                                                        </td>
                                                        <td><?php echo $row['waktupinjam']; ?></td>
                                                        <td><?php echo $row['waktukembali']; ?></td>
                                                        <td></td>
                                                    </tr>

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

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title m-b-0">Histori Peminjaman Barang</h5>
                                </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-stripped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No Inventory</th>
                                                <th>Nama Barang</th>
                                                <th>Dipinjam Oleh</th>
                                                <th>Tanggal Pinjam</th>
                                                <th>Tanggal Kembali</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        
                                            $view = mysqli_query($connect, "SELECT * FROM tbl_peminjaman JOIN tbl_pegawai ON tbl_peminjaman.pj2 = tbl_pegawai.nik WHERE stat2='0' ORDER BY id DESC");
                                                    
                                            while ($row = mysqli_fetch_array($view)) { ?>
                                                
                                            <tr>
                                                <td><?php echo $row['no_inventory2']; ?></td>
                                                <td><?php echo $row['nama_barang2']; ?></td>
                                                <td><?php echo $row['nama']; ?></td>
                                                <td><?php echo $row['waktupinjam']; ?></td>
                                                <td><?php echo $row['waktukembali']; ?></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                    } elseif($_SESSION['leveluser'] == 'SUPER ADMIN') {?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Data Peminjaman Barang</h5>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>No Inventory</th>
                                                        <th>Nama Barang</th>
                                                        <th>Dipinjam Oleh</th>
                                                        <th>Status</th>
                                                        <th>Tanggal Pinjam</th>
                                                        <th>Tanggal Kembali</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>  
                                                <tbody>
                                                    <?php
                                                
                                                    $view = mysqli_query($connect, "SELECT * FROM tbl_peminjaman JOIN tbl_pegawai ON tbl_peminjaman.pj2 = tbl_pegawai.nik JOIN tbl_inventory ON tbl_inventory.no_inventory = tbl_peminjaman.no_inventory2 WHERE tbl_peminjaman.stat2!='0' AND tbl_peminjaman.stat2!='6'");
                                                            
                                                    while ($row = mysqli_fetch_array($view)) {
                                                        
                                                        
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row['no_inventory'];?></td>
                                                        <td><?php echo $row['nama_barang'];?></td>
                                                        <td><?php echo $row['nama']; ?></td>
                                                        <td>
                                                            <?php 
                                                                if($row['stat2'] == '1' || $row['stat2'] =='2') {?>
                                                                    <span class="badge badge-pill badge-warning text-white">PENDING on <?php echo $row['user'];?></span>
                                                            <?php
                                                                } elseif($row['stat2'] =='4' || $row['stat2'] =='5') {?>
                                                                    <span class="badge badge-pill badge-info text-white">PROCCESS(pengembalian) on <?php echo $row['user']; ?></span>
                                                            <?php
                                                                }elseif($row['stat2'] == '3') {?>
                                                                    <span class="badge badge-pill badge-success text-white">DIPINJAM</span>
                                                            <?php
                                                                }
                                                            ?>
                                                        </td>
                                                        <td><?php echo $row['waktupinjam']; ?></td>
                                                        <td><?php echo $row['waktukembali']; ?></td>
                                                        <td></td>
                                                    </tr>

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

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title m-b-0">Histori Peminjaman Barang</h5>
                                </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-stripped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No Inventory</th>
                                                <th>Nama Barang</th>
                                                <th>Dipinjam Oleh</th>
                                                <th>Tanggal Pinjam</th>
                                                <th>Tanggal Kembali</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        
                                            $view = mysqli_query($connect, "SELECT * FROM tbl_peminjaman JOIN tbl_pegawai ON tbl_peminjaman.pj2 = tbl_pegawai.nik WHERE stat2='0' ORDER BY id DESC");
                                                    
                                            while ($row = mysqli_fetch_array($view)) { ?>
                                                
                                            <tr>
                                                <td><?php echo $row['no_inventory2']; ?></td>
                                                <td><?php echo $row['nama_barang2']; ?></td>
                                                <td><?php echo $row['nama']; ?></td>
                                                <td><?php echo $row['waktupinjam']; ?></td>
                                                <td><?php echo $row['waktukembali']; ?></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                    }
                ?>
        </div>

                                        






    <!-- All Jquery -->
    <!-- ============================================================== -->
    
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- load jquery ui css-->
    <link href="assets/libs/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />
        <!-- load jquery library -->
    <script src="assets/libs/jquery-ui/jquery-ui.js"></script>
        <!-- load jquery ui js file -->
    <script src="assets/libs/jquery-ui/jquery-ui.min.js"></script>
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
        $('#zero_config').DataTable();
    </script>
    <script type="text/javascript">
			$(document).ready(function(){
				$("#nama").autocomplete({
					minLength:1,
					source: 'config_config_cs/autocomplete-peminjaman.php',
					select:function(event, ui){
                        $('#nomor').val(ui.item.nomor);
						$('#nama').val(ui.item.nama);
					}
				});
			});
		</script>

    <?php include ('config_config_cs/fungsi_toast_notifikasi_peminjaman.php'); ?>