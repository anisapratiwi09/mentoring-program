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
                <div style="padding:20px; border-radius:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.30);">
                    <div class="card-deck">
                        <?php $no = 1;
                        foreach ($data as $row) { ?>
                            <div class="card">
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row->first_name; ?></h5>
                                    <p class="card-text"><?php echo $row->jbtakhir; ?></p>

                                    <a href="<?php echo base_url('mentor/profileMentee/') . $row->id_mentee ?>"> <button class="btn btn-primary">Profile</button></a>
                                    <a href="<?php echo base_url('mentor/contractAggrement/') . $row->id_mentee ?>"> <button class="btn btn-primary">Contract Aggrement</button></a>
                                    <a href="<?php echo base_url('mentor/developmentPlan/') . $row->id_mentee ?>"> <button class="btn btn-primary">Development Plan</button></a>
                                </div>
                                <!-- <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div> -->
                            </div>
                        <?php } ?>
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

    <!-- Menu Toggle Script -->
    <?php $this->load->view('mentee/js-file/general'); ?>


</body>

</html>