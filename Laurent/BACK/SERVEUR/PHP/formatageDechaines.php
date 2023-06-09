<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formatage de Chaînes</title>
</head>

<body>
    <?php
    $euro = 6.55957;
    printf("%.2f FF<br />", $euro);
    $money1 = 68.75;
    $money2 = 54.35;
    $money = $money1 + $money2;
    // echo $money affichera "123.1";
    echo "affichage sans printf : " . $money . "<br />";
    $monformat = sprintf("%01.2f", $money);

    // echo $monformat affichera "123.10"
    echo "affichage avec printf : " . $monformat . "<br />";

    $year = "2002";
    $month = "4";
    $day = "5";
    $varDate = sprintf("%04d-%02d-%02d", $year, $month, $day);

    // echo $varDate affichera "2002-04-05"
    echo "affichage avec sprintf : " . $varDate;
    ?>
</body>

</html>