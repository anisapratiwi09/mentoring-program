<!-- Modal -->
<?php foreach ($dt_dev as $dd) { ?>
    <div class="modal fade" id="edit_dev<?php echo $dd->id ?>" tabindex="-1" role="dialog" aria-labelledby="editTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editgoalsTitle">Modal Edit Development Plan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="<?= base_url('crud_mentor/edit_dev/') . $dd->id ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputAddress">Development Objectives</label>
                            <!-- <p class="text-danger">(Target Kapabilitas yang perlu ditingkatkan untuk mencapai Tujuan / Goals)</p> -->
                            <input type="text" class="form-control" name="dev_object" value="<?php echo $dd->dev_object ?>">
                        </div>
                        <div class=" form-group">
                            <label for="posisi">Activity</label>
                            <input type="text" name="aktifitas" class="form-control" value="<?php echo $dd->aktifitas ?>">
                        </div>
                        <div class=" form-group">
                            <label for="unit">Method</label>
                            <input type="text" name="metode" class="form-control" value="<?php echo $dd->metode ?>">
                        </div>
                        <div class=" form-group">
                            <label for="unit">Finish</label>
                            <input type="date" name="tgl_selesai" class="form-control" value="<?php echo $dd->tgl_selesai ?>">
                        </div>
                        <div class=" form-group">
                            <label for="inputAddress">Kemampuan</label>
                            <input type="text" class="form-control" name="kemampuan" value="<?php echo $dd->kemampuan ?>">
                        </div>
                        <div class=" form-group">
                            <label for="inputAddress">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" value="<?php echo $dd->keterangan ?>">
                        </div>
                        <div class=" form-group">
                            <label for="inputAddress">Note</label>
                            <input type="text" class="form-control" name="note" value="<?php echo $dd->note ?>">
                        </div>
                    </div>
                    <div class=" modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>