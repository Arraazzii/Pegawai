<!--modal-->
<div class="modal fade" id="ModalEditSkill<?php echo $a_bag['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
    <div class="modal-dialog" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Kemampuan / Skill</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="config_config_cs/edit-skill.php?n=file" method="post" enctype="multipart/form-data" id="tambah">
                    <input type="hidden" name="id" value="<?php echo $a_bag['id']; ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="control-label">NIP</label>
                            <input maxlength="100" name="nip" type="text" required="required" class="form-control" placeholder="Nomer Induk Pegawai" required="" readonly="" value="<?php echo $p_nip; ?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nama Skill</label>
                            <input maxlength="100" name="nama_skill" type="text" required="required" class="form-control" placeholder="Skill" value="<?php echo $a_bag['skil']; ?>" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Kompetensi</label><br>
                            <div class="range range-danger">
                                <input type="range" name="kompetensi" class="progress-bar-striped progress-bar-animated bg-warning" name="range" min="0" max="100" value="<?php echo $a_bag['kompetensi']; ?>" onchange="rangeSuccess.value=value">
                                <output id="rangeSuccess"><?php echo $a_bag['kompetensi']; ?></output>
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