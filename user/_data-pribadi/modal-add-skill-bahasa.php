<!--modal-->
<div class="modal fade" id="ModalAddSkillBahasa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
    <div class="modal-dialog" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kemampuan Berbahasa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="config_config_cs/tambah-skill-bahasa.php?n=file" method="post" enctype="multipart/form-data" id="tambah">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="control-label">NIP</label>
                            <input maxlength="100" name="nip" type="text" required="required" class="form-control" placeholder="Nomer Induk Pegawai" required="" readonly="" value="<?php echo $p_nip; ?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Bahasa</label>
                            <input maxlength="100" name="nama_bahasa" type="text" required="required" class="form-control" placeholder="Bahasa"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Kompetensi</label><br>
                            <div class="range range-danger">
                                <input type="range" name="kompetensi" class="progress-bar-striped progress-bar-animated bg-warning" name="range" min="0" max="100" value="50" onchange="rangeSuccess.value=value">
                                <output id="rangeSuccess">50</output>
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