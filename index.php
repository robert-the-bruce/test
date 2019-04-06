<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/mystyle.css">
    <link rel="stylesheet" href="./css/skeleton.css">

</head>
<body>
<nav>
    <?php
    //Navigation einbinden
    include "navigation.php";?>
</nav>
<div class="myindex">

    <?php
    // Datenbankverbindung
    include './helper/functions.php';
    include "./class/dbconn.php";

    $db = new Dbconn('localhost','movie', 'root', '');

    $con = $db->getDb();

    if (isset($_GET['seite'])) {

        // Routing
        switch ($_GET['seite']) {

            case 'start':
                //Startseite laden
                include './src/start.php';
                break;

            case 'person':
                // Personenseite laden
                include './src/person.php';
                break;

            case 'register':
                // Registrierungsseite laden
                include './src/register.php';
                break;

            case 'update':
                // Änderungseite laden
                include './src/update.php';
                break;

            default:
                include './src/start.php';
        }
    }
    ?>
</div>

</body>

</html>