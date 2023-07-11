<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déplacer et renommer</title>
</head>

<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="fichier">
        <input type="submit" value="Télécharger">
    </form>
    <?php
    $repertoireDestination = "images/";
    $cheminDestination = $repertoireDestination . "photo.jpg";

    if (!file_exists($repertoireDestination)) {
        mkdir($repertoireDestination, 0777, true);
    }

    if (isset($_FILES["fichier"]) && $_FILES["fichier"]["error"] == UPLOAD_ERR_OK) {
        if (move_uploaded_file($_FILES["fichier"]["tmp_name"], $cheminDestination)) {
            echo "Le fichier a été téléchargé avec succès.";
        } else {
            echo "Une erreur s'est produite lors du téléchargement du fichier.";
        }
    }
    ?>
</body>

</html>