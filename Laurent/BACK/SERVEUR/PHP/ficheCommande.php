<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Commande</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Laurent/FRONT/STATIQUE/CSS/style.css">
</head>
<?php
require("header.php");
?>

<body>
    <br>
    <div class="container">
        <h1>Formulaire de commande</h1>
        <br>
        <div class="container">
            <form id="myForm">
                <div class="row mb-3">
                    <div class="col">
                        <label for="nomPrenom" class="form-label">Nom et Prénom</label>
                        <input type="text" class="form-control" id="nomPrenom" placeholder="Entrez votre nom et prénom">
                        <small id="nomPrenomError" class="form-text error"></small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="telephone" class="form-label">Téléphone</label>
                        <input type="tel" class="form-control" id="telephone" placeholder="Entrez votre numéro de téléphone">
                        <small id="telephoneError" class="form-text error"></small>
                    </div>
                    <div class="col">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Entrez votre adresse email">
                        <small id="emailError" class="form-text error"></small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="adresse" class="form-label">Adresse</label>
                        <textarea class="form-control" id="adresse" placeholder="Entrez votre adresse"></textarea>
                        <small id="adresseError" class="form-text error"></small>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Envoyer</button>
            </form>
        </div>
        <br>
        <br>
        <?php
        require("footer.php");
        ?>
        <script src="/Laurent/FRONT/DYNAMIQUE/JAVASCRIPT/fichier.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</body>

</html>