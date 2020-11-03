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
                            <li>Users</li>
                            <li class="active">Mentor</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="content mt-3">
            <div class="row" style="margin-bottom: 20px; margin-left: 0px;">
                <ul class="nav nav-pills">
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Add Mentor <i class="fa fa-plus-circle"></i></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#add">Add Single Mentor</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addFile">Add Via Excel</a>
                        </div>
                    </li>
                </ul>
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="" style="border-radius: 10px;">Add Mentor  <i class="fa fa-plus-circle"></i></button> -->
            </div>
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Mentor</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>NIPP</th>
                                            <th>Jabatan</th>
                                            <th>Email</th>
                                            <th>Group</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($data as $d) { ?>
                                            <tr>
                                                <form action="">
                                                    <!-- <td><?php echo $no++ ?></td> -->
                                                    <td><?php echo $d->first_name;
                                                        echo $d->last_name ?></td>
                                                    <td><?php echo $d->nipp ?></td>
                                                    <td><?php echo $d->jbtakhir ?></td>
                                                    <td><?php echo $d->email ?></td>
                                                    <td></td>
                                                    <!-- <td><?php echo $d->nama_group ?></td> -->
                                                    <td>
                                                        <center>
                                                            <a type="button" class="btn btn-primary" href="<?php echo base_url("DashboardAdmin/detailMentor/") . $d->id_mentor ?>" onClick=""><i class="fa fa-search-plus"></i></a>
                                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $d->id_mentor ?>"><i class="fa fa-edit"></i></button>
                                                            <a type="button" class="btn btn-danger" href="" onClick="return confirm('Apakah Anda Yakin?')"><i class="fa fa-trash-o"></i></a>
                                                        </center>
                                                    </td>

                                                </form>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- .content -->

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