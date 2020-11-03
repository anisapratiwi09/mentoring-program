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
                    <center>
                        <h4>Career Goals</h4>
                    </center>
                    <div>
                        <!-- <p>Please Input your career goals</p> -->
                        <form action="POST" action="<?php echo base_url('crud_mentee/save_multicareer'); ?>">
                            <table class="table table-sm table-bordered">
                                <thead>
                                    <tr>
                                        <th>Position</th>
                                        <th>Unit/cabang</th>
                                        <th>period of time</th>
                                    </tr>
                                </thead>
                                <tbody class="formtambah">
                                    <tr>
                                        <td>
                                            <input type="text" name="posisi[]" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="unit[]" class="form-control">
                                        </td>
                                        <td>
                                            <select name="jangka_waktu[]" class="form-control">
                                                <option value="short">Short Terms Goals</option>
                                                <option value="middle">Middle Terms Goals</option>
                                                <option value="long">Long Terms Goals</option>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary btnaddform">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-primary" id="simpan">Save changes</button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- modals -->
    <?php $this->load->view('_modal/logout'); ?>
    <!-- /modals -->

    <script>
        $(document).ready(function(e) {
            $('.btnaddform').click(function(e) {
                e.preventDefault();

                $('.formtambah').append(`
                    <tr>
                        <td>
                            <input type="text" name="posisi[]" class="form-control">
                        </td>
                        <td>
                            <input type="text" name="unit[]" class="form-control">
                        </td>
                        <td>
                            <select name="jangka_waktu" class="form-control">
                                <option value="short">Short Terms Goals</option>
                                <option value="middle">Middle Terms Goals</option>
                                <option value="long">Long Terms Goals</option>
                            </select>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger btnhapusform">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                `);
            });
        });

        $(document).on('click', '.btnhapusform', function(e) {
            e.preventDefault();
            $(this).parents('tr').remove();
        });
    </script>
    <!-- Menu Toggle Script -->
    <?php $this->load->view('mentee/js-file/general'); ?>


</body>

</html>