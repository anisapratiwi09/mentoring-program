<body>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <?php $this->load->view('mentor/_partials/sidebar'); ?>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">



            <div class="container-fluid">

                <div class="container" style="margin: 50px; width:80%;">
                    <ul class="nav nav-tabs">
                        <li class="active" style="padding-right: 50px;"><a data-toggle="tab" href="#menu1">Personal Information</a></li>
                        <li><a data-toggle="tab" href="#menu5" style="padding-right: 50px;">Change Password</a></li>
                    </ul>

                    <div class="tab-content" style="padding-top: 50px;">
                        <div id="menu1" class="tab-pane fade in active">
                            <?php foreach ($dt_mentor as $profile) { ?>
                                <form method="POST" action="<?= base_url('crud_mentor/edit_profile/') . $profile->id_mentor ?>">
                                    <div class="form-row form-group">
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
                                        <input type="text" class="form-control" name="gelar" placeholder="Academic Degree" value="<?php echo $profile->gelar ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">NIK</label>
                                        <input type="text" class="form-control" name="nik" placeholder="NIK" value="<?php echo $profile->nik ?>">
                                    </div>
                                    <div class="form-row form-group">
                                        <div class="col">
                                            <label for="first_name">Place of birth</label>
                                            <input type="text" class="form-control" name="tempat" placeholder="Place of birth" value="<?php echo $profile->tempat ?>">
                                        </div>
                                        <div class="col">
                                            <label for="last_name">Date of birth</label>
                                            <input type="date" class="form-control" name="tgl_lahir" placeholder="Date of birth" value="<?php echo $profile->tgl_lahir ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jkelamin" id="jkelamin" value="man" <?php if ($profile->jkelamin == "man") echo 'checked'; ?>>
                                                    <label class="form-check-label">
                                                        Man
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jkelamin" id="jkelamin" value="female" <?php if ($profile->jkelamin == "female") echo 'checked'; ?>>
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
                                            <option <?php if ($profile->agama == "islam") echo 'selected'; ?> value="islam">Islam</option>
                                            <option <?php if ($profile->agama == "protestan") echo 'selected'; ?> value="protestan">Protestan</option>
                                            <option <?php if ($profile->agama == "katolik") echo 'selected'; ?> value="katolik">Katolik</option>
                                            <option <?php if ($profile->agama == "hindu") echo 'selected'; ?> value="hindu">Hindu</option>
                                            <option <?php if ($profile->agama == "buddha") echo 'selected'; ?> value="buddha">Buddha</option>
                                            <option <?php if ($profile->agama == "konghucu") echo 'selected'; ?> value="konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Last Position</label>
                                        <input type="text" class="form-control" name="jbtakhir" placeholder="Last Position" value="<?php echo $profile->jbtakhir ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Home address</label>
                                        <input type="text" class="form-control" name="alamat" placeholder="Home address" value="<?php echo $profile->alamat ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Mobile Phone Number</label>
                                        <input type="text" class="form-control" name="nohp" placeholder="Mobile Phone Number" value="<?php echo $profile->nohp ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $profile->email ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="sosmed">Social Media Address</label>
                                        <input type="text" class="form-control" name="sosmed" placeholder="Social Media Address" value="<?php echo $profile->sosmed ?>">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary" name="input">Save Profile</button>
                                    </div>
                                </form>
                            <?php } ?>
                        </div>

                        <div id="menu5" class="tab-pane fade">
                            <form form method="POST" action="<?php echo base_url('crud_mentee/changePassword') ?>">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Old Password</label>
                                        <input type="password" class="form-control" id="pass1" name="pass1" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">New Password</label>
                                        <input type="password" class="form-control" id="pass2" name="pass2" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Confirm New Password</label>
                                        <input type="password" class="form-control" id="pass3" name="pass3" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary" id="hapus" value="Save">Save changes</button>
                                </div>
                            </form>
                            <?php if ($this->session->flashdata('SuccessChangePass') == 'Success') {  ?>
                                <script type="text/javascript">
                                    swal("Success", "Change Password Success", "success")
                                        .then((value) => {
                                            window.location.href = '<?php echo base_url('mentee/setting'); ?>'
                                        });
                                </script>
                            <?php } else if ($this->session->flashdata('FailedChangePass') == 'Failed') { ?>
                                <script type="text/javascript">
                                    swal("Failed", "Failed to Change Password", "error");
                                    .then((value) => {
                                        window.location.href = '<?php echo base_url('mentee/setting'); ?>'
                                    });
                                </script>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- modals -->

        <?php $this->load->view('mentee/modals/personal-information'); ?>


        <!--  -->


        <!-- Menu Toggle Script -->
        <?php $this->load->view('mentee/js-file/tabs-js'); ?>
        <?php $this->load->view('mentee/js-file/general'); ?>


</body>

</html>