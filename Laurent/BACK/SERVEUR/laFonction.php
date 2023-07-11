<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $myVar = "KO";

    if ($myVar == "OK") {
        echo "C'est bon<br>";
    } else {
        echo "Ouh la la pas bien !<br>"; // Message affiché dans la page web
        error_log("Ouh la la pas bien"); // Message enregistré dans le fichier 'C:/wamp/logs/php_error.log' 
    }
    ?>
</body>

</html>