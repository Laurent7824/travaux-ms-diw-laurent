<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $password_hash = password_hash("vacances", PASSWORD_DEFAULT );
     echo "Le mot de passe crypté est: " .$password_hash; 
     echo "<br>";
     echo "le nombre de caracttere de mon mot de passe crypté est ".strlen($password_hash);
    ?>
</body>
</html>