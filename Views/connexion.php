<?php

require "../Controllers/connexion-controller.php";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Espace de connexion</title>
</head>

<body>

    <div class="mainConnexion">


        <form action="connexion.php" method="POST">

            <div class="align-middle test">
                <div>

                    <div class="row">
                        <div class="col text-center fw-bold">
                            <label for="mail" class="form-label">E-mail :</label>
                        </div>
                        <div class="col-9">
                            <input type="mail" id="mail" name="mail" class="form-control" placeholder="ex : pierre.dupont@gmail.com" value="<?= isset($_POST['mail']) ? htmlspecialchars($_POST['mail']) : "" ?>">
                            <p class="text-center fst-italic text-danger"><?= isset($errorMessage['mail']) ? $errorMessage['mail'] : "" ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-center fw-bold">
                            <label for="password" class="form-label">Mot de passe :</label>
                        </div>
                        <div class="col-9">
                            <input type="password" id="password" class="form-control" name="password">
                            <p class="fst-italic text-center text-danger"><?= isset($errorMessage['password']) ? $errorMessage['password'] : "" ?></p>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="connect" class="btn btn-success">Valider</button>
                    </div>

                </div>
            </div>
        </form>



    </div>

</body>

</html>