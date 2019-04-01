<link href="assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
<link href="assets/libs/toastr/build/toastr.min.css" rel="stylesheet">

<?php 
    if ($level == 'SUPER ADMIN') {
        $level1 = 'SUPER';
    }
?>

<div class="container-fluid">
    <div class="row">
                    <!-- Column -->                    
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="&mod=add" data-toggle="modal" data-target="#Modal1">
                            <div class="card card-hover">
                                <div class="box bg-warning text-center">
                                        <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                                        <h6 class="text-white">Tambah</h6>
                                </div>
                            </div>
                        </a>
                        <!--modal-->
                            <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
                                <div class="modal-dialog" role="document ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true ">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" action="config_config_cs/list-user-con.php" method="post">
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">NIP</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="nip" id="nip" class="form-control" id="fname" placeholder="NIP" required=""/>
                                                            <span id="pesan"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Password</label>
                                                        <div class="col-sm-9">
                                                            <input type="password" name="password_user" class="form-control" id="lname" placeholder="Password User" value="" required="" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Level User</label>
                                                        <div class="col-sm-9">
                                                            <select name="level" class="form-control">
                                                            <?php
                                                                if ($level == 'SUPER ADMIN') { ?>
                                                                    <option>Pilih Level</option>
                                                                      <?php
                                                                    $q = mysqli_query($connect, "SELECT * FROM tbl_level_user_super"); 

                                                                      while ($a = mysqli_fetch_array($q)){
                                                                        if ($a[0] == $row['level_user']) {
                                                                          echo "<option value='$a[0]' selected>$a[0]</option>";
                                                                        } else {
                                                                          echo "<option value='$a[0]'>$a[0]</option>";
                                                                        }
                                                                      }
                                                                      ?>
                                                            <?php    
                                                                } elseif ($level == 'ADMIN') { ?>
                                                                    <option>Pilih Level</option>
                                                                      <?php
                                                                    $q = mysqli_query($connect, "SELECT * FROM tbl_level_user_admin"); 

                                                                      while ($a = mysqli_fetch_array($q)){
                                                                        if ($a[0] == $row['level_user']) {
                                                                          echo "<option value='$a[0]' selected>$a[0]</option>";
                                                                        } else {
                                                                          echo "<option value='$a[0]'>$a[0]</option>";
                                                                        }
                                                                      }
                                                                      ?>
                                                            <?php 
                                                                }
                                                            ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="border-top">
                                                        <div class="card-body">
                                                            <input type="submit" name="simpan" class="btn btn-primary" value="SIMPAN">
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
    <div class="row el-element-overlay">
        <?php
                                        
            $view = mysqli_query($connect, "SELECT * FROM tbl_pegawai, tbl_user_lr, tbl_file WHERE tbl_user_lr.nip = tbl_pegawai.nik AND tbl_pegawai.id_file = tbl_file.id_file");
                                                    
            while ($row = mysqli_fetch_array($view)) {                                        
        ?>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <?php
                        if ($row['foto'] == NULL) { ?>
                            <div class="el-card-avatar el-overlay-1"> <img src="assets/images/users/1.jpg" alt="user" />
                                <div class="el-overlay">
                                    <ul class="list-style-none el-info">
                                        <li class="el-item"><a title="Lihat Foto" class="btn default btn-outline image-popup-vertical-fit el-link" href="assets/images/users/1.jpg"><i class="mdi mdi-magnify-plus"></i></a></li>
                                    <?php
                                        if ($level=='SUPER ADMIN') { ?>
                                            <li class="el-item"><a class="btn default btn-outline el-link" data-toggle="modal" title="Edit Data" data-target="#myModal<?php echo $row['nip'];?>" href="#<?php echo $row['nip'];?>"><i class="mdi mdi-link"></i></a></li>
                                        <?php if ($row['kode_approve'] == 2) { ?>
                                            <li class="el-item"><a class="btn default btn-outline el-link" title="Approve User" href="config_config_cs/approve-user.php?id=<?php echo $row['nip']; ?>" data-toggle="tooltip" onclick='/return konfirmasi("Approve User <?php echo $row['nip'];?>")'><i class="mdi mdi-check"></i></a></li>
                                        <?php } else if ($row['kode_approve'] == 1){ ?>
                                            <li class="el-item"><a class="btn default btn-outline el-link" data-toggle="tooltip" title="Reject User" href="config_config_cs/reject-user.php?id=<?php echo $row['nip']; ?>" onclick='/return konfirmasi("Reject User User <?php echo $row['nip'];?>")'><i class="mdi mdi-close"></i></a></li>
                                        <?php } else { ?>
                                            <li class="el-item"><a class="btn default btn-outline el-link" data-toggle="modal" title="Edit Data" data-target="#myModal<?php echo $row['nip'];?>" href="#<?php echo $row['nip'];?>"><i class="mdi mdi-link"></i></a></li>
                                                <li class="el-item"><a class="btn default btn-outline el-link" title="Approve User" href="config_config_cs/approve-user.php?id=<?php echo $row['nip']; ?>" data-toggle="tooltip" onclick='/return konfirmasi("Approve User <?php echo $row['nip'];?>")'><i class="mdi mdi-check"></i></a></li>
                                                <li class="el-item"><a class="btn default btn-outline el-link" data-toggle="tooltip" href="config_config_cs/reject-user.php?id=<?php echo $row['nip']; ?>" onclick='/return konfirmasi("Reject User User <?php echo $row['nip'];?>")'><i class="mdi mdi-close"></i></a></li>
                                        <?php } ?>
                                    <?php        
                                        } elseif ($level=='ADMIN') { ?>
                                            <?php if ($row['level_user'] == 'SUPER ADMIN') { ?>
                                                
                                            <?php    
                                            } else { ?>
                                                <li class="el-item"><a class="btn default btn-outline el-link" data-toggle="modal" title="Edit Data" data-target="#myModal<?php echo $row['nip'];?>" href="#<?php echo $row['nip'];?>"><i class="mdi mdi-link"></i></a></li>
                                                <?php if ($row['kode_approve'] == 2) { ?>
                                                    <li class="el-item"><a class="btn default btn-outline el-link" title="Approve User" href="config_config_cs/approve-user.php?id=<?php echo $row['nip']; ?>" data-toggle="tooltip" onclick='/return konfirmasi("Approve User <?php echo $row['nip'];?>")'><i class="mdi mdi-check"></i></a></li>
                                                <?php } else if ($row['kode_approve'] == 1){ ?>
                                                    <li class="el-item"><a class="btn default btn-outline el-link" data-toggle="tooltip" title="Reject User" href="config_config_cs/reject-user.php?id=<?php echo $row['nip']; ?>" onclick='/return konfirmasi("Reject User User <?php echo $row['nip'];?>")'><i class="mdi mdi-close"></i></a></li>
                                                <?php } else { ?>
                                                    <li class="el-item"><a class="btn default btn-outline el-link" data-toggle="modal" title="Edit Data" data-target="#myModal<?php echo $row['nip'];?>" href="#<?php echo $row['nip'];?>"><i class="mdi mdi-link"></i></a></li>
                                                        <li class="el-item"><a class="btn default btn-outline el-link" title="Approve User" href="config_config_cs/approve-user.php?id=<?php echo $row['nip']; ?>" data-toggle="tooltip" onclick='/return konfirmasi("Approve User <?php echo $row['nip'];?>")'><i class="mdi mdi-check"></i></a></li>
                                                        <li class="el-item"><a class="btn default btn-outline el-link" data-toggle="tooltip" href="config_config_cs/reject-user.php?id=<?php echo $row['nip']; ?>" onclick='/return konfirmasi("Reject User User <?php echo $row['nip'];?>")'><i class="mdi mdi-close"></i></a></li>
                                                <?php } ?>
                                            <?php    
                                            }
                                            ?>
                                    <?php
                                        }
                                    ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="el-card-content">
                                <h4 class="m-b-0"><?php echo $row['nama'] ?></h4> <span class="text-muted"><?php echo $row['level_user'] ?> - <?php if ($row['kode_approve'] == 0) {
                                    echo "PENDING";
                                } elseif ($row['kode_approve'] == 1) {
                                    echo "APPROVED";
                                } elseif ($row['kode_approve'] == 2) {
                                    echo "REJECTED";
                                }
                                ?></span>
                            </div>
                            <div class="modal fade" id="myModal<?php echo $row['nip'];?>" tabindex="-1" role="modal" aria-labelledby="exampleModalLabel" aria-hidden="true ">
                                <div class="modal-dialog" role="document ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true ">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" action="config_config_cs/edit-list-user-con.php?level=<?php echo $level1; ?>" method="post">
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">NIP</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="nip_edit" id="nip" class="form-control" id="fname" placeholder="Kode Bank" value="<?php echo $row['nip']; ?>" required=""readonly/>
                                                            <span id="pesan"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Nama User</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="nama_user_edit" class="form-control" id="lname" placeholder="Nama User" value="<?php echo $row['nama']; ?>" readonly/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Password</label>
                                                        <div class="col-sm-9">
                                                            <input type="password" name="password_user_edit" class="form-control" id="lname" placeholder="Password User" value="" required="" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Level User</label>
                                                        <div class="col-sm-9">
                                                            <select name="level_edit" class="form-control">
                                                                <?php
                                                                if ($level == 'SUPER ADMIN') { ?>
                                                                    <option>Pilih Level</option>
                                                                      <?php
                                                                    $q = mysqli_query($connect, "SELECT * FROM tbl_level_user"); 

                                                                      while ($a = mysqli_fetch_array($q)){
                                                                        if ($a[0] == $row['level_user']) {
                                                                          echo "<option value='$a[0]' selected>$a[0]</option>";
                                                                        } else {
                                                                          echo "<option value='$a[0]'>$a[0]</option>";
                                                                        }
                                                                      }
                                                                      ?>
                                                            <?php    
                                                                } elseif ($level == 'ADMIN') { ?>
                                                                    <option>Pilih Level</option>
                                                                      <?php
                                                                    $q = mysqli_query($connect, "SELECT * FROM tbl_level_user_super"); 

                                                                      while ($a = mysqli_fetch_array($q)){
                                                                        if ($a[0] == $row['level_user']) {
                                                                          echo "<option value='$a[0]' selected>$a[0]</option>";
                                                                        } else {
                                                                          echo "<option value='$a[0]'>$a[0]</option>";
                                                                        }
                                                                      }
                                                                      ?>
                                                            <?php 
                                                                }
                                                            ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="border-top">
                                                        <div class="card-body">
                                                            <input type="submit" name="simpan_edit" class="btn btn-primary" value="SIMPAN">
                                                            <a href="config_config_cs/del-user-con.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" style="float: right;">Delete User</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        } else { ?>
                            <div class="el-card-avatar el-overlay-1"> <img src="<?php echo $row['foto'] ?>" alt="user" />
                                <div class="el-overlay">
                                    <ul class="list-style-none el-info">
                                        <li class="el-item"><a title="Lihat Foto" class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo $row['foto'] ?>"><i class="mdi mdi-magnify-plus"></i></a></li>
                                        <?php
                                        if ($level=='SUPER ADMIN') { ?>
                                            <li class="el-item"><a class="btn default btn-outline el-link" data-toggle="modal" title="Edit Data" data-target="#myModalFoto<?php echo $row['nip'];?>" href="#<?php echo $row['nip'];?>"><i class="mdi mdi-link"></i></a></li>
                                            <?php if ($row['kode_approve'] == 2) { ?>
                                                <li class="el-item"><a class="btn default btn-outline el-link" title="Approve User" href="config_config_cs/approve-user.php?id=<?php echo $row['nip']; ?>" data-toggle="tooltip" onclick='/return konfirmasi("Approve User <?php echo $row['nip'];?>")'><i class="mdi mdi-check"></i></a></li>
                                            <?php } else if ($row['kode_approve'] == 1){ ?>
                                                <li class="el-item"><a class="btn default btn-outline el-link" data-toggle="tooltip" title="Reject User" href="config_config_cs/reject-user.php?id=<?php echo $row['nip']; ?>" onclick='/return konfirmasi("Reject User User <?php echo $row['nip'];?>")'><i class="mdi mdi-close"></i></a></li>
                                            <?php } else { ?>
                                                <li class="el-item"><a class="btn default btn-outline el-link" data-toggle="modal" title="Edit Data" data-target="#myModal<?php echo $row['nip'];?>" href="#<?php echo $row['nip'];?>"><i class="mdi mdi-link"></i></a></li>
                                                <li class="el-item"><a class="btn default btn-outline el-link" title="Approve User" href="config_config_cs/approve-user.php?id=<?php echo $row['nip']; ?>" data-toggle="tooltip" onclick='/return konfirmasi("Approve User <?php echo $row['nip'];?>")'><i class="mdi mdi-check"></i></a></li>
                                                <li class="el-item"><a class="btn default btn-outline el-link" data-toggle="tooltip" href="config_config_cs/reject-user.php?id=<?php echo $row['nip']; ?>" onclick='/return konfirmasi("Reject User User <?php echo $row['nip'];?>")'><i class="mdi mdi-close"></i></a></li>
                                                <?php } ?>
                                    <?php        
                                        } elseif ($level=='ADMIN') { ?>
                                            <?php if ($row['level_user'] == 'SUPER ADMIN') { ?>
                                                
                                            <?php    
                                            } else { ?>
                                                <li class="el-item"><a class="btn default btn-outline el-link" data-toggle="modal" title="Edit Data" data-target="#myModalFoto<?php echo $row['nip'];?>" href="#<?php echo $row['nip'];?>"><i class="mdi mdi-link"></i></a></li>
                                                <li class="el-item"><a class="btn default btn-outline el-link" title="Approve User" href="config_config_cs/approve-user.php?id=<?php echo $row['nip']; ?>" data-toggle="tooltip" onclick='/return konfirmasi("Approve User <?php echo $row['nip'];?>")'><i class="mdi mdi-check"></i></a></li>
                                                <li class="el-item"><a class="btn default btn-outline el-link" data-toggle="tooltip" href="config_config_cs/reject-user.php?id=<?php echo $row['nip']; ?>" onclick='/return konfirmasi("Reject User User <?php echo $row['nip'];?>")'><i class="mdi mdi-close"></i></a></li>
                                            <?php    
                                            }
                                            ?>
                                    <?php
                                        }
                                    ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="el-card-content">
                                <h4 class="m-b-0"><?php echo $row['nama'] ?></h4> <span class="text-muted"><?php echo $row['level_user'] ?> - <?php if ($row['kode_approve'] == 0) {
                                    echo "PENDING";
                                } elseif ($row['kode_approve'] == 1) {
                                    echo "APPROVED";
                                } elseif ($row['kode_approve'] == 2) {
                                    echo "REJECTED";
                                }
                                ?></span>
                            </div>
                            <div class="modal fade" id="myModalFoto<?php echo $row['nip'];?>" tabindex="-1" role="modal" aria-labelledby="exampleModalLabel" aria-hidden="true ">
                                <div class="modal-dialog" role="document ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true ">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" action="config_config_cs/edit-list-user-con.php?level=<?php echo $level1; ?>" method="post">
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">NIP</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="nip_edit" id="nip" class="form-control" id="fname" placeholder="Kode Bank" value="<?php echo $row['nip']; ?>" required=""readonly/>
                                                            <span id="pesan"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Nama User</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="nama_user_edit" class="form-control" id="lname" placeholder="Nama User" value="<?php echo $row['nama']; ?>" readonly/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Password</label>
                                                        <div class="col-sm-9">
                                                            <input type="password" name="password_user_edit" class="form-control" id="lname" placeholder="Nama User" value="<?php echo $row['nama']; ?>"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Level User</label>
                                                        <div class="col-sm-9">
                                                            <select name="level_edit" class="form-control">
                                                                <?php
                                                                if ($level == 'SUPER ADMIN') { ?>
                                                                    <option>Pilih Level</option>
                                                                      <?php
                                                                    $q = mysqli_query($connect, "SELECT * FROM tbl_level_user"); 

                                                                      while ($a = mysqli_fetch_array($q)){
                                                                        if ($a[0] == $row['level_user']) {
                                                                          echo "<option value='$a[0]' selected>$a[0]</option>";
                                                                        } else {
                                                                          echo "<option value='$a[0]'>$a[0]</option>";
                                                                        }
                                                                      }
                                                                      ?>
                                                            <?php    
                                                                } elseif ($level == 'ADMIN') { ?>
                                                                    <option>Pilih Level</option>
                                                                      <?php
                                                                    $q = mysqli_query($connect, "SELECT * FROM tbl_level_user_super"); 

                                                                      while ($a = mysqli_fetch_array($q)){
                                                                        if ($a[0] == $row['level_user']) {
                                                                          echo "<option value='$a[0]' selected>$a[0]</option>";
                                                                        } else {
                                                                          echo "<option value='$a[0]'>$a[0]</option>";
                                                                        }
                                                                      }
                                                                      ?>
                                                            <?php 
                                                                }
                                                            ?>
                                                            </select>
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
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
</div>

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
    <!-- This Page JS -->
    <script src="assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="dist/js/pages/mask/mask.init.js"></script>
    <script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/libs/quill/dist/quill.min.js"></script>
    <script src="dist/js/growl-bootstrap/jquery.bootstrap-growl.js"></script>

    <!-- this page js -->
    <script src="assets/libs/toastr/build/toastr.min.js"></script>
    <script src="assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="assets/libs/magnific-popup/meg.init.js"></script>

    <!-- this page js -->
    <script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#nip').blur(function(){
                $('#pesan').html('<img style="margin-left:10px; width:10px" src="loading.gif">');
                var nik = $(this).val();

                $.ajax({
                    type    : 'POST',
                    url     : 'proses.php',
                    data    : 'nik='+nik,
                    success : function(data){
                        $('#pesan').html(data);
                    }
                })

            });
        });
    </script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
    <?php include ('config_config_cs/fungsi_toast_notifikasi_list-user.php'); ?>