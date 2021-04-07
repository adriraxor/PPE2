<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8 "name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style/bootstrap/css/style.css"/>
  <link rel="shortcut icon" type="image/x-icon" href="style/images/logov2.png" />

  <title>Buy Your Games / Accueil</title>
</head>
<body>
  <?php require_once 'header.php' ?>

  <div class="img-container">
    <div class="inner-container">
      <h1 class="BuyYourGames">Buy Your Games</h1>
      <h2 class="BuyYourGamesSubtitle">Achetez vos jeux moins chers</h2>
    </div>
  </div>
    <div class="full-screen-video-container">
  <div class="container" style="margin-top: 150px">

    <div class="row">

      <div class="col align-self-center">

        <div id="SlideShow" class="carousel slide" data-ride="carousel">


          <ol class="carousel-indicators indicateurs">
            <li data-target="#SlideShow" data-slide-to="0" class="active"></li>
            <li data-target="#SlideShow" data-slide-to="1"></li>
            <li data-target="#SlideShow" data-slide-to="2"></li>
            <li data-target="#SlideShow" data-slide-to="3"></li>
          </ol>


          <div class="carousel-inner">

            <div class="carousel-item active">
              <img class="d-block w-100" src="style/images/celeste.jpg" alt="Premier slide">
            </div>

            <div class="carousel-item">
              <img class="d-block w-100" src="style/images/rl.jpg" alt="Second slide">
            </div>

            <div class="carousel-item">
              <img class="d-block w-100" src="style/images/mw.jpg" alt="Troisieme slide">
            </div>

            <div class="carousel-item">
              <img class="d-block w-100" src="style/images/temtem.jpg" alt="Quatrieme slide">
            </div>

          </div>


          <a class="carousel-control-prev" href="#SlideShow" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
          </a>

          <a class="carousel-control-next" href="#SlideShow" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
          </a>

        </div>
      </div>

    </div>

  </div>



    <video poster="poster.jpg" autoplay loop muted>
      <source src="video.mp4" type="video/mp4" />
    </video>
  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="style/bootstrap/js/bootstrap.min.js"></script>
  <script src="style/bootstrap/js/main.js"></script>
</body>
</html> 