<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Départements</title>
</head>

<body>
    <?php
    $departements = array(
        "Hauts-de-France" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
        "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
        "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
        "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
    );

    ksort($departements); // Trie les régions par ordre alphabétique des clés

    echo "<style>";
    echo "table {border-collapse: collapse;}";
    echo "th, td {border: 2px solid black; padding: 5px;}";
    echo "</style>";

    echo "<table>";
    echo "<tr><th>Région</th><th>Départements</th></tr>";

    foreach ($departements as $region => $deptArray) {
        echo "<tr>";
        echo "<td>$region</td>";
        echo "<td>";
        foreach ($deptArray as $departement) {
            echo "$departement<br>";
        }
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>


</body>

</html>