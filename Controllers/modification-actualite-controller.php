<?php

session_start();

require "../Models/Database.php";
require "../Models/Actualite.php";

$errorMessage = [];
$successMessage = [];

$Actualite = new Actualite();

$id = isset($_GET['id']) ? $_GET['id'] : "";

$regexText = "#^[\\r\\n0-9a-zé'èçàâêîôûäëïöüù:_*(), -]{1,1000}$#i";

if ($_SESSION['user']['id_role'] != 1 || !isset($_SESSION['user'])) {
    echo "Information indiponible";
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
        $arrayParameter['id'] = htmlspecialchars($_POST['submit']);

        $modifyActualite = $Actualite->updateActualite($arrayParameter);

        header("Location: actualite.php");
    }
}

$showThisActu = $Actualite->showThisActualite($id);
