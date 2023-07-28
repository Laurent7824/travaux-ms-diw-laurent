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
    //Utilisation de 'foreach' pour parcourir les valeur du tableau '$_POST'
    foreach ($_POST as $key => $value) {
        //'{$key}' crée des variables dynamiques en utilisant le nom de chaque clé du tableau
        ${$key} = $value;
    }
    //vérifier si la variable $envoyer est déclarée
    if (isset($envoyer)) {
        //Création d'un nouveau fichier nommé avec la date et heure de sa création
        //'a+' Crée un nouveau fichier si le fichier n'existe pas 
        $fp = fopen((date("Y-m-d-H-i-s") . ".txt"), "a+");
        //Données enregistrer dans le fichier
        fputs($fp, $nom . "," . $prenom . "," . $mail . "," . $tel . "," . $demande);
    }
    ?>
    <?php
    require("header.php");
    ?>
    <div class="container">
        <h1>Formulaire de Contact :</h1>
        <br>
        <h2 class="scrolling-title">Nous contacter :</h2>
        <br>
        <form id="myForm" method="post" action="">
            <div class="row">
                <div class="col-md-6">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom">
                </div>
                <div class="col-md-6">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control"name="prenom"  id="prenom" placeholder="Votre prénom">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="mail"  id="email" placeholder="Votre email">
                    <small id="emailError" class="text-danger d-none">Veuillez saisir une adresse email valide.</small>
                </div>
                <div class="col-md-6">
                    <label for="telephone">Téléphone</label>
                    <input type="tel" class="form-control" name="tel"  id="telephone" placeholder="Votre téléphone">
                    <small id="telephoneError" class="text-danger d-none">Veuillez saisir un numéro de téléphone valide.</small>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="demande">Votre demande</label>
                    <textarea class="form-control" name="$demande"  id="demande" rows="5" placeholder="Entrez votre demande"></textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col text-end">
                    <button type="submit"name="envoyer"   class="btn btn-success">Envoyer</button>
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