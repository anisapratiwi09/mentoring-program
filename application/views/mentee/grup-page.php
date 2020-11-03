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
                    <?php foreach ($dt_mentee as $dm) { ?>
                        <form action="<?= base_url('crud_mentee/save_posting') ?>" method="POST">
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="posting" placeholder="What's on your mind, <?php echo $dm->first_name ?> ?"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Post</button>
                        </form>
                    <?php } ?>
                </div>

                <?php foreach ($dt_posting as $dp) { ?>
                    <br>
                    <div style="padding:20px; border-radius:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.30);">
                        <div class="media p-3">
                            <!-- <img src="" alt="foto profile"> -->
                            <div class="media-body">
                                <h5><?php echo $dp->nama ?> <i style="font-size:12px;">(Posted on <?php echo $dp->created_at ?>)</i></h5>
                                <p style="font-size:15px; color:black;"><?php echo $dp->posting ?></p>
                                <hr>
                                <button type="button" style="font-size:12px; border:solid 1px; border-radius:10px; background:none;"> View Comment</button>
                                <?php for ($i = 0; $i < count($dt_komen); $i++) : ?>
                                    <?php if ($dt_komen[$i]->id_grupPost == $dp->id_grupPost) : ?>
                                        <div class="media p-3" style="margin-left:30px;">
                                            <div>
                                                <h6><?php echo $dt_komen[$i]->nama ?> <i style="font-size:11px;">(Posted on <?php echo $dt_komen[$i]->created_at ?>)</i></h6>
                                                <p style="font-size:13px; color:black;"><?php echo $dt_komen[$i]->comment ?></p>
                                            </div>
                                            <hr>
                                        </div>
                                    <?php endif; ?>
                                <?php endfor; ?>
                                <hr>
                                <div class="input-komen p-3 text-center">
                                    <form action="<?= base_url('crud_mentee/save_comment/') . $dp->id_grupPost ?>" method="POST">
                                        <img src="" alt="<?php echo $dm->first_name ?>" style="width:30px; height:30px;">
                                        <input type="text" style="width:80%; font-size:12px; height:30px;" name="comment" placeholder="Write a comment...">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
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