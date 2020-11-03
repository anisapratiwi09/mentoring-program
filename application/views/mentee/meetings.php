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
                <div style="padding:20px; border-radius:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.30);">
                    <table class="table border">
                        <thead class="bg-dark" style="color:white;">
                            <tr>
                                <td>No</td>
                                <td>Agenda Name</td>
                                <td>Description</td>
                                <td>Date</td>
                                <td>Time</td>
                                <td class="text-center">Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($dt_meetings as $meeting) { ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $meeting->nama ?></td>
                                    <td><?php echo $meeting->deskripsi ?></td>
                                    <td><?php echo $meeting->tanggal ?></td>
                                    <td><?php echo $meeting->waktu ?></td>
                                    <?php if ($meeting->status == "Scheduled") : ?>
                                        <td class="text-center bg-warning">
                                            <div class="status">
                                                <p style="font-weight:bold; font-size:15px;"><b>---<?php echo $meeting->status ?>---</b></p>
                                            </div>
                                        </td>
                                    <?php elseif (($meeting->status == "Done")) : ?>
                                        <td class="text-center bg-success">
                                            <div class="status">
                                                <p style="font-weight:bold; font-size:15px;"><b>---<?php echo $meeting->status ?>---</b></p>
                                            </div>
                                        </td>
                                    <?php else : ?>
                                        <td class="text-center bg-danger">
                                            <div class="status">
                                                <p style="font-weight:bold; font-size:15px;"><b>---<?php echo $meeting->status ?>---</b></p>
                                            </div>
                                        </td>
                                    <?php endif; ?>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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