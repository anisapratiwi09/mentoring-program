<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href=""><img src="<?php echo base_url('assets/img/Admin/navbrand.png') ?>" alt="Pelindo I"></a>
            <a class="navbar-brand hidden" href=""><img src="<?php echo base_url('assets/img/favicon.png') ?>" alt="P"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="<?php echo base_url('Admin') ?>"> <i class="menu-icon fa fa-home"></i>Home </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Users</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-user"></i><a href="<?php echo base_url('Admin/mentor') ?>">Mentor</a></li>
                        <li><i class="menu-icon fa fa-user"></i><a href="<?php echo base_url('Admin/mentee') ?>">Mentee</a></li>
                        <li><i class="menu-icon fa fa-user"></i><a href="<?php echo base_url('Admin/sdm') ?>">SDM</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url('Admin/group') ?>"> <i class="menu-icon fa fa-group"></i>Groups </a>
                </li>
                <li>
                    <a href="<?php echo base_url('Admin/post') ?>"> <i class="menu-icon  fa fa-pencil-square-o"></i>Post </a>
                </li>
                <li>
                    <a href="<?php echo base_url('Admin/form') ?>"> <i class="menu-icon fa fa-th"></i>Form </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>