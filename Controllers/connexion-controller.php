<?php

session_start();

require "../Models/Database.php";
require "../Models/Utilisateurs.php";

$Utilisateur = new Utilisateurs();

$errorMessage = [];
$successMessage = [];


if (isset($_POST['connect'])) {

    if (isset($_POST['mail'])) {
        $mail = htmlspecialchars($_POST['mail']);
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $errorMessage['mail'] = "Saisissez une adresse mail valide";
        }
        if (empty($mail)) {
            $errorMessage['mail'] = "Saisissez une adresse e-mail";
        }
    }

    if (isset($_POST['password'])) {
        $password = $_POST['password'];
        if ($password != "admin") {
            $errorMessage['password'] = "Mot de passe éroné";
        }
        if (empty($password)) {
            $errorMessage['password'] = "Saisissez un mot de passe";
        }
    }

    if (count($errorMessage) == 0) {
        $checkUser = $Utilisateur->checkConnexionUser($mail);
        if (count($checkUser) > 0) {
            $passwordDb = $checkUser['password'];
            if (password_verify($password, $passwordDb)) {
                $user = [];
                $user['lastname'] = $checkUser['lastname'];
                $user['lastname'] = $checkUser['lastname'];
                $user['mail'] = $checkUser['mail'];
                $user['phone'] = $checkUser['phone'];
                $user['password'] = $checkUser['password'];
                $user['id_role'] = $checkUser['id_role'];
                $_SESSION['user'] = $user;
                header('Location: actualite.php');
            }
        }
    }
}
