<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Adresse IP du serveur
    $serveurIP = $_SERVER['SERVER_ADDR'];
    echo "Adresse IP du serveur : " . $serveurIP . "<br>";

    // Adresse IP du client
    $clientIP = $_SERVER['REMOTE_ADDR'];
    echo "Adresse IP du client : " . $clientIP . "<br>";
    ?>

</body>

</html>