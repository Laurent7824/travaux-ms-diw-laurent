<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $societe = $_REQUEST["societe"];
    $personne = $_REQUEST["personne"];
    $codepostal = $_REQUEST["codepostal"];
    $ville = $_REQUEST["ville"];
    $email = $_REQUEST["email"];
    $telephone = $_REQUEST["telephone"];
    $environnement = $_REQUEST["environnement"];
    $selection = $_REQUEST["selection"];

    echo "<p><strong>Société:</strong> " . $societe . "</p>";
    echo "<p><strong>Personne à contacter:</strong> " . $personne . "</p>";
    echo "<p><strong>Code postal:</strong> " . $codepostal . "</p>";
    echo "<p><strong>Ville:</strong> " . $ville . "</p>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
    echo "<p><strong>Téléphone:</strong> " . $telephone . "</p>";
    echo "<p><strong>Environnement technique du projet:</strong> " . $environnement . "</p>";
    echo "<p><strong>Sélection:</strong> " . $selection . "</p>";
  }
  ?>
</body>

</html>