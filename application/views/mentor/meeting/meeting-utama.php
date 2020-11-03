<body>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <?php $this->load->view('mentor/_partials/sidebar'); ?>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg">
                <button class="btn btn-primary bg-dark" id="menu-toggle"><i class="fas fa-bars"></i></button>
            </nav>

            <div class="container-fluid">
                <div style="padding:20px; border-radius:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.30);">
                    <form method="POST" action="<?php echo base_url('crud_mentor/createMeeting') ?>">
                        <div class="form-group row">
                            <label for="chooseMentee" class="col-sm-3 col-form-label">Choose your mentee</label>
                            <label for="agenda" class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-5">
                                <select class="form-control" name="id_mentee">
                                    <option>--Select--</option>
                                    <?php $no = 1;
                                    foreach ($dataMentees as $dm) { ?>
                                        <option value="<?php echo $dm->id_mentee ?>"><?php echo $dm->first_name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="agenda" class="col-sm-3 col-form-label">Agenda Name</label>
                            <label for="agenda" class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-5">
                                <input type="text" name="agenda" style="width: 60%;">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="agenda" class="col-sm-3 col-form-label">Description</label>
                            <label for="agenda" class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-5">
                                <input type="text" name="deskripsi" style="width: 60%;">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-sm-3 col-form-label">Date</label>
                            <label for="agenda" class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-5">
                                <input type="date" name="date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="time" class="col-sm-3 col-form-label">Time</label>
                            <label for="agenda" class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-5">
                                <input type="time" name="time">
                            </div>
                        </div>

                        <div class="modal-footer ">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Add Meeting</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div style="padding:20px; border-radius:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.30);">
                    <table class="table border">
                        <thead class="bg-dark" style="color:white;">
                            <tr>
                                <td>No</td>
                                <td>Mentees Name</td>
                                <td>Agenda Name</td>
                                <td>Description</td>
                                <td>Date</td>
                                <td>Time</td>
                                <td class="text-center">Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            $x = 0;
                            foreach ($dt_meetings as $meeting) { ?>
                                <?php if ($meeting->status == "Scheduled") : ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $namaMentee[$x++][0]->first_name ?></td>
                                        <td><?php echo $meeting->nama ?></td>
                                        <td><?php echo $meeting->deskripsi ?></td>
                                        <td><?php echo $meeting->tanggal ?></td>
                                        <td><?php echo $meeting->waktu ?></td>
                                        <td class="text-center" style="background:#ffd699;">
                                            <div class="status">
                                                <p style="color:black; font-weight:bold; font-size:1vw;"><b>--<?php echo $meeting->status ?>--</b></p>
                                            </div>
                                            <div class=""><a href="<?php echo base_url() . 'crud_mentor/DoneMeeting/' . $meeting->id_meeting; ?>" style="padding: 5px; border-radius: 5px; font-size: 12px;" class="btn-success btn-xs">Done </a></div>
                                            <br>
                                            <div class=""><a href="<?php echo base_url('crud_mentor/CancelledMeeting/') . $meeting->id_meeting; ?>" style="padding: 5px; border-radius: 5px; font-size: 12px;" class="btn-danger btn-xs">Cancelled </a></div>
                                        </td>
                                    </tr>
                                <?php elseif (($meeting->status == "Done")) : ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $namaMentee[$x++][0]->first_name ?></td>
                                        <td><?php echo $meeting->nama ?></td>
                                        <td><?php echo $meeting->deskripsi ?></td>
                                        <td><?php echo $meeting->tanggal ?></td>
                                        <td><?php echo $meeting->waktu ?></td>
                                        <td class="text-center" style="background:#98e6ab;">
                                            <div class="status">
                                                <p style="color:black; font-weight:bold; font-size:1vw;"><b>--Done--</b></p>
                                            </div>
                                        </td>
                                    </tr>
                                <?php else : ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $namaMentee[$x++][0]->first_name ?></td>
                                        <td><?php echo $meeting->nama ?></td>
                                        <td><?php echo $meeting->deskripsi ?></td>
                                        <td><?php echo $meeting->tanggal ?></td>
                                        <td><?php echo $meeting->waktu ?></td>
                                        <td class="text-center" style="background:#ff8080;">
                                            <div class="status">
                                                <p style="color:black; font-weight:bold; font-size:1vw;"><b>-- Cancelled--</b></p>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endif; ?>
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