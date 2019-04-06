<?php

$server = 'localhost';
$db = 'movie';
$user = 'root';
$password = '';

try {

    $con = new PDO('mysql:host='.$server. ';dbname=' .$db, $user, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (exception $e) {

    switch($e->getCode())
    {
        case 2002:
            echo 'Verbindung zum Server <b>' .$server.'</b> nicht möglich!<br>';
            break;
        case 1044:
            echo 'Probleme beim Zugriff mit Benutzer: <b>'.$user.'</b>';
            break;
        case 1045:
            echo 'Passwort evt. falsch für Benutzer: '.$user.'! Zugriff abgelehnt!<br>';
            break;
        case 1049:
            echo 'Die Datenbank <b>'.$db.'</b> existiert nicht!<br>';
            break;
        default:
            echo $e->getMessage();
    }

}

