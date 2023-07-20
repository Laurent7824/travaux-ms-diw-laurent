<?php
session_start();

// Vérifier si l'utilisateur est authentifié
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== 'ok') {
    header('Location: login_form.php');
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Page protégée</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Nouvelle page</h1>
        <p>Bienvenue Pruvot Laurent. Vous êtes authentifié avec succès !!!</p>
        <a href="logout.php" class="btn btn-danger">Se déconnecter</a>
    </div>
</body>

</html>