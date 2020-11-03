<!-- Sidebar -->
<div class="bg-dark border-right" id="sidebar-wrapper">
  <div class="sidebar-heading"><a href="<?php echo base_url('mentee') ?>" class="sidebar-head-text"> Mentoring Program </a></div>
  <a href="<?php echo base_url('mentee/profile') ?>">
    <div class="sidebar-profile btn">
      <img src="<?php echo base_url('assets/img/1.png') ?>" alt="poto" class="profile-image">
      <div class="profile-text">
        <p style="font-weight: 700;" class="text-capitalize"><?php echo $this->session->userdata('first_name'); ?></p>
        <p style="font-size: 0.8rem;" class="text-capitalize"><?php echo $this->session->userdata('role'); ?></p>
      </div>
    </div>
  </a>

  <div class="list-group list-group-flush" id="sidebar-menu">
    <a href="<?php echo base_url('mentee') ?>" class="list-group-item list-group-item-action bg-dark"><i class="fas fa-qrcode"></i>Dashboard</a>
    <a href="<?php echo base_url('mentee/meetings') ?>" class="list-group-item list-group-item-action bg-dark"><i class="fas fa-calendar-week"></i>Meeting</a>
    <a href="<?php echo base_url('mentee/contract_Aggrement') ?>" class="list-group-item list-group-item-action bg-dark"><i class="fas fa-file-signature"></i>Contract Aggrement</a>
    <a href="<?php echo base_url('mentee/schedule') ?>" class="list-group-item list-group-item-action bg-dark"><i class="fas fa-calendar-alt"></i>Schedule</a>
    <!-- <a href="<?php echo base_url('mentee/IDP') ?>" class="list-group-item list-group-item-action bg-dark"><i class="fas fa-book-reader"></i>IDP</a> -->
    <a href="#IDP" data-toggle="collapse" aria-expanded="false" role="button" class="dropdown-toggle list-group-item list-group-item-action bg-dark"><i class="fas fa-book-reader"></i>IDP</a>
    <ul class="collapse list-unstyled" id="IDP">
      <li><a href="<?php echo base_url('mentee/NonCareerGoals') ?>">Non Career Goals</a></li>
      <li><a href="<?php echo base_url('mentee/CareerGoals') ?>">Career Goals</a></li>
      <li><a href="<?php echo base_url('mentee/DevelopmentPlan') ?>">Development Plan</a></li>
    </ul>
    <a href="<?php echo base_url('mentee/group_page') ?>" class="list-group-item list-group-item-action bg-dark"><i class="fas fa-layer-group"></i>Group Dashboard</a>
    <a href="<?php echo base_url('mentee/form') ?>" class="list-group-item list-group-item-action bg-dark"><i class="fas fa-file-alt"></i>Form</a>
  </div>
  <div class="sidebar-footer ">
    <a href="#"><i class="fas fa-bell" data-toggle="tooltip" data-placement="top" title="Notification"></i></a>
    <a href="<?php echo base_url('mentee/message') ?>""><i class=" fas fa-envelope" data-toggle="tooltip" data-placement="top" title="Message"></i></a>
    <a href="<?php echo base_url('mentee/setting') ?>"><i class="fas fa-cog" data-toggle="tooltip" data-placement="top" title="Setting"></i></a>
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-toggle="tooltip" data-placement="top" title="Logout"><i class="fas fa-power-off"></i></a>
  </div>
  <div></div>
</div>
<!-- /#sidebar-wrapper -->
<script>
  $(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
  });
</script>