<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $judul ?></title>

    <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.png')?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
    <!--Our own stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dashboardbaru.css')?>">
  </head>
  <body>
    <div class="container-fluid" id="header-background" style="background-image: url('assets/img/dashboard item/header edit.png');">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
          <img src="<?php echo base_url('assets/img/logo.png') ?>" alt="Pelindo" style="width:200px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-4" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#program">Program</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#mentor">Mentor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#mentee">Mentee</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About us</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- closed navbar -->
      <div class="header-text-style">
        <span>Welcome to Menpro</span>
        <p><b>Mentoring application program for you !!!</b></p>
        <a class="btn btn-login" role="button" href="<?php echo base_url('Login') ?>">Login</a>
      </div>
    </div>
    <!-- section 2 -->
    <div class="container-fluid" style="height: auto;">
      <h2 class="text-center">--- Program Mentoring ---</h2>
      <div class="card-deck mx-5 text-center my-5">
        <div class="card">
          <img class="card-img-top mx-auto" src="<?php echo base_url('assets/img/vector/pendaftaran.png')?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Registration</h5>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top mx-auto" src="<?php echo base_url('assets/img/vector/induksi.png')?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Initial Meeting</h5>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top mx-auto" src="<?php echo base_url('assets/img/vector/52412-O7D4GK.png')?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Match and Contract Aggrement</h5>
          </div>
        </div>
      </div>

      <div class="card-deck mx-5 text-center my-5">
        <div class="card">
          <img class="card-img-top mx-auto" src="<?php echo base_url('assets/img/vector/mentor mentee.png')?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Mentoring process</h5>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top mx-auto" src="<?php echo base_url('assets/img/vector/evaluasi dan penilaian.png')?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Measurement and evaluation</h5>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top mx-auto" src="<?php echo base_url('assets/img/vector/done.png')?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Mentoring done</h5>
          </div>
        </div>
      </div>
      
    </div>


    <!-- section 3 -->
    <div class="container-fluid" id="mentor" style="background-image: url('assets/img/dashboard item/mentor.png');">
      <div class="mentor-text">
        <h2>--- Mentor</h2>
        <p>Mentor berkomitmen dalam periode tertentu menginvestasikan waktu untuk mengenal Mentee, baik secara kemampuan, minat, dan ambisi mereka. Mentor harus memiliki pengetahuan yang sangat baik di bidangnya dan kebijaksanaan yang diperoleh melalui pengalaman bisnis mereka sendiri</p>
      </div>
      

    </div>
    <!-- section 4 -->
    <div class="container-fluid" style="height: 480px;" id="mentee">
      <img src="<?php echo base_url('assets/img/dashboard item/mentee.png')?>" alt="" class="element-image">
      <div class="mentee-text">
        <h2>Mentee ---</h2>
        <p>Mentee harus dapat membuat komitmen untuk mempersiapkan diri menghadiri pertemuan dan mengambil aksi dari hasil pertemuan tersebut. Mentee juga perlu memiliki kemampuan untuk menilai dan melihat dengan jujur ​​kekuatan dan kelemahan mereka sebagai bagian dari diskusi dengan mentor mereka.</p>
      </div>
    </div>
    <!-- section 5 -->
    <div class="container-fluid" id="about" style=" background-image: url('assets/img/dashboard item/tampilan bawah.png');">
    </div>
  </body>

</html>
