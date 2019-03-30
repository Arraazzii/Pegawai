<!--modal-->
<div class="modal fade" id="ModalSIM_C" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
    <div class="modal-dialog" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Foto SIM C</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="config_config_cs/upload-sim-c.php?n=file" method="post" enctype="multipart/form-data" id="tambah">
                    <input type="hidden" name="id_file" value="<?php echo $id_file; ?>">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" name="nip" class="form-control" id="fname" placeholder="Nomer Induk Pegawai" value="<?php echo $p_nip; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Pilih Foto</label>
                            <div class="col-sm-9">
                                <input type="file" name="file" class=" btn-outline form-control" id="lname" placeholder="Pilih Foto" required="">
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