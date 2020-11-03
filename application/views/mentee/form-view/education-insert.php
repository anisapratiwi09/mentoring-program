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
                    <?= $this->session->flashdata('message_interest'); ?>
                </div>

                <div style="padding:20px; border-radius:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.30);">
                    <form method="POST" action="<?= base_url('crud_mentee/save_edu') ?>">
                        <div class="form-row">
                            <div class="col">
                                <label for="first_name">Level</label>
                                <input type="text" class="form-control" name="jenjang" placeholder="Ex: S1">
                            </div>
                            <div class="col">
                                <label for="last_name">Majors</label>
                                <input type="text" class="form-control" name="jurusan" placeholder="Ex: Teknik Informatika">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Universitas</label>
                            <input type="text" class="form-control" name="univ" placeholder="Ex: Universitas Sumatera Utara">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Graduation Year</label>
                            <input type="text" class="form-control" name="thn_lulus" placeholder="Ex: 2000">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" name="input">Save Education</button>
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