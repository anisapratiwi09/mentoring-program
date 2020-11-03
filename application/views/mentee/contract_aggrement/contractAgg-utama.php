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
                    <h4>GOALS</h4>
                    <form method="POST" action="<?= base_url('crud_mentee/create_goals') ?>">
                        <div class="form-group">
                            <label for="list_goals">Example label</label>
                            <input type="text" class="form-control" id="list_goals" name="list_goals">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                    <hr>
                    <table class="table table-sm table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th scope="col">List Goals</th>
                            </tr>

                        </thead>
                        <tbody>
                            <?php foreach ($dt_goals as $goals) { ?>
                                <tr>
                                    <td>
                                        <input type="text" name="list-goals" value="<?php echo $goals->list_goals ?>" class=" form-control" readonly>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editgoals<?php echo $goals->id_goals ?>">
                                            <i class="fa fa-pencil-alt"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('crud_mentee/delete_goals/') . $goals->id_goals ?>" type="button" class="btn btn-danger btnhapusform">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <br>
                <div style="padding:20px; border-radius:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.30);">
                    <h4>please download this file</h4>
                    <center>
                        <object data="<?php echo base_url() . 'assets/dokumen/form-contract.pdf' ?>" width="80%" height="400"></object>
                    </center>

                </div>
                <br>
                <div style="padding:20px; border-radius:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.30);">
                    <h4>Upload your file </h4>
                    <input type="file" name="berkas" /><br>
                    <input type="submit" value="upload" class="btn-primary btn my-3" />


                </div>
                <br>

                <br>

            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- modals -->
    <?php $this->load->view('_modal/logout'); ?>

    <!-- Modal -->
    <?php foreach ($dt_goals as $goals) { ?>
        <div class="modal fade" id="editgoals<?php echo $goals->id_goals ?>" tabindex="-1" role="dialog" aria-labelledby="editgoalsTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editgoalsTitle">Modal Edit Goals</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="<?= base_url('crud_mentee/edit_goals/') . $goals->id_goals ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <!-- <label for="list_goals">Input Your Goals</label> -->
                                <input type="text" class="form-control" name="list_goals" value="<?php echo $goals->list_goals ?>">
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
    <!-- /modals -->

    <!-- Menu Toggle Script -->
    <?php $this->load->view('mentee/js-file/general'); ?>


</body>

</html>