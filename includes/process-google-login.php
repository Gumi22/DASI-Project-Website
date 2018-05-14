<?php
require_once 'google-api-php-client-2.2.1/vendor/autoload.php';
include_once 'functions.php';

sec_session_start(); // Unsere selbstgemachte sichere Funktion um eine PHP-Sitzung zu starten.

// Get $id_token via HTTPS POST.
if (isset($_POST['idtoken'])) {

    if (loginGoogleAcc($_POST['idtoken'])) {

        header('Location: ../index.php');

    } else {
        // Invalid ID token
        header('Location: ../index.php?error=1');
        echo 'Invalid Id Token';
    }
} else {
    // Die korrekten POST-Variablen wurden nicht zu dieser Seite geschickt.
    header('Location: ../index.php?error=1');
    echo 'Invalid Request';
}