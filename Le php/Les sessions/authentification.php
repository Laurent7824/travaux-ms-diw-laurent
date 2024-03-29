<!DOCTYPE html>
<html>

<head>
    <title>Authentification</title>
    <!-- Ajouter les liens CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Authentification</h2>
        <form action="traitement_authentification.php" method="post">
            <div class="mb-3">
                <label for="adresse_mail" class="form-label">Adresse mail :</label>
                <input type="email" name="adresse_mail" id="adresse_mail" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="mot_de_passe" class="form-label">Mot de passe :</label>
                <input type="password" name="mot_de_passe" id="mot_de_passe" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
    </div>

    <!-- Ajouter les scripts Bootstrap (JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>