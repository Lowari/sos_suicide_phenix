<?php

require "../Controllers/qui-sommes-nous-controller.php";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="img/phenix.jpg" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>SOS Suicide Phénix - Qui sommes Nous ?</title>
</head>

<body>

    <header>
        <div class="container-fluid" id="mainHeader">

            <nav class="navbar navbar-expand-lg navbar-light navii">
                <a class="navbar-brand" href="#"><img id="phenix" src="../assets/img/phenix1.jpeg" alt="Phénix"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex-lg justify-content-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav text-center" id="sizeNav">
                        <a class="nav-link" href="../index.php">Accueil</a>
                        <a class="nav-link" href="actualite.php">Actualités</a>
                        <a class="nav-link" href="">Qui sommes-nous ?</a>
                        <a class="nav-link" href="connexion.php">Connexion</a>
            </nav>

            <div class="container mt-3">
                <div class="row text-center">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                        <img src="../assets/img/logo.jpg" alt="Logo SOS Suicide Phénix" title="SOS suicide Phénix">
                        <p class="display-4">Le Havre</p>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 align-self-center fw-bold info">
                        <p>A votre écoute de 13h à 23h <br><i class="fas fa-phone-alt green"></i><span class="green"> 01
                                40 44 46 45</span><br><span class="font-italic">confidentiel et anonyme</span></p>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 align-self-center fw-bold info">
                        <p>Idées suicidaires, en mal-être ?<br><i class="far fa-envelope green"></i><span
                                class="green"><a href="mailto:sos-suicide-lehavre@orange.fr" class="noDecoration link"
                                    id="test"> Nous
                                    écrire</a> </span><br>Nos bénévoles vous
                            répondent</p>
                    </div>
                </div>
    </header>

    <div class="container mt-2">

        <h1 class="display-5">Qui <span class="title-decoration">sommes nous ?</span></h1>

        <p class="mt-4">«SOS Suicide Phénix est une passerelle entre les personnes en souffrance et l’offre de soin en
            santé. Nos
            associations ont pour objectif de restaurer un lien social distendu. Ce sont des espaces de paroles pour
            rompre l’isolement et ne pas rester seul face à sa souffrance morale»</p>

        <p>Mario Galena, Président de la Fédération, 2012</p>

        <p>La Fédération SOS Suicide Phénix France a pour but la PREVENTION du suicide et la PROMOTION des actions de
            prévention en complémentarité avec les acteurs du champ médico-social.

            Elle regroupe dans ses six associations adhérentes (Ile de France-Paris (1978), Rhône-Alpes-Lyon (1983),
            Aquitaine-Bordeaux (1984), Auvergne-Clermont-Ferrand (1987), Haute-Normandie-Le Havre (1991), PACA- Nice
            (1994) une équipe d’une centaine d’écoutants formées et expérimentées.

            Les associations SOS Suicide Phénix ont pour mission de PREVENIR le suicide en restaurant le lien social par
            une ECOUTE de qualité et un ACCUEIL inconditionnel dans le respect de la confidentialité et de l’anonymat,
            tel que défini dans la charte de la fédération établie avec les associations adhérentes. L’écoute et
            l’accueil s’adressent à « toute personne en détresse qui pense mettre fin à ses jours ou qui soit concerné
            par la problématique du suicide, dans sa famille ou dans son entourage. », Extrait de l’article 1 de la
            Charte.</p>

        <h2 class="display-6">Le suicide en France parlons-en !</h2>

        <p class="mt-4">10 371 personnes sont décédées par suicide en 2010, soit 27 suicides par jour. Plus de 700
            personnes tentent
            de se suicider tous les jours, soit 250 000 personnes chaque année.1 décès sur 50 est un suicide.

            Le suicide est la 8ème cause de décès après les tumeurs, les maladies cardiovasculaires, les accidents,
            Alzheimer, l’infarctus, des causes inconnues ou non précisées, la Pneumonie-Grippe.
            Bien que le taux de suicide baisse très légèrement depuis 20 ans, la France reste un des pays européens où
            le taux de suicide est le plus élevé : 16,4, soit plus de 2 fois plus qu’en Italie ou qu’en Espagne. La
            France est le pays le plus touché, avec la Finlande, par le décès par suicide des hommes de plus de 65 ans.
        </p>

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