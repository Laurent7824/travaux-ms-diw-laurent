<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction Lien</title>
</head>

<body>
    <?php

    function genererLien($url, $titre)
    {
        $lien = '<a href="' . $url . '">' . $titre . '</a>';
        return $lien;
    }

    $url = "https://www.reddit.com/";
    $titre = "Reddit Hug";

    $lienGenerer = genererLien($url, $titre);
    echo $lienGenerer;

    ?>

</body>

</html>