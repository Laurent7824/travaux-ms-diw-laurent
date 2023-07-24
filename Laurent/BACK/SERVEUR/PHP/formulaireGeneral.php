<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Laurent/FRONT/STATIQUE/CSS/style.css">
    <title>Formulaire Général</title>
</head>

<body>
    <?php
    require("header.php");
    ?>
    <div class="container">
        <h1>Formulaire de Contact :</h1>
        <br>
        <h2 class="scrolling-title">Nous contacter :</h2>
        <br>
        <form id="myForm">
            <div class="row">
                <div class="col-md-6">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" placeholder="Votre nom">
                </div>
                <div class="col-md-6">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" id="prenom" placeholder="Votre prénom">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Votre email">
                    <small id="emailError" class="text-danger d-none">Veuillez saisir une adresse email valide.</small>
                </div>
                <div class="col-md-6">
                    <label for="telephone">Téléphone</label>
                    <input type="tel" class="form-control" id="telephone" placeholder="Votre téléphone">
                    <small id="telephoneError" class="text-danger d-none">Veuillez saisir un numéro de téléphone valide.</small>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="demande">Votre demande</label>
                    <textarea class="form-control" id="demande" rows="5" placeholder="Entrez votre demande"></textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col text-end">
                    <button type="submit" class="btn btn-success">Envoyer</button>
                </div>
            </div>
        </form>
    </div>
    <?php
    require("footer.php");
    ?>

    <script src="/Laurent/FRONT/DYNAMIQUE/JAVASCRIPT/formulaireGeneral.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>