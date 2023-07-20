<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture d'un fichier</title>
</head>

<body>
    <?php
    // Chemin vers le fichier texte
    $cheminFichier = '/home/pruvot/Bureau/travaux-ms-diw-laurent/Laurent/FRONT/STATIQUE/HTML/fichier.txt';

    // Lire le contenu du fichier et le stocker dans un tableau
    $contenuFichier = file($cheminFichier);

    // Construire la page web
    $pageWeb = '<!DOCTYPE html>
<html>
<head>
    <title>Liste de liens hypertextes</title>
</head>
<body>
    <h1>Liste de liens hypertextes</h1>
    <ul>';

    // Parcourir le tableau de contenu du fichier
    foreach ($contenuFichier as $ligne) {
        // Supprimer les espaces en début et fin de ligne
        $ligne = trim($ligne);

        // Vérifier si la ligne est vide
        if (!empty($ligne)) {
            // Ajouter un élément de liste contenant un lien hypertexte
            $pageWeb .= '<li><a href="' . $ligne . '">' . $ligne . '</a></li>';
        }
    }

    // Fermer la structure HTML
    $pageWeb .= '
    </ul>
</body>
</html>';

    // Afficher la page web générée
    echo $pageWeb;
    ?>

</body>

</html>