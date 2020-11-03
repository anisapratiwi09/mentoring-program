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
                <?php foreach ($data as $row) : ?>
                    <?php if ($row->visibility == '1' or $row->visibility == '3') { ?>
                        <div style="padding:20px; border-radius:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.30);">
                            <img src="<?php echo $row->gambar; ?>" alt="gambar kegiatan ">
                            <h4><?php echo $row->judulPost; ?></h4>
                            <p><?php echo $row->deskripsi; ?></p>
                            <a href="<?php echo base_url('mentor/event/') . $row->judulPost ?>"> <button type="button" class="btn btn-primary">more info...</button> </a>
                        </div>
                    <?php } ?>
                <?php endforeach; ?>
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