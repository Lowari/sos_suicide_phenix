<?php

session_start();

require "../Models/Database.php";
require "../Models/Actualite.php";

$Actualite = new Actualite();

$id = isset($_GET['id']) ? $_GET['id'] : "";

$errorMessage = [];
$successMessage = [];

$regexText = "#^[\\r\\n0-9a-zé'èçàâêîôûäëïöüù:_*(), -]{1,1000}$#i";

if (isset($_POST['offline'])) {
    $_SESSION = [];
    session_destroy();
    header("Location:connexion.php");
}

if (isset($_POST['submit'])) {
    if (isset($_POST['title'])) {
        $title = $_POST['title'];
        if (!preg_match($regexText, $title)) {
            $errorMessage['title'] = "Le titre est incorrect";
        }
        if (empty($title)) {
            $errorMessage['title'] = "Veuillez saisir un titre";
        }
        if (!empty($title) && preg_match($regexText, $title)) {
            $successMessage['title'] = htmlspecialchars($title);
        }
    }
    if (isset($_POST['description'])) {
        $description = $_POST['description'];
        if (empty($description)) {
            $errorMessage['description'] = "Saisir une description";
        }
        if (!empty($description)) {
            $successMessage['description'] = $description;
        }
    }
    if (isset($_POST['picture'])) {
        $picture_name = $_POST['picture'];
    }
    if (empty($errorMessage)) {
        $arrayParameter = [];

        $arrayParameter['title'] = htmlspecialchars($title);
        $arrayParameter['description'] = $description;
        $arrayParameter['picture_name'] = htmlspecialchars($picture_name);

        $createNewActualite = $Actualite->createActualite($arrayParameter);
    }
}

if (isset($_POST['delete'])) {
    $thisActu = $_POST['delete'];
    $deleteActu = $Actualite->deleteActualite($thisActu);
}

$readActualite = $Actualite->readActualite();
$showThisActu = $Actualite->showThisActualite($id);
