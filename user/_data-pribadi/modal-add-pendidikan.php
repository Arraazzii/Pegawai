<!--modal-->
<div class="modal fade" id="ModalAddPendidikan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
    <div class="modal-dialog" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pendidikan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="config_config_cs/tambah-pendidikan.php?n=file" method="post" enctype="multipart/form-data" id="tambah">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="control-label">NIP</label>
                            <input maxlength="100" name="nip" type="text" required="required" class="form-control" placeholder="Nomer Induk Pegawai" required="" readonly="" value="<?php echo $p_nip; ?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Jenjang</label>
                            <select name="jenjang" class="form-control">
                                <option>Pilih Jenjang</option>
                                <?php
                                    $q = mysqli_query($connect, "SELECT * FROM tbl_pendidikan"); 

                                    while ($a = mysqli_fetch_array($q)){
                                        echo "<option value='$a[0]'>$a[0]</option>";                
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nama Instansi</label>
                            <input maxlength="100" name="nama_instansi" type="text" required="required" class="form-control" placeholder="Nama Instansi"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tahun Ajaran</label>
                            <div class="row mb-6">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="dari" class="form-control" id="datepicker-autoclose3" placeholder="yyyy" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="sampai" class="form-control" id="datepicker-autoclose4" placeholder="yyyy" required>
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
                                <input type="text" name="tahun_lulus" class="form-control" id="datepicker-autoclose5" placeholder="yyyy" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Ket. Ijazah</label>
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customControlValidation1" name="ket_ijazah" value="YA" >
                                        <label class="custom-control-label" for="customControlValidation1">YA</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customControlValidation2" name="ket_ijazah" value="TIDAK">
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