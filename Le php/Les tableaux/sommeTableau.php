<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somme Tableau</title>
</head>
<body>
<?php

function somme($tableau) {
    $somme = 0;
    foreach ($tableau as $valeur) {
        $somme += $valeur;
    }
    return $somme;
}

$tab = array(4, 3, 8, 2);
$resultat = somme($tab);
echo $resultat;

?>

</body>
</html>