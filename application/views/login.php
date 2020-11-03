<body class="bodyUser">
    <div class="container-fluid px-1 px-md-5 px-xl-5 py-5 mx-auto">
        <div class="card0" style="background:#ffffff;">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card2 pb-5">
                        <div class="row"><a href="<?php echo base_url('Dashboard')?>"><img src="<?php echo base_url('assets/img/logo.png') ?>" class="logo"> </a></div>
                        <div class="row px-3 justify-content-center mt-4 mb-5"><a href="https://www.freepik.com/free-photos-vectors/website" target="_blank"><img src="<?php echo base_url('assets/img/login-an.png') ?>" class="image"></a></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="justify-content-center px-5 py-5">
                        <div class="card2 card" style="background-color:#ffffff; border: 0px;">
                            <div class="row mb-4 px-3">
                                <h4 class="mb-0 mr-4 mt-2 mx-auto"><b>Sign in </b></h4>
                            </div>
                            <div class="card-body">
                                <form  action="<?php echo base_url('Login/Login'); ?>" method=POST>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" name="username" class="form-control" placeholder="username">
                                        
                                    </div>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input type="password" name="password" class="form-control" placeholder="password">
                                    </div>
                                    <div class="row align-items-center px-3 mb-4" style="color: black;">
                                        <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> <a href="#" class="ml-auto mb-auto text-sm">Forgot Password?</a>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Login" class="btn btn-blue float-right">
                                    </div>

                                    <?php if ($this->session->flashdata('SuccessLogin') == 'Success') { 
                                        if ($this->session->userdata('role') == 'mentor') { ?>
                                            <script type="text/javascript">
                                                swal("Success", "login Success", "success")
                                                .then((value) => {window.location.href='<?php echo base_url('mentor') ?>'});
                                            </script>
                                        <?php } else if ($this->session->userdata('role') == 'mentee') {?>
                                            <script type="text/javascript">
                                                swal("Success", "login Success", "success")
                                                .then((value) => {window.location.href='<?php echo base_url('mentee') ?>'});
                                            </script>
                                        <?php } ?>

                                    <?php } else if ($this->session->flashdata('FailedLogin')){ ?>
                                        <script type="text/javascript">
                                            swal("Failed", "Failed to login", "error");
                                        </script>
                                    <?php } ?>
                                </form>
                            </div>
                            <div class="d-flex justify-content-center row mb-4 px-3">
                                 <small class="font-weight-bold">Don't have an account? <a class="text-danger " href="<?php echo base_url('Register')?>">Register</a></small> 
                            </div>
                            
                        </div>
                            
                    </div>
                        
                </div>
                    
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3"> <small class="mx-auto">Copyright &copy; 2020. All rights reserved created by Anisa Prtw and Putri A.W.</small></div>
        </div>  
    </div>
</body>