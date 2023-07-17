<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier</title>
</head>

<body>
    <?php
    $mois = array(
        "Janvier" => 31,
        "Février" => 28,
        "Mars" => 31,
        "Avril" => 30,
        "Mai" => 31,
        "Juin" => 30,
        "Juillet" => 31,
        "Août" => 31,
        "Septembre" => 30,
        "Octobre" => 31,
        "Novembre" => 30,
        "Décembre" => 31
    );

    // Affichage du tableau initial
    echo "<h2>Tableau initial</h2>";
    echo "<table style='border-collapse: collapse;'>";
    echo "<tr><th style='border: 1px solid black;'>Mois</th><th style='border: 1px solid black;'>Nombre de jours</th></tr>";
    foreach ($mois as $nomMois => $jours) {
        echo "<tr><td style='border: 1px solid black;'>$nomMois</td><td style='border: 1px solid black;'>$jours</td></tr>";
    }
    echo "</table>";

    // Tri du tableau en fonction du nombre de jours
    asort($mois);

    // Affichage du tableau trié
    echo "<h2>Tableau trié</h2>";
    echo "<table style='border-collapse: collapse;'>";
    echo "<tr><th style='border: 1px solid black;'>Mois</th><th style='border: 1px solid black;'>Nombre de jours</th></tr>";
    foreach ($mois as $nomMois => $jours) {
        echo "<tr><td style='border: 1px solid black;'>$nomMois</td><td style='border: 1px solid black;'>$jours</td></tr>";
    }
    echo "</table>";
    ?>


</body>

</html>