<!-- Modal -->
<div class="modal fade" id="personal-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Personal Information Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php foreach ($dt_mentee as $profile) { ?>
                    <form method="POST" action="">
                        <div class="form-row">
                            <div class="col">
                                <label for="first_name">First name</label>
                                <input type="text" class="form-control" name="first_name" placeholder="First name" value="<?php echo $profile->first_name ?>">
                            </div>
                            <div class="col">
                                <label for="last_name">Last name</label>
                                <input type="text" class="form-control" name="last_name" placeholder="Last name" value="<?php echo $profile->last_name ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Academic Degree</label>
                            <input type="text" class="form-control" name="gelar" placeholder="Academic Degree" value="<?php echo $profile->gelar ?>">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">NIK</label>
                            <input type="text" class="form-control" name="nik" placeholder="NIK" value="<?php echo $profile->nik ?>">
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="first_name">Place of birth</label>
                                <input type="text" class="form-control" name="tempat" placeholder="Place of birth" value="<?php echo $profile->tempat ?>">
                            </div>
                            <div class="col">
                                <label for="last_name">Date of birth</label>
                                <input type="date" class="form-control" name="tgl_lahir" placeholder="Date of birth" value="<?php echo $profile->tgl_lahir ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jkelamin" id="jkelamin" value="<?php echo $profile->jkelamin ?>" <?php if ($profile->jkelamin == "man") echo 'checked'; ?>>
                                        <label class="form-check-label">
                                            Man
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jkelamin" id="jkelamin" value="<?php echo $profile->jkelamin ?>" <?php if ($profile->jkelamin == "female") echo 'checked'; ?>>
                                        <label class="form-check-label">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Religion</label>
                            <select class="custom-select" name="agama">
                                <option>Open this select menu</option>
                                <option <?php if ($profile->agama == "islam") echo 'selected'; ?> value="<?php echo $profile->agama ?>">Islam</option>
                                <option <?php if ($profile->agama == "protestan") echo 'selected'; ?> value="<?php echo $profile->agama ?>">Protestan</option>
                                <option <?php if ($profile->agama == "katolik") echo 'selected'; ?> value="<?php echo $profile->agama ?>">Katolik</option>
                                <option <?php if ($profile->agama == "hindu") echo 'selected'; ?> value="<?php echo $profile->agama ?>">Hindu</option>
                                <option <?php if ($profile->agama == "buddha") echo 'selected'; ?> value="<?php echo $profile->agama ?>">Buddha</option>
                                <option <?php if ($profile->agama == "konghucu") echo 'selected'; ?> value="<?php echo $profile->agama ?>">Konghucu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Last Position</label>
                            <input type="text" class="form-control" name="jbtakhir" placeholder="Last Position" value="<?php echo $profile->jbtakhir ?>">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Home address</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Home address" value="<?php echo $profile->alamat ?>">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Mobile Phone Number</label>
                            <input type="text" class="form-control" name="nohp" placeholder="Mobile Phone Number" value="<?php echo $profile->nohp ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $profile->email ?>">
                        </div>
                        <div class="form-group">
                            <label for="sosmed">Social Media Address</label>
                            <input type="text" class="form-control" name="sosmed" placeholder="Social Media Address" value="<?php echo $profile->sosmed ?>">
                        </div>

                    </form>
                <?php } ?>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>