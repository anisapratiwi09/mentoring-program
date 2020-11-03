<header id="header" class="header">

    <div class="header-menu">

        <div class="col-sm-5">
            <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>

        </div>
        <div class="col-sm-6" style="text-align: right; padding-top: 10px; padding-right: 0px;">
            <span><?php echo $this->session->userdata('nama'); ?></span>
        </div>
        <div class="col-sm-1" style="padding-right: 25px; margin-left: 0px; text-align: right;">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="<?php if ($this->session->userdata('ava') != NULL) {
                                                                        echo base_url('upload/image/') . $this->session->userdata('ava');
                                                                    } else {
                                                                        echo base_url('assets/img/Admin/avatar.png');
                                                                    } ?>" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="<?php echo base_url('DashboardAdmin/profile/') . $this->session->userdata('id_admin'); ?>"><i class="fa fa-user"></i> My Profile</a>

                    <a class="nav-link" href="<?php echo base_url('Login_Admin/logout') ?>"><i class="fa fa-power-off"></i> Logout</a>
                </div>
            </div>
        </div>
    </div>

</header>