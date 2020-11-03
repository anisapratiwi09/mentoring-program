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
                <div style="height:auto;">
                    <?= $this->session->flashdata('message_summary'); ?>
                </div>

                <div style="padding:20px; border-radius:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.30);">
                    <form method="POST" action="<?= base_url('crud_mentee/save_summary') ?>">
                        <div class="form-group">
                            <label for="keahlian">Skills or Competencies</label>
                            <textarea class="form-control" id="keahlian" name="keahlian" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="value">Value</label>
                            <textarea class="form-control" id="value" name="value" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tagline">Tagline</label>
                            <textarea class="form-control" id="tagline" name="tagline" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="dream">Dream or Vision expected</label>
                            <textarea class="form-control" id="dream" name="dream" rows="3"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" name="input">Save Summary</button>
                        </div>
                    </form>
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