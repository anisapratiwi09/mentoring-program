<!-- Modal View Note-->
<?php $no = 1;
foreach ($dt_dev as $dd) { ?>
    <div class="modal fade" id="note<?php echo $dd->id ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Note</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="list" value="<?php echo $dd->note ?>" readonly>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>