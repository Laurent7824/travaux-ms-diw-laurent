<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre de département</title>
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
    echo "table {border-collapse: collapse; width: 100%;}";
    echo "th, td {border: 2px solid black; padding: 5px; text-align: center;}";
    echo "</style>";

    echo "<table>";
    echo "<tr><th>Région</th><th>Nombre de départements</th></tr>";

    foreach ($departements as $region => $deptArray) {
        $nombreDepartements = count($deptArray);

        echo "<tr>";
        echo "<td>$region</td>";
        echo "<td>$nombreDepartements</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>



</body>

</html>