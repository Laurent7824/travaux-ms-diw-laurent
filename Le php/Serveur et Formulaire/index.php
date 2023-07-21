<!DOCTYPE html>
<html>

<head>
    <title>Formulaire Bootstrap</title>
    <!-- Inclure les fichiers CSS de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Formulaire</h2>
        <!-- Votre formulaire ici -->
        <form action="traitement_1.php" method="post" id="contactForm">
            <div class="mb-3">
                <label for="societe" class="form-label">Société:</label>
                <input type="text" class="form-control" id="societe" name="societe" minlength="1">
                <span id="societeError" class="text-danger"></span>
            </div>

            <div class="mb-3">
                <label for="personne" class="form-label">Personne à contacter:</label>
                <input type="text" class="form-control" id="personne" name="personne" minlength="1">
                <span id="personneError" class="text-danger"></span>
            </div>

            <div class="mb-3">
                <label for="codepostal" class="form-label">Code postal:</label>
                <input type="text" class="form-control" id="codepostal" name="codepostal" pattern="[0-9]{5}">
                <span id="codepostalError" class="text-danger"></span>
            </div>

            <div class="mb-3">
                <label for="ville" class="form-label">Ville:</label>
                <input type="text" class="form-control" id="ville" name="ville" minlength="1">
                <span id="villeError" class="text-danger"></span>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
                <span id="emailError" class="text-danger"></span>
            </div>

            <div class="mb-3">
                <label for="telephone" class="form-label">Téléphone:</label>
                <input type="text" class="form-control" id="telephone" name="telephone" pattern="[0-9]{10}">
                <span id="telephoneError" class="text-danger"></span>
            </div>

            <div class="mb-3">
                <label for="selection" class="form-label">Sélectionnez l'environnement technique du projet:</label>
                <textarea class="form-control" id="selection" name="selection" rows="4"></textarea>
            </div>
            <div class="mb-3">
                <select class="form-select" id="environnement" name="environnement">
                    <option value="">Choisissez !!!</option>
                    <option value="technique1">Access</option>
                    <option value="technique2">Java </option>
                    <option value="technique3">Delphi</option>
                    <option value="technique4">Windev</option>
                    <option value="technique5">Visual Basic</option>
                    <option value="technique6">Power Builder</option>
                    <option value="technique7">Internet</option>
                    <option value="technique8">Intranet</option>
                    <option value="technique9">Window NT</option>
                    <option value="technique10">Unix</option>
                    <option value="technique11">SQL Server</option>
                    <option value="technique12">Oracle</option>
                    <option value="technique13">Autres... </option>

                </select>
                <span id="environnementError" class="text-danger"></span>
            </div>
            <br>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="submit" class="btn btn-success me-md-2">Envoyer</button>
                <button type="reset" class="btn btn-danger">Effacer</button>
            </div>
        </form>
    </div>

    <!-- Inclure le fichier JS de Bootstrap (jQuery requis) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>