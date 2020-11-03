<!-- <!doctype html>
<html class="no-js" lang="en">
 -->

<body>
    <!-- Left Panel -->
    <?php $this->load->view('admin/_partials/sidebar'); ?>
    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Navbar-->
        <?php $this->load->view('admin/_partials/navbar'); ?>
        <!-- Navbar-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Admin</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li>Admin</li>
                            <li class="active">Home</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="content mt-3">
            <div class="col-xl-6 col-lg-6" style="min-height: 150px;">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-users text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text"><a href="<?php echo base_url('DashboardAdmin/group') ?>">Group</a></div>
                                <div class="stat-digit"><?php echo $data[0] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-6 col-lg-6" style="min-height: 150px;">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text"><a href="<?php echo base_url('DashboardAdmin/mentor') ?>">Mentor</a></div>
                                <div class="stat-digit"><?php echo $data[1] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-6 col-lg-6" style="min-height: 150px;">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text"><a href="<?php echo base_url('DashboardAdmin/mentee') ?>">Mentee</a></div>
                                <div class="stat-digit"><?php echo $data[2] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6" style="min-height: 150px;">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text"><a href="<?php echo base_url('DashboardAdmin/sdm') ?>">SDM</a></div>
                                <div class="stat-digit"><?php echo $data[3] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6" style="min-height: 150px;">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-bullhorn text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text"><a href="<?php echo base_url('DashboardAdmin/post') ?>">Post</a></div>
                                <div class="stat-digit"><?php echo $data[4] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6" style="min-height: 150px;">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-file-text-o text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text"><a href="<?php echo base_url('DashboardAdmin/form') ?>">Form</a></div>
                                <div class="stat-digit"><?php echo $data[5] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .content -->

        <!-- footer -->
        <?php $this->load->view('admin/_partials/footer'); ?>
        <!-- footer -->

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="<?php echo base_url('assets/vendors/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/popper.js/dist/umd/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/main.js') ?>"></script>
</body>

</html>