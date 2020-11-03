<body>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <?php $this->load->view('mentor/_partials/sidebar'); ?>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg">
                <button class="btn btn-primary bg-dark" id="menu-toggle"><i class="fas fa-bars"></i></button>
            </nav>

            <div class="container-fluid">
                <?php foreach ($dt_mentee as $dm) { ?>

                    <div style="padding:20px; border-radius:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.30);">
                        <h4><?php echo $dm->first_name ?> Development Plan</h4>
                        <hr>
                        <div style="overflow-x:auto;">
                            <table class="table table-bordered" style="overflow-x:auto;">
                                <thead>
                                    <tr>
                                        <th rowspan=" 2">Goals</th>
                                        <th rowspan="2">Development Objectives</th>
                                        <th colspan="3">Development Activities</th>
                                        <th rowspan="2">Kemampuan Existing</th>
                                        <th rowspan="2">Keterangan</th>
                                        <th rowspan="2" colspan="2">Action</th>
                                        <th rowspan="2">Status</th>
                                        <th rowspan="2">Note</th>
                                    </tr>
                                    <tr>
                                        <th>Activities</th>
                                        <th>Method</th>
                                        <th>Finish</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($dt_dev as $dd) { ?>
                                        <tr>
                                            <td><?php echo $dd->id_goals ?></td>
                                            <td><?php echo $dd->dev_object ?></td>
                                            <td><?php echo $dd->aktifitas ?></td>
                                            <td><?php echo $dd->metode ?></td>
                                            <td><?php echo $dd->tgl_selesai ?></td>
                                            <td><?php echo $dd->kemampuan ?></td>
                                            <td><?php echo $dd->keterangan ?></td>
                                            <?php if ($dd->status == "Scheduled") { ?>
                                                <td>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_dev<?php echo $dd->id ?>">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </button>
                                                </td>
                                                <td>

                                                    <a href="<?= base_url('crud_mentor/delete_dev/') . $dd->id ?>" type="button" class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </a>

                                                </td>
                                            <?php } else { ?>
                                                <td>
                                                    <button type="button" class="btn btn-secondary">
                                                        <i class="fa fa-ban"></i>
                                                    </button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary">
                                                        <i class="fa fa-ban"></i>
                                                    </button>
                                                </td>
                                            <?php } ?>
                                            <!-------->
                                            <?php if ($dd->status == "Scheduled") { ?>
                                                <td class="bg-warning text-center">
                                                    <p style="font-weight: bold;"><?php echo $dd->status ?></p>
                                                    <a href="<?= base_url('crud_mentor/done_dev/') . $dd->id ?>" type="button" class="btn btn-success btn-sm p-1 my-1">Done</a>
                                                    <a href="<?= base_url('crud_mentor/cancel_dev/') . $dd->id ?>" type="button" class="btn btn-danger btn-sm p-1">Cancelled</a>
                                                </td>
                                            <?php } elseif ($dd->status == "Done") { ?>
                                                <td class="bg-success text-center">
                                                    <p style="font-weight: bold;"><?php echo $dd->status ?></p>
                                                </td>
                                            <?php } else { ?>
                                                <td class="bg-danger text-center">
                                                    <p style="font-weight: bold;"><?php echo $dd->status ?></p>
                                                </td>
                                            <?php } ?>
                                            <td>
                                                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#note<?php echo $dd->id ?>">
                                                    <i class="fa fa-sticky-note"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- modals -->
    <?php $this->load->view('_modal/logout'); ?>
    <?php $this->load->view('mentee/IDP/note'); ?>
    <?php $this->load->view('mentor/my mentee/modal-edit-dev'); ?>
    <!-- /modals -->

    <!-- Menu Toggle Script -->
    <?php $this->load->view('mentee/js-file/general'); ?>


</body>

</html>