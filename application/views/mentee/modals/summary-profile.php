<!-- Modal -->
<div class="modal fade" id="summary-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Summary Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php foreach ($dt_summary as $summary) { ?>
                    <form method="POST" action="<?= base_url('mentee/createActionPlan') ?>">
                        <div class="form-group">
                            <label for="keahlian">Skills or Competencies</label>
                            <textarea class="form-control" id="keahlian" rows="3" value="<?php echo $summary->keahlian ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="value">Value</label>
                            <textarea class="form-control" id="value" rows="3" value="<?php echo $summary->value ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tagline">Tagline</label>
                            <textarea class="form-control" id="tagline" rows="3" value="<?php echo $summary->tagline ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="dream">Dream or Vision expected</label>
                            <textarea class="form-control" id="dream" rows="3" value="<?php echo $summary->dream ?>"></textarea>
                        </div>
                    </form>
                <?php } ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>