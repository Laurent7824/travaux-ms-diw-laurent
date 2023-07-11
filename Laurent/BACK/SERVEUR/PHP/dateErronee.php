<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Erronée</title>
</head>

<body>
    <?php
    $date = '5/12/2023'; // Remplacez par la date que vous souhaitez vérifier

    $elementsDate = explode('/', $date);
    $jour = intval($elementsDate[0]);
    $mois = intval($elementsDate[1]);
    $annee = intval($elementsDate[2]);

    if (checkdate($mois, $jour, $annee)) {
        echo "La date " . $date . " est valide.";
    } else {
        echo "La date " . $date . " est erronée.";
    }
    ?>

</body>

</html>