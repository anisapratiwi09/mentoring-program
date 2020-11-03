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
                    <form method="POST" action="<?= base_url('crud_mentee/save_interest') ?>">
                        <div class="form-group">
                            <label for="value">Write down the types of work that you are interested in and how they are often done
                                <br> (detail/data; Analysis; Intuition/idea development; Relationship/networking; Spontaneity, etc)
                            </label>
                            <textarea class="form-control" name="interest" rows="3" id="sum-3" placeholder="Write here"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Jabatan yg ingin dituju</label>
                            <input type="text" class="form-control" name="jbtn_tujuan" placeholder="">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" name="input">Save Interest</button>
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