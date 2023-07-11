<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de jour restant de votre formation</title>
</head>

<body>
    <?php
    // Date actuelle
    $dateActuelle = new DateTime();

    // Date de fin de formation
    $dateFinFormation = new DateTime('2023-07-28');

    // Calcul du nombre de jours restants
    $joursRestants = 0;

    while ($dateActuelle <= $dateFinFormation) {
        // Exclure les vendredis après-midi, les week-ends et le 14 juillet
        if ($dateActuelle->format('N') < 5 && $dateActuelle->format('m-d') !== '07-14') {
            $joursRestants++;
        }

        $dateActuelle->modify('+1 day');
    }

    // Affichage du résultat
    echo "Il reste " . $joursRestants . " jours (hors vendredis après-midi, week-ends et le 14 juillet) avant la fin de votre formation.";
    ?>

</body>

</html>