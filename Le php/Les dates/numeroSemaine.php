<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php

    $date = '14/07/2019';
    $dateTime = DateTime::createFromFormat('d/m/Y', $date);
    $numeroSemaine = $dateTime->format('W');

    echo 'Le numéro de semaine pour la date ' . $date . ' est : ' . $numeroSemaine;

    ?>

</body>

</html>