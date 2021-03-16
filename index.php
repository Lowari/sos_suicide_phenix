<?php

require "Controllers/index-controller.php";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="icon" type="image/png" href="assets/img/phenix.jpg" />
  <link rel="stylesheet" href="assets/css/style.css">
  <title>SOS Suicide Phénix - En parler, c'est déjà revivre !</title>
</head>

<body>
  <header>
    <div class="container-fluid" id="mainHeader">

      <nav class="navbar navbar-expand-lg navbar-light navii">
        <a class="navbar-brand" href="#"><img id="phenix" src="assets/img/phenix1.jpeg" alt="Phénix"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex-lg justify-content-center" id="navbarNavAltMarkup">
          <div class="navbar-nav text-center" id="sizeNav">
            <a class="nav-link" href="#">Accueil</a>
            <a class="nav-link" href="Views/actualite.php">Actualités</a>
            <a class="nav-link" href="Views/qui-sommes-nous.php">Qui sommes-nous ?</a>
            <a class="nav-link" href="Views/connexion.php">Connexion</a>
      </nav>


      <div class="container mt-3">
        <div class="row text-center">

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
            <img src="assets/img/logo.jpg" alt="Logo SOS Suicide Phénix" title="SOS suicide Phénix">
            <p class="display-4">Le Havre</p>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-4 align-self-center font-weight-bold info">
            <p>A votre écoute de 13h à 23h <br><i class="fas fa-phone-alt green"></i><span class="green"> 01 40 44 46
                45</span><br><span class="font-italic">confidentiel et anonyme</span></p>

          </div>

          <div class="col-sm-12 col-md-6 col-lg-4 align-self-center font-weight-bolder info">
            <p>Idées suicidaires, en mal-être ?<br><i class="far fa-envelope green"></i><span class="green"><a
                  href="mailto:sos-suicide-lehavre@orange.fr" class="noDecoration link" id="test"> Nous
                  écrire</a> </span><br>Nos bénévoles vous
              répondent</p>
          </div>
        </div>



        <div class="row">
          <div class="col-6">
          </div>

          <div id="carouselExampleFade" class="carousel slide carousel-fade col-6" data-ride="carousel">

            <div class="carousel-inner">

              <div class="carousel-item active">
                <img src="assets/img/photoslide.png" class="d-block col" alt="image 1">
              </div>
              <div class="carousel-item">
                <img src="assets/img/photoslide1.png" class="d-block col" alt="image 2">
              </div>
              <div class="carousel-item">
                <img src="assets/img/photoslide2.png" class="d-block col" alt="image 3">
              </div>
              <div class="carousel-item">
                <img src="assets/img/photoslide3.png" class="d-block col" alt="image 3">
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </header>

  <div class="container">

    <h1 class="text-center">Bienvenue</h1>


  </div>
  <footer class="text-center">
    <p>Mention légales <br /><i class="far fa-copyright"></i> SOS SUICIDE Phenix</p>
  </footer>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous"></script>
  <script src="assets/js/script.js"></script>

</body>

</html>