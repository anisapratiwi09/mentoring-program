<?php foreach ($dt_mentee as $profile) { ?>
    <p class="title-section">First Name</p>
    <p class="title-child"><?php echo $profile->first_name ?></p>
    <hr>
    <p class="title-section">Last Name</p>
    <p class="title-child"><?php echo $profile->last_name ?></p>
    <hr>
    <p class="title-section">Academic Degree</p>
    <p class="title-child"><?php echo $profile->gelar ?></p>
    <hr>
    <p class="title-section">NIK</p>
    <p class="title-child"><?php echo $profile->nik ?></p>
    <hr>
    <p class="title-section">Place and Date of birth</p>
    <p class="title-child"><?php echo $profile->tempat ?>, <?php echo $profile->tgl_lahir ?></p>
    <hr>
    <p class="title-section">Gender</p>
    <p class="title-child"><?php echo $profile->jkelamin ?></p>
    <hr>
    <p class="title-section">Religion</p>
    <p class="title-child"><?php echo $profile->agama ?></p>
    <hr>
    <p class="title-section">Last Position</p>
    <p class="title-child"><?php echo $profile->jbtakhir ?></p>
    <hr>
    <p class="title-section">Home address</p>
    <p class="title-child"><?php echo $profile->alamat ?></p>
    <hr>
    <p class="title-section">Mobile Phone Number</p>
    <p class="title-child"><?php echo $profile->nohp ?></p>
    <hr>
    <p class="title-section">E-mail</p>
    <p class="title-child"><?php echo $profile->email ?></p>
    <hr>
    <p class="title-section">Social Media Address</p>
    <p class="title-child"><?php echo $profile->sosmed ?></p>
<?php } ?>