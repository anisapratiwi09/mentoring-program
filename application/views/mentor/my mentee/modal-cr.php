<!-- Modal -->
<?php foreach ($career as $cr) { ?>
    <div class="modal fade" id="edit_career<?php echo $cr->id ?>" tabindex="-1" role="dialog" aria-labelledby="editTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editgoalsTitle">Modal Edit Non Career Goals</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="<?= base_url('crud_mentor/edit_career/') . $cr->id ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="jangka_waktu">Period of time</label>
                            <select name="jangka_waktu" class="form-control">
                                <option value="short" <?php if ($cr->jangka_waktu == "short") echo 'selected'; ?>>Short Terms Goals</option>
                                <option value="middle" <?php if ($cr->jangka_waktu == "middle") echo 'selected'; ?>>Middle Terms Goals</option>
                                <option value="long" <?php if ($cr->jangka_waktu == "long") echo 'selected'; ?>>Long Terms Goals</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="posisi">Posisi</label>
                            <input type="text" class="form-control" name="posisi" value="<?php echo $cr->posisi ?>">
                        </div>
                        <div class="form-group">
                            <label for="unit">Unit</label>
                            <input type="text" class="form-control" name="unit" value="<?php echo $cr->unit ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>