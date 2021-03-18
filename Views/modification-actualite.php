<?php

require "../Controllers/modification-actualite-controller.php";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Modification d'actualiter</title>
</head>

<body>

    <div class="container">

        <h1 class="text-center display-5">Modification d'actualité</h1>

        <?php if ($_SESSION['user']['id_role'] == 1) { ?>
            <form action="modification-actualite.php?id=<?= $id ?>" method="POST">

                <div>
                    <label for="title" class="form-label fw-bold">Titre :</label>
                    <input type="text" id="title" name="title" class="form-control" value="<?= $showThisActu['title'] ?>">
                    <p class="text-center text-danger fst-italic"><?= isset($errorMessage['title']) ? $errorMessage['title'] : "" ?></p>
                </div>

                <div>
                    <textarea class="col-12" name="description" id="description" cols="30" rows="10" placeholder="Ecrire votre texte ici ..."  ><?= $showThisActu['description'] ?></textarea>
                    <p class="text-center fst-italic text-danger"><?= isset($errorMessage['description']) ? $errorMessage['description'] : "" ?></p>
                </div>

                <label for="picture" class="form-label fw-bold">Image</label>
                <input type="file" id="picture" name="picture" class="form-control">


                <div class="text-center m-4">
                    <a class="btn btn-secondary" href="actualite.php?id=<?= $showThisActu['id'] ?>">Retour</a>
                    <button class="btn btn-success" type="submit" name="submit" value="<?= $id ?>">Modifier</button>
                </div>

            </form>
        <?php } ?>

    </div>

</body>

</html>