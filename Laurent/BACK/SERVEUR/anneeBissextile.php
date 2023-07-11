<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Année Bissextile</title>
</head>

<body>
    <?php
    $annee = 2023; // Remplacez par l'année que vous souhaitez vérifier

    if (date("L", mktime(0, 0, 0, 1, 1, $annee))) {
        echo $annee . " est une année bissextile.";
    } else {
        echo $annee . " n'est pas une année bissextile.";
    }
    ?>

</body>

</html>