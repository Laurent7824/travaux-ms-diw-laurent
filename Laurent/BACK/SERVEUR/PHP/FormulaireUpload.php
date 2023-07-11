<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="fichier" />
        <input type="submit" value="Envoyer" />
        <?php
        // Vérifiez si un fichier a été téléchargé avec succès
        if ($_FILES["fichier"]["error"] === UPLOAD_ERR_OK) {
            $name = $_FILES["fichier"]["name"];
            $type = $_FILES["fichier"]["type"];
            $tmp_name = $_FILES["fichier"]["tmp_name"];
            $size = $_FILES["fichier"]["size"];

            // Affichage des informations dans un tableau HTML avec les bordures
            echo '<style>
            table {
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
            }
          </style>';

            echo "<table>";
            echo "<tr><th>Propriété</th><th>Valeur</th></tr>";
            echo "<tr><td>Nom du fichier</td><td>$name</td></tr>";
            echo "<tr><td>Type MIME</td><td>$type</td></tr>";
            echo "<tr><td>Chemin du fichier temporaire</td><td>$tmp_name</td></tr>";
            echo "<tr><td>Taille du fichier (en octets)</td><td>$size</td></tr>";
            echo "</table>";
        } else {
            // Gérer les erreurs de téléchargement ici
            echo "Une erreur s'est produite lors du téléchargement du fichier.";
        }
        ?>



</body>

</html>