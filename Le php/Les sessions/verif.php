<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // Mot de passe saisi par l'utilisateur
    $motDePasseSaisi ="vacances";

    // Mot de passe haché stocké en base de données
    $motDePasseStocke = password_hash( $motDePasseSaisi,PASSWORD_DEFAULT);

    // Vérification du mot de passe saisi
    if (password_verify($motDePasseSaisi, $motDePasseStocke)) {
        echo "Mot de passe valide !";
    } else {
        echo "Mot de passe invalide.";
    }

    ?>

</body>

</html>