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
                    <form method="POST" action="<?= base_url('crud_mentee/create_dev') ?>">
                        <div class="form-group row">
                            <label for="chooseMentee" class="col-sm-3 col-form-label">Choose your goals</label>
                            <div class="col-sm-5">
                                <select class="form-control" name="id_goals">
                                    <option>--Select--</option>
                                    <?php $no = 1;
                                    foreach ($dt_goals as $goals) { ?>

                                        <option value="<?php echo $goals->id_goals ?>"><?php echo $goals->list_goals ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Development Objectives</label>
                            <p class="text-danger">(Target Kapabilitas yang perlu ditingkatkan untuk mencapai Tujuan / Goals)</p>
                            <input type="text" class="form-control" name="dev_object">
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="posisi">Activity</label>
                                <input type="text" name="aktifitas" class="form-control">
                            </div>
                            <div class="col">
                                <label for="unit">Method</label>
                                <input type="text" name="metode" class="form-control">
                            </div>
                            <div class="col">
                                <label for="unit">Finish</label>
                                <input type="date" name="tgl_selesai" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Kemampuan</label>
                            <input type="text" class="form-control" name="kemampuan">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" name="input">Add</button>
                        </div>
                    </form>
                </div>
                <br>
                <div style=" padding:20px; border-radius:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.30);">
                    <div style="overflow-x:auto;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th rowspan="2">Goals</th>
                                    <th rowspan="2">Development Objectives</th>
                                    <th colspan="3">Development Activities</th>
                                    <th rowspan="2">Kemampuan Existing</th>
                                    <th rowspan="2">Keterangan</th>
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
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $dd->id ?>">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('crud_mentee/delete_dev/') . $dd->id ?>" type="button" class="btn btn-danger btnhapusform">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

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
    <?php foreach ($dt_dev as $dd) { ?>
        <div class="modal fade" id="edit<?php echo $dd->id ?>" tabindex="-1" role="dialog" aria-labelledby="editTitle" aria-hidden="true" style="">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editgoalsTitle">Modal Edit Development Plan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="<?= base_url('crud_mentee/edit_dev/') . $dd->id ?>">
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="chooseMentee" class="col-sm-3 col-form-label">Choose your goals</label>
                                <div class="col">
                                    <select class="form-control" name="id_goals">
                                        <option>--Select--</option>
                                        <?php $no = 1;
                                        foreach ($dt_goals as $goals) { ?>

                                            <option value="<?php echo $goals->id_goals ?>"><?php echo $goals->list_goals ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Development Objectives</label>
                                <input type="text" class="form-control" name="dev_object" value="<?php echo $dd->dev_object ?>">
                            </div>
                            <div class="form-group">
                                <label for="posisi">Activity</label>
                                <input type="text" name="aktifitas" class="form-control" value="<?php echo $dd->aktifitas ?>">
                            </div>
                            <div class="form-group">
                                <label for="unit">Method</label>
                                <input type="text" name="metode" class="form-control" value="<?php echo $dd->metode ?>">
                            </div>
                            <div class="form-group">
                                <label for="unit">Finish</label>
                                <input type="date" name="tgl_selesai" class="form-control" value="<?php echo $dd->tgl_selesai ?>">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Kemampuan</label>
                                <input type="text" class="form-control" name="kemampuan" value="<?php echo $dd->kemampuan ?>">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" value="<?php echo $dd->keterangan ?>">
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