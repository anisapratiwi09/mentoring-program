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
                    <?= $this->session->flashdata('message_personal'); ?>
                </div>

                <div style="padding:20px; border-radius:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.30);">
                    <?php foreach ($dt_mentee as $profile) { ?>
                        <form method="POST" action="<?= base_url('crud_mentee/edit_profile/') . $profile->id_mentee ?>">
                            <div class="form-row">
                                <div class="col">
                                    <label for="first_name">First name</label>
                                    <input type="text" class="form-control" name="first_name" placeholder="First name" value="<?php echo $profile->first_name ?>">
                                </div>
                                <div class="col">
                                    <label for="last_name">Last name</label>
                                    <input type="text" class="form-control" name="last_name" placeholder="Last name" value="<?php echo $profile->last_name ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Academic Degree</label>
                                <input type="text" class="form-control" name="gelar" placeholder="Academic Degree">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">NIK</label>
                                <input type="text" class="form-control" name="nik" placeholder="NIK">
                                <small class="text-danger"><?php echo form_error('nik'); ?></small>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="first_name">Place of birth</label>
                                    <input type="text" class="form-control" name="tempat" placeholder="Place of birth">
                                </div>
                                <div class="col">
                                    <label for="last_name">Date of birth</label>
                                    <input type="date" class="form-control" name="tgl_lahir" placeholder="Date of birth">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jkelamin" id="jkelamin">
                                            <label class="form-check-label">
                                                Man
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jkelamin" id="jkelamin">
                                            <label class="form-check-label">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Religion</label>
                                <select class="custom-select" name="agama">
                                    <option>Open this select menu</option>
                                    <option>Islam</option>
                                    <option>Protestan</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Buddha</option>
                                    <option>Konghucu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Last Position</label>
                                <input type="text" class="form-control" name="jbtakhir" placeholder="Last Position">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Home address</label>
                                <input type="text" class="form-control" name="alamat" placeholder="Home address">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Mobile Phone Number</label>
                                <input type="number" class="form-control" name="nohp" placeholder="Mobile Phone Number" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="sosmed">Social Media Address</label>
                                <input type="text" class="form-control" name="sosmed" placeholder="Social Media Address">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
            <br>
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