<body>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <?php $this->load->view('mentor/_partials/sidebar'); ?>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <?php $this->load->view('mentor/_partials/navbar'); ?>

            <?php foreach ($dt_mentor as $profile) { ?>
                <div class="container-fluid">
                    <div class="bg-dark text-center" style="position: relative; padding-bottom:50px; margin:auto; border-radius:20px; color:white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.30);">
                        <img src="<?php echo base_url('assets/img/1.png') ?>" class="mx-auto d-block img-fluid p-3" alt="avatar" style="border-radius:15%; object-fit:cover;">
                        <h5><?php echo $profile->first_name ?></h5>
                        <p><?php echo $profile->department ?></p>
                    </div>
                    <br>
                    <div style="padding:20px; border-radius:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.30);">
                        <p class="title-section">First Name</p>
                        <p class="title-child"><?php echo $profile->first_name ?></p>
                        <hr>
                        <p class="title-section">Last Name</p>
                        <p class="title-child"><?php echo $profile->last_name ?></p>
                        <hr>
                        <p class="title-section">Academic Degree</p>
                        <p class="title-child"><?php echo $profile->gelar ?></p>
                        <hr>
                        <p class="title-section">NIK</p>
                        <p class="title-child"><?php echo $profile->nik ?></p>
                        <hr>
                        <p class="title-section">Place and Date of birth</p>
                        <p class="title-child"><?php echo $profile->tempat ?>, <?php echo $profile->tgl_lahir ?></p>
                        <hr>
                        <p class="title-section">Gender</p>
                        <p class="title-child"><?php echo $profile->jkelamin ?></p>
                        <hr>
                        <p class="title-section">Religion</p>
                        <p class="title-child"><?php echo $profile->agama ?></p>
                        <hr>
                        <p class="title-section">Last Position</p>
                        <p class="title-child"><?php echo $profile->jbtakhir ?></p>
                        <hr>
                        <p class="title-section">Home address</p>
                        <p class="title-child"><?php echo $profile->alamat ?></p>
                        <hr>
                        <p class="title-section">Mobile Phone Number</p>
                        <p class="title-child"><?php echo $profile->nohp ?></p>
                        <hr>
                        <p class="title-section">E-mail</p>
                        <p class="title-child"><?php echo $profile->email ?></p>
                        <hr>
                        <p class="title-section">Social Media Address</p>
                        <p class="title-child"><?php echo $profile->sosmed ?></p>
                    </div>

                </div>
            <?php } ?>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!--  -->


    <!-- Menu Toggle Script -->
    <?php $this->load->view('mentee/js-file/tabs-js'); ?>
    <?php $this->load->view('mentee/js-file/general'); ?>


</body>

</html>