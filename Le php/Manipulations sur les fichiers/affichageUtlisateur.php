<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Affichage utilisateur</title>
</head>

<body>
    <?php
    // Récupérer le contenu du fichier CSV
    $fileContent = file('https://ncode.amorce.org/customers.csv');

    // Tableau HTML avec Bootstrap 5.3
    $htmlTable = '<table class="table table-striped">';
    $htmlTable .= '<thead><tr><th scope="col">Surname</th><th scope="col">Firstname</th><th scope="col">Email</th><th scope="col">Phone</th><th scope="col">City</th><th scope="col">State</th></tr></thead>';
    $htmlTable .= '<tbody>';

    // Parcourir chaque ligne du fichier CSV
    foreach ($fileContent as $index => $line) {
        // Découper la ligne en utilisant la virgule comme séparateur
        $fields = explode(',', $line);

        // Extraire les valeurs des champs
        $surname = $fields[0];
        $firstname = $fields[1];
        $email = $fields[2];
        $phone = $fields[3];
        $city = $fields[4];
        $state = $fields[5];

        // Ajouter une classe de couleur alternative à chaque deuxième ligne
        $rowClass = ($index % 2 == 0) ? '' : 'table-success';

        // Ajouter une ligne au tableau HTML avec les valeurs des champs et la classe de couleur
        $htmlTable .= '<tr class="' . $rowClass . '">';
        $htmlTable .= '<td>' . $surname . '</td>';
        $htmlTable .= '<td>' . $firstname . '</td>';
        $htmlTable .= '<td>' . $email . '</td>';
        $htmlTable .= '<td>' . $phone . '</td>';
        $htmlTable .= '<td>' . $city . '</td>';
        $htmlTable .= '<td>' . $state . '</td>';
        $htmlTable .= '</tr>';
    }

    $htmlTable .= '</tbody></table>';

    // Afficher le tableau HTML
    echo $htmlTable;
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>