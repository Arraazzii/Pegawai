<!--modal-->
<div class="modal fade" id="ModalEditPendidikan<?php echo $a_bag['id']; ?>" tabindex="-1" role="modal" aria-labelledby="exampleModalLabel" aria-hidden="true ">
    <div class="modal-dialog" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Pendidikan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="config_config_cs/edit-pendidikan.php?n=file" method="post" enctype="multipart/form-data" id="tambah">
                    <input type="hidden" name="id" value="<?php echo $a_bag['id']; ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="control-label">NIP</label>
                            <input maxlength="100" name="nip" type="text" required="required" class="form-control" placeholder="Nomer Induk Pegawai" required="" readonly="" value="<?php echo $a_bag['nip']; ?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Jenjang</label>
                            <select name="jenjang" class="form-control">
                                <option>Pilih Jenjang</option>
                                <?php
                                    $q = mysqli_query($connect, "SELECT * FROM tbl_pendidikan"); 

                                    while ($a = mysqli_fetch_array($q)){
                                        if ($a[0] == $a_bag['jenjang']) {
                                            echo "<option value='$a[0]' selected>$a[0]</option>";
                                        } else {
                                            echo "<option value='$a[0]'>$a[0]</option>";
                                        }                
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nama Instansi</label>
                            <input maxlength="100" name="nama_instansi" type="text" required="required" class="form-control" placeholder="Nama Instansi" value="<?php echo $a_bag['nama_instansi']; ?>" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tahun Ajaran</label>
                            <div class="row mb-6">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="dari" class="form-control" id="datepicker-autoclose6" placeholder="yyyy" value="<?php $data= $a_bag['tahun_ajaran']; $namafile= substr($data,0,4); echo $namafile; ?>" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="sampai" class="form-control" id="datepicker-autoclose7" placeholder="yyyy" value="<?php $data= $a_bag['tahun_ajaran']; $namafile= substr($data,-4); echo $namafile; ?>" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tahun Lulus</label>
                            <div class="row mb-6">
                                <div class="input-group">
                                <input type="text" name="tahun_lulus" class="form-control" id="datepicker-autoclose8" placeholder="yyyy" value="<?php echo $a_bag['tahun_lulus']; ?>" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Jenis Kelamin</label>
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customControlValidation1" name="ket_ijazah" value="YA"  <?=$a_bag['ket_ijazah'] =='YA' ? ' checked="checked"' : '';?>>
                                        <label class="custom-control-label" for="customControlValidation1">YA</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customControlValidation2" name="ket_ijazah" value="TIDAK"  <?=$a_bag['ket_ijazah'] =='TIDAK' ? ' checked="checked"' : '';?>>
                                        <label class="custom-control-label" for="customControlValidation2">TIDAK</label>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <input type="submit" name="tambah" class="btn btn-primary" id="submit" value="SIMPAN">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>