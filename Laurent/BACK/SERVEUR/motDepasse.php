<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de Passe</title>
</head>

<body>
    <?php

    function complex_password($motDePasse)
    {
        // Vérifier la longueur du mot de passe
        if (strlen($motDePasse) < 8) {
            return false;
        }

        // Vérifier la présence d'au moins un chiffre
        if (!preg_match('/\d/', $motDePasse)) {
            return false;
        }

        // Vérifier la présence d'au moins une majuscule et une minuscule
        if (!preg_match('/[A-Z]/', $motDePasse) || !preg_match('/[a-z]/', $motDePasse)) {
            return false;
        }

        // Toutes les règles sont respectées
        return true;
    }

    $motDePasse = "TopSecret42";
    $resultat = complex_password($motDePasse);
    var_dump($resultat);

    ?>

</body>

</html>