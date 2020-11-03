<body>
    <div class="container-fluid register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="<?php echo base_url("assets/img/register.png")?>" style="width: 300px; height: 300px;" alt=""/>
                <!-- <span class="input-group-text mx-auto" style="width: 128px; height: 128px; background: none; border: none; font-size:128px; transform: rotate(315deg)"><i class="fas fa-rocket"></i></span> -->
                <h3>Welcome to Mentoring Program</h3>
                <p>Join this program by fill the registration form</p>
                <a class="btn btn-light" href="<?php echo base_url('Login')?>" role="button">Login</a>
                <!-- <input type="submit" name="login" value="Login" onclick="<?php echo base_url('Login')?>" /><br/> -->
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="mentor-tab" data-toggle="tab" href="#mentor" role="tab" aria-controls="mentor" aria-selected="true">Mentor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="mentee-tab" data-toggle="tab" href="#mentee" role="tab" aria-controls="mentee" aria-selected="false">Mentee</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="mentor" role="tabpanel" aria-labelledby="mentor-tab">
                        <h3 class="register-heading">Apply as a Mentor</h3>
                        <div class="register-form justify-content-center">
                            <form>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Full Name *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nipp" placeholder="NIPP *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="jabatan" placeholder="Jabatan *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <div class="row col-md-12">
                                            <legend class="col-form-label pt-0"><b>Mentee yang Anda inginkan</b></legend>   
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" >
                                          <label class="form-check-label" for="gridRadios1">
                                            Male
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                          <label class="form-check-label" for="gridRadios2">
                                            Female
                                          </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row col-md-12">
                                            <legend class="col-form-label pt-0"><b>Apakah Anda bersedia untuk menyediakan waktu selama 1 -2 jam setiap Bulan selama maksimal 1 (satu) Tahun untuk melaksanakan Program Mentoring?</b></legend>   
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" value="" id="defaultCheck1">
                                          <label class="form-check-label" for="defaultCheck1">
                                            Yes
                                          </label>
                                        </div> 
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" value="" id="defaultCheck1">
                                          <label class="form-check-label" for="defaultCheck1">
                                            No
                                          </label>
                                        </div> 
                                    </div>
                                    <div class="form-group">
                                        <div class="row col-md-12">
                                            <legend class="col-form-label pt-0"><b>Apakah Anda pernah menjadi Mentor sebelumnya (Formal atau Informal)? Jelaskan Pengalaman Anda!</b></legend>   
                                        </div>
                                        <textarea name="pengalaman">
                                            
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="row col-md-12">
                                            <legend class="col-form-label pt-0"><b>Tuliskan kekuatan dan kelemahan Anda!</b></legend>   
                                        </div>
                                        <textarea name="pengalaman">
                                            
                                        </textarea>
                                    </div>
                                </div>
                                <input type="submit" class="btnRegister"  value="Register" style="margin-right: 15px;" />
                            </form>
                            <a href="<?php echo base_url('Dashboard')?>"><input type="submit" class="btnRegister"  value="Cancel" style="margin-right : 30px;" /></a>
                            
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="mentee" role="tabpanel" aria-labelledby="mentee-tab">
                        <h3  class="register-heading">Apply as a Mentee</h3>
                        <div class="register-form justify-content-center">
                            <form>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Full Name *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nipp" placeholder="NIPP *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="jabatan" placeholder="Jabatan *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <div class="row col-md-12">
                                            <legend class="col-form-label pt-0"><b>Tujuan mengikuti mentoring</b></legend>   
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1" >
                                          <label class="form-check-label" for="gridRadios1">
                                            Promosi Jabatan
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios2" value="option2">
                                          <label class="form-check-label" for="gridRadios2">
                                            Rotasi Antar Unit Kerja
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1" >
                                          <label class="form-check-label" for="gridRadios1">
                                            Pengembangan Diri
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios2" value="option2">
                                          <label class="form-check-label" for="gridRadios2">
                                            Pendalaman Materi
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios2" value="option2">
                                          <label class="form-check-label" for="gridRadios2">
                                            Meningkatkan Keahlian Teknis
                                          </label>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="row col-md-12">
                                            <legend class="col-form-label pt-0"><b>Mentor yang Anda inginkan</b></legend>   
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" >
                                          <label class="form-check-label" for="gridRadios1">
                                            Male
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                          <label class="form-check-label" for="gridRadios2">
                                            Female
                                          </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row col-md-12">
                                            <legend class="col-form-label pt-0"><b>Apakah Anda bersedia untuk menyediakan waktu selama 1 -2 jam setiap Bulan selama maksimal 1 (satu) Tahun untuk melaksanakan Program Mentoring?</b></legend>   
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" value="" id="defaultCheck1">
                                          <label class="form-check-label" for="defaultCheck1">
                                            Yes
                                          </label>
                                        </div> 
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" value="" id="defaultCheck1">
                                          <label class="form-check-label" for="defaultCheck1">
                                            No
                                          </label>
                                        </div> 
                                    </div>
                                    <div class="form-group">
                                        <div class="row col-md-12">
                                            <legend class="col-form-label pt-0"><b>Apakah Anda pernah menjadi Mentee sebelumnya (Formal atau Informal)? Jelaskan Pengalaman Anda!</b></legend>   
                                        </div>
                                        <textarea name="pengalaman">
                                            
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="row col-md-12">
                                            <legend class="col-form-label pt-0"><b>Tuliskan kekuatan dan kelemahan Anda!</b></legend>   
                                        </div>
                                        <textarea name="pengalaman">
                                            
                                        </textarea>
                                    </div>
                                </div>
                                <input type="submit" class="btnRegister"  value="Register" style="margin-right: 15px;" />
                            </form>
                            <a href="<?php echo base_url('Dashboard')?>"><input type="submit" class="btnRegister"  value="Cancel" style="margin-right : 30px;" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>