<body>

  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <?php $this->load->view('mentee/_partials/sidebar'); ?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <?php $this->load->view('mentee/_partials/navbar'); ?>


      <div class="container-fluid">
        <div class="bg-dark text-center" style="position: relative; padding-bottom:50px; margin:auto; border-radius:20px; color:white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.30);">
          <?php foreach ($dt_mentee as $profile) { ?>
            <img src="<?php echo base_url('assets/img/1.png') ?>" class="mx-auto d-block img-fluid p-3" alt="avatar" style="border-radius:15%; object-fit:cover;">
            <h5><?php echo $profile->first_name ?></h5>
            <p><?php echo $profile->department ?></p>
          <?php } ?>
        </div>
        <br>
        <div class="tabs">
          <div class="tab-header">
            <div class="active">
              Personal Information
            </div>
            <div>
              Summary
            </div>
            <div>
              Interest
            </div>
            <div>
              Education
            </div>
          </div>
          <div class="tab-indicator"></div>
          <div class="tab-body">
            <div class="active">
              <?php $this->load->view('mentee/profile/profile-info'); ?>
            </div>
            <div>
              <?php $this->load->view('mentee/profile/summary'); ?>
            </div>

            <div>
              <?php $this->load->view('mentee/profile/interest'); ?>
            </div>

            <div>
              <?php $this->load->view('mentee/profile/edu'); ?>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- modals -->



  <!--  -->


  <!-- Menu Toggle Script -->
  <?php $this->load->view('mentee/js-file/tabs-js'); ?>
  <?php $this->load->view('mentee/js-file/general'); ?>


</body>

</html>