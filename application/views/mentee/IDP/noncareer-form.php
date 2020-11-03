<body>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <?php $this->load->view('mentee/_partials/sidebar'); ?>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg">
                <button class="btn btn-primary bg-dark" id="menu-toggle"><i class="fas fa-bars"></i></button>
            </nav>

            <div class="container-fluid">
                <div style="padding:20px; border-radius:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.30);">
                    <center>
                        <h4>Non Career Goals</h4>
                    </center>
                    <hr>
                    <form method="POST" action="<?= base_url('crud_mentee/create_noncareer') ?>">
                        <div class="form-row">
                            <div class="col">
                                <label for="posisi">Expertise</label>
                                <input type="text" name="expertise" class="form-control" required>
                            </div>
                            <div class="col">
                                <label for="unit">Bidang</label>
                                <input type="text" name="bidang" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jangka_waktu">Period of time</label>
                            <select name="jangka_waktu" class="form-control">
                                <option value="short">Short Terms Goals</option>
                                <option value="middle">Middle Terms Goals</option>
                                <option value="long">Long Terms Goals</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" name="input">Add</button>
                        </div>
                    </form>
                </div>

                <br>
                <div style="padding:20px; border-radius:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.30);">
                    <p>Short Terms Goals</p>
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Expertise</th>
                                <th scope="col">Bidang</th>
                            </tr>

                        </thead>
                        <?php foreach ($noncareer as $ncr) { ?>
                            <?php if ($ncr->jangka_waktu == 'short') { ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="text" name="posisi" value="<?php echo $ncr->expertise ?>" class="form-control" readonly>
                                        </td>
                                        <td>
                                            <input type="text" name="posisi" value="<?php echo $ncr->bidang ?>" class="form-control" readonly>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $ncr->id ?>">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('crud_mentee/delete_noncareer/') . $ncr->id ?>" type="button" class="btn btn-danger btnhapusform">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php } ?>
                        <?php } ?>
                    </table>
                    <hr>

                    <p>Middle Terms Goals</p>
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Expertise</th>
                                <th scope="col">Bidang</th>
                            </tr>

                        </thead>
                        <?php foreach ($noncareer as $ncr) { ?>
                            <?php if ($ncr->jangka_waktu == 'middle') { ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="text" name="posisi" value="<?php echo $ncr->expertise ?>" class="form-control" readonly>
                                        </td>
                                        <td>
                                            <input type="text" name="posisi" value="<?php echo $ncr->bidang ?>" class="form-control" readonly>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $ncr->id ?>">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('crud_mentee/delete_noncareer/') . $ncr->id ?>" type="button" class="btn btn-danger btnhapusform">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php } ?>
                        <?php } ?>
                    </table>
                    <hr>

                    <p>Long Terms Goals</p>
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Expertise</th>
                                <th scope="col">Bidang</th>
                            </tr>

                        </thead>
                        <?php foreach ($noncareer as $ncr) { ?>
                            <?php if ($ncr->jangka_waktu == 'long') { ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="text" name="posisi" value="<?php echo $ncr->expertise ?>" class="form-control" readonly>
                                        </td>
                                        <td>
                                            <input type="text" name="posisi" value="<?php echo $ncr->bidang ?>" class="form-control" readonly>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $ncr->id ?>">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('crud_mentee/delete_noncareer/') . $ncr->id ?>" type="button" class="btn btn-danger btnhapusform">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php } ?>
                        <?php } ?>
                    </table>
                    <hr>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- modals -->
    <?php $this->load->view('_modal/logout'); ?>
    <!-- /modals -->
    <!-- Modal -->
    <?php foreach ($noncareer as $ncr) { ?>
        <div class="modal fade" id="edit<?php echo $ncr->id ?>" tabindex="-1" role="dialog" aria-labelledby="editTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editgoalsTitle">Modal Edit Non Career Goals</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="<?= base_url('crud_mentee/edit_noncareer/') . $ncr->id ?>">
                        <div class="modal-body">
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

    <!-- Menu Toggle Script -->
    <?php $this->load->view('mentee/js-file/general'); ?>


</body>

</html>