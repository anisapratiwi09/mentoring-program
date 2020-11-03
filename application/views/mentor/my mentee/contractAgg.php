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
                        <h4><?php echo $dm->first_name ?> Contract Aggrement</h4>
                        <center>
                            <object data="<?php echo base_url() . 'assets/dokumen/form-contract.pdf' ?>" width="800" height="400"></object>
                        </center>
                    </div>
                <?php } ?>
                <br>
                <div style="padding:20px; border-radius:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.30);">
                    <h4><?php echo $dm->first_name ?> Career Goals</h4>
                    <table class="table table-sm table-bordered" style="">
                        <thead>
                            <tr>
                                <th scope="col">Position</th>
                                <th scope="col">Unit/Cabang</th>
                                <th scope="col">Period of time</th>
                                <th scope="col" colspan="2">Action</th>
                            </tr>

                        </thead>
                        <?php foreach ($career as $cr) { ?>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" name="posisi" value="<?php echo $cr->posisi ?>" class="form-control" readonly>
                                    </td>
                                    <td>
                                        <input type="text" name="posisi" value="<?php echo $cr->unit ?>" class="form-control" readonly>
                                    </td>
                                    <td>
                                        <?php if ($cr->jangka_waktu == 'short') { ?>
                                            <input type="text" name="posisi" value="Short Terms Goals" class="form-control" readonly>
                                        <?php } elseif ($cr->jangka_waktu == 'middle') { ?>
                                            <input type="text" name="posisi" value="Middle Terms Goals" class="form-control" readonly>
                                        <?php } else { ?>
                                            <input type="text" name="posisi" value="Long Terms Goals" class="form-control" readonly>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_career<?php echo $cr->id ?>">
                                            <i class=" fa fa-pencil-alt"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('crud_mentor/delete_career/') . $cr->id ?>" type="button" class="btn btn-danger btnhapusform">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        <?php } ?>
                    </table>
                    <hr>

                </div>
                <br>
                <div style="padding:20px; border-radius:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.30);">
                    <h4><?php echo $dm->first_name ?> Non Career Goals</h4>
                    <table class="table table-sm table-bordered" style="">
                        <thead>
                            <tr>
                                <th scope="col">Expertise</th>
                                <th scope="col">Bidang</th>
                                <th scope="col">Period of time</th>
                                <th scope="col" colspan="2">Action</th>
                            </tr>

                        </thead>
                        <?php foreach ($noncareer as $ncr) { ?>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" name="posisi" value="<?php echo $ncr->expertise ?>" class="form-control" readonly>
                                    </td>
                                    <td>
                                        <input type="text" name="posisi" value="<?php echo $ncr->bidang ?>" class="form-control" readonly>
                                    </td>
                                    <td>
                                        <?php if ($ncr->jangka_waktu == 'short') { ?>
                                            <input type="text" name="posisi" value="Short Terms Goals" class="form-control" readonly>
                                        <?php } elseif ($ncr->jangka_waktu == 'middle') { ?>
                                            <input type="text" name="posisi" value="Middle Terms Goals" class="form-control" readonly>
                                        <?php } else { ?>
                                            <input type="text" name="posisi" value="Long Terms Goals" class="form-control" readonly>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_noncareer<?php echo $ncr->id ?>">
                                            <i class="fa fa-pencil-alt"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('crud_mentor/delete_noncareer/') . $ncr->id ?>" type="button" class="btn btn-danger btnhapusform">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        <?php } ?>
                    </table>
                </div>
                <br>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- modals -->
    <?php $this->load->view('_modal/logout'); ?>
    <?php $this->load->view('mentor/my mentee/modal-ncr'); ?>
    <?php $this->load->view('mentor/my mentee/modal-cr'); ?>
    <!-- /modals -->

    <!-- Menu Toggle Script -->
    <?php $this->load->view('mentee/js-file/general'); ?>


</body>

</html>