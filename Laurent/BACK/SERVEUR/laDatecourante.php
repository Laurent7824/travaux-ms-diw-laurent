<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La date courante</title>
</head>

<body>
    <?php
    $dateCourante = new DateTime();
    $dateCourante->add(new DateInterval('P1M'));

    echo "La date dans un mois sera : " . $dateCourante->format('Y-m-d');
    ?>

</body>

</html>