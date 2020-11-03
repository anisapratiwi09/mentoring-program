<?php foreach ($noncareer as $ncr) { ?>
    <div class="modal fade" id="edit_noncareer<?php echo $ncr->id ?>" tabindex="-1" role="dialog" aria-labelledby="editTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editgoalsTitle">Modal Edit Non Career Goals</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="<?= base_url('crud_mentor/edit_noncareer/') . $ncr->id ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="jangka_waktu">Period of time</label>
                            <select name="jangka_waktu" class="form-control">
                                <option value="short" <?php if ($ncr->jangka_waktu == "short") echo 'selected'; ?>>Short Terms Goals</option>
                                <option value="middle" <?php if ($ncr->jangka_waktu == "middle") echo 'selected'; ?>>Middle Terms Goals</option>
                                <option value="long" <?php if ($ncr->jangka_waktu == "long") echo 'selected'; ?>>Long Terms Goals</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="expertise">Expertise</label>
                            <input type="text" class="form-control" name="expertise" value="<?php echo $ncr->expertise ?>">
                        </div>
                        <div class="form-group">
                            <label for="expertise">Bidang</label>
                            <input type="text" class="form-control" name="bidang" value="<?php echo $ncr->bidang ?>">
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