<?php
include_once 'includes/functions.php';
sec_session_start();

// Setze alle Session-Werte zurück
$_SESSION = array();

// hole Session-Parameter
$params = session_get_cookie_params();

// Lösche das aktuelle Cookie.
/*setcookie(session_name(),
    '', time() - 42000,
    $params["path"],
    $params["domain"],
    $params["secure"],
    $params["httponly"]);*/

if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
}

// Vernichte die Session
session_destroy();
header('Location: /DASI/index.php');

//ToDo: CSRF schutz hinzufügen!!!