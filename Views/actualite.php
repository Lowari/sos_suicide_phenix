<?php

require "../Controllers/actualite-controller.php";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="img/phenix.jpg" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>SOS Suicide Phénix - Actualités</title>

</head>

<body>

    <header>
        <div class="container-fluid" id="mainHeader">

            <nav class="navbar navbar-expand-lg navbar-light navii">
                <a class="navbar-brand" href="#"><img id="phenix" src="../assets/img/phenix1.jpeg" alt="Phénix"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex-lg justify-content-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav text-center" id="sizeNav">
                        <a class="nav-link" href="../index.php">Accueil</a>
                        <a class="nav-link" href="">Actualités</a>
                        <a class="nav-link" href="qui-sommes-nous.php">Qui sommes-nous ?</a>
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
                        <p>Idées suicidaires, en mal-être ?<br><i class="far fa-envelope green"></i><span class="green"><a href="mailto:sos-suicide-lehavre@orange.fr" class="noDecoration link" id="test"> Nous
                                    écrire</a> </span><br>Nos bénévoles vous
                            répondent</p>
                    </div>
                </div>
    </header>

    <div class="container mt-2">

        <h1 class="display-5">Notre <span class="title-decoration">actualité</span></h1>

        <div>
            <?php if (isset($_POST['modify'])) { ?>
                <form action="actualite.php" method="POST">

                    <div>
                        <label for="title" class="form-label fw-bold">Titre :</label>
                        <input type="text" id="title" name="title" class="form-control">
                        <p class="text-center text-danger fst-italic"><?= isset($errorMessage['title']) ? $errorMessage['title'] : "" ?></p>
                    </div>

                    <div>
                        <textarea class="col-12" name="description" id="description" cols="30" rows="10" placeholder="Ecrire votre texte ici ..."></textarea>
                        <p class="text-center fst-italic text-danger"><?= isset($errorMessage['description']) ? $errorMessage['description'] : "" ?></p>
                    </div>

                    <label for="picture" class="form-label fw-bold">Image</label>
                    <input type="file" id="picture" name="picture" class="form-control">


                    <div class="text-center m-4">
                        <button class="btn btn-success" type="submit" name="submit">Envoyer</button>
                    </div>

                </form>
            <?php } ?>

            <?php if (isset($id)) { ?>
                <h1 class="text-center"><?= $showThisActu['title'] ?></h1>
                <p class="text-center"><?= $showThisActu['description'] ?></p>
                <p class="text-center"><?= $showThisActu['picture_name'] ?></p>

                <?php if ($_SESSION['user']['id_role'] == 1 && !empty($id)) { ?>
                    <div class="text-center">
                        <a class="btn btn-success" href="modification-actualite.php?id=<?= $showThisActu['id'] ?>">Modifier</a>
                    </div>
            <?php }
            } ?>
        </div>

        <?php if ($_SESSION['user']['id_role'] == 1 && !isset($_POST['modify'])) { ?>
            <form action="actualite.php" method="POST">

                <div>
                    <label for="title" class="form-label fw-bold">Titre :</label>
                    <input type="text" id="title" name="title" class="form-control">
                    <p class="text-center text-danger fst-italic"><?= isset($errorMessage['title']) ? $errorMessage['title'] : "" ?></p>
                </div>

                <div>
                    <textarea class="col-12" name="description" id="description" cols="30" rows="10" placeholder="Ecrire votre texte ici ..."></textarea>
                    <p class="text-center fst-italic text-danger"><?= isset($errorMessage['description']) ? $errorMessage['description'] : "" ?></p>
                </div>

                <label for="picture" class="form-label fw-bold">Image</label>
                <input type="file" id="picture" name="picture" class="form-control">


                <div class="text-center m-4">
                    <button class="btn btn-success" type="submit" name="submit">Envoyer</button>
                </div>

            </form>
        <?php } ?>

        <ul>
            <?php foreach ($readActualite as $key => $value) { ?>
                <li><a href="actualite.php?id=<?= $value['id'] ?>"><?= $value['title'] ?></a></li>
            <?php } ?>
        </ul>
    </div>


    <footer class="text-center">
        <p>Mention légales <br /><i class="far fa-copyright"></i> SOS SUICIDE Phenix</p>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '#description'
        });
    </script>

    <script src="assets/js/script.js"></script>

</body>

</html>