<?php

session_start();

if (isset($_POST['offline'])) {
    $_SESSION = [];
    session_destroy();
    header("Location:Views/connexion.php");
}