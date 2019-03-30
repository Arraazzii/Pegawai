<!--modal-->
<div class="modal fade" id="ModalEditPrestasi<?php echo $a_bag['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
    <div class="modal-dialog" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Prestasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="config_config_cs/edit-prestasi.php?n=file" method="post" enctype="multipart/form-data" id="tambah">
                    <input type="hidden" name="id" value="<?php echo $a_bag['id']; ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="control-label">NIP</label>
                            <input maxlength="100" name="nip" type="text" required="required" class="form-control" placeholder="Nomer Induk Pegawai" required="" readonly="" value="<?php echo $p_nip; ?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Ajang</label>
                            <input maxlength="100" name="ajang" type="text" required="required" class="form-control" placeholder="Ajang" value="<?php echo $a_bag['nama_prestasi']; ?>" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tanggal</label>
                            <div class="input-group">
                                <input type="text" name="tanggal" class="form-control" id="datepicker-autoclose10" placeholder="Tanggal Kejuaraan" value="<?php echo $a_bag['tanggal']; ?>" required>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label class="control-label">Ket</label>
                            <input maxlength="100" name="keterangan" type="text" required="required" class="form-control" placeholder="Keterangan" value="<?php echo $a_bag['ket']; ?>"/>
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