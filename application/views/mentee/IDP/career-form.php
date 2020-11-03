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
                        <h4>Career Goals</h4>
                    </center>
                    <hr>
                    <form method="POST" action="<?= base_url('crud_mentee/create_career') ?>">
                        <div class="form-row">
                            <div class="col">
                                <label for="posisi">Position</label>
                                <input type="text" name="posisi" class="form-control" required>
                            </div>
                            <div class="col">
                                <label for="unit">Unit / cabang</label>
                                <input type="text" name="unit" class="form-control" required>
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
                                <th scope="col">Position</th>
                                <th scope="col">Unit/Cabang</th>
                            </tr>

                        </thead>
                        <?php foreach ($career as $cr) { ?>
                            <?php if ($cr->jangka_waktu == 'short') { ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="text" name="posisi" value="<?php echo $cr->posisi ?>" class="form-control" readonly>
                                        </td>
                                        <td>
                                            <input type="text" name="unit" value="<?php echo $cr->unit ?>" class="form-control" readonly>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $cr->id ?>">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('crud_mentee/delete_career/') . $cr->id ?>" type="button" class="btn btn-danger btnhapusform">
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
                                <th scope="col">Position</th>
                                <th scope="col">Unit/Cabang</th>
                            </tr>

                        </thead>
                        <?php foreach ($career as $cr) { ?>
                            <?php if ($cr->jangka_waktu == 'middle') { ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="text" name="posisi" value="<?php echo $cr->posisi ?>" class="form-control" readonly>
                                        </td>
                                        <td>
                                            <input type="text" name="posisi" value="<?php echo $cr->unit ?>" class="form-control" readonly>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $cr->id ?>">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('crud_mentee/delete_career/') . $cr->id ?>" type="button" class="btn btn-danger btnhapusform">
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
                                <th scope="col">Position</th>
                                <th scope="col">Unit/Cabang</th>
                            </tr>

                        </thead>
                        <?php foreach ($career as $cr) { ?>
                            <?php if ($cr->jangka_waktu == 'long') { ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="text" name="posisi" value="<?php echo $cr->posisi ?>" class="form-control" readonly>
                                        </td>
                                        <td>
                                            <input type="text" name="posisi" value="<?php echo $cr->unit ?>" class="form-control" readonly>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $cr->id ?>">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('crud_mentee/delete_career/') . $cr->id ?>" type="button" class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php } ?>
                        <?php } ?>
                    </table>


                </div>

                <!-- <button type="submit" class="btn btn-primary ">
                    <i class="fa fa-trash"></i>
                </button> -->
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- modals -->
    <?php $this->load->view('_modal/logout'); ?>
    <!-- /modals -->
    <!-- Modal -->
    <?php foreach ($career as $cr) { ?>
        <div class="modal fade" id="edit<?php echo $cr->id ?>" tabindex="-1" role="dialog" aria-labelledby="editTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editgoalsTitle">Modal Edit Non Career Goals</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="<?= base_url('crud_mentee/edit_career/') . $cr->id ?>">
                        <div class="modal-body">
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

    <!-- Menu Toggle Script -->
    <?php $this->load->view('mentee/js-file/general'); ?>


</body>

</html>