<!DOCTYPE html>
<html>

<head>
    <title>Inscription</title>
    <!-- Inclure les fichiers CSS de Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="mt-5 text-primary">Formulaire d'inscription :</h2>
        <form action="enregistrer.php" method="post" class="mt-4">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nom" class="form-label">Nom:</label>
                    <input type="text" name="nom" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="prenom" class="form-label">Prénom:</label>
                    <input type="text" name="prenom" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="email" class="form-label">Adresse e-mail:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="mot_de_passe" class="form-label">Mot de passe:</label>
                    <input type="password" name="mot_de_passe" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <input type="submit" value="S'inscrire" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>

    <!-- Inclure les fichiers JavaScript de Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>