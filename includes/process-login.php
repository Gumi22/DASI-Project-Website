<?php
include_once 'db_connect.php';
include_once 'functions.php';

sec_session_start(); // Unsere selbstgemachte sichere Funktion um eine PHP-Sitzung zu starten.

if (isset($_POST['email'], $_POST['p'])) {
    $email = $_POST['email'];
    $password = $_POST['p']; // Das gehashte Passwort.
    if (login($email, $password, $mysqli) == true) {
        // Login erfolgreich
        if (isset($_POST['rememberme'])) {
            setcookie( 'UserName', $_POST['email'], 0, '/DASI', 'localhost', isset($_SERVER["HTTPS"]), true);
            setcookie( 'PassWord', $_POST['p'], 0, '/DASI', 'localhost', isset($_SERVER["HTTPS"]), true); //evtl hash pw with Database Salt
        }
        header('Location: ../protected_page.php');
    } else {
        // Login fehlgeschlagen
        header('Location: ../index.php?error=1');
    }
} else {
    // Die korrekten POST-Variablen wurden nicht zu dieser Seite geschickt.
    echo 'Invalid Request';
}