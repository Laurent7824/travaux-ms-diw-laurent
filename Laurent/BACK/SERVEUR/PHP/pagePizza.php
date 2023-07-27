<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Pizza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="/Laurent/FRONT/STATIQUE/CSS/style.css">
</head>

<body>
    <?php
    require("header.php");
    ?>
    <br>
    <div class="container">
        <h1>Types de Pizza</h1>
        <br>
        <div class="container d-flex justify-content-center" style="margin-left: 80px" ;>
            <div class="row">
                <div class="col-md-4">
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageCommandepi1.html"><img src="/Laurent/FRONT/STATIQUE/HTML/Img/Nom_pizza/pizza 1.jpeg" alt="Pizza 1" class="img-fluid square-image zoom-effect"></a>
                    <h3>Pizza 1</h3>
                    <p>Description de la pizza 1.</p>
                </div>
                <div class="col-md-4">
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageCommandepi2.html"><img src="/Laurent/FRONT/STATIQUE/HTML/Img/Nom_pizza/pizza2.jpeg" alt="Pizza 2" class="img-fluid square-image zoom-effect"></a>
                    <h3>Pizza 2</h3>
                    <p>Description de la pizza 2.</p>
                </div>
                <div class="col-md-4">
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageCommandepi3.html"><img src="/Laurent/FRONT/STATIQUE/HTML/Img/Nom_pizza/pizza 3.jpeg" alt="Pizza 3" class="img-fluid square-image zoom-effect"></a>
                    <h3>Pizza 3</h3>
                    <p>Description de la pizza 3.</p>
                </div>
                <div class="col-md-4">
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageCommandepi4.html"><img src="/Laurent/FRONT/STATIQUE/HTML/Img/Nom_pizza/pizza4.jpeg" alt="Pizza 4" class="img-fluid square-image zoom-effect"></a>
                    <h3>Pizza 4</h3>
                    <p>Description de la pizza 4.</p>
                </div>
                <div class="col-md-4">
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageCommandepi5.html"><img src="/Laurent/FRONT/STATIQUE/HTML/Img/Nom_pizza/pizza5.jpeg" alt="Pizza 5" class="img-fluid square-image zoom-effect"></a>
                    <h3>Pizza 5</h3>
                    <p>Description de la pizza 5.</p>
                </div>
                <div class="col-md-4">
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageCommandepi6.html"><img src="/Laurent/FRONT/STATIQUE/HTML/Img/Nom_pizza/pizza6.jpeg" alt="Pizza 6" class="img-fluid square-image zoom-effect"></a>
                    <h3>Pizza 6</h3>
                    <p>Description de la pizza 6.</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row text-center">
            <div class="col-6">
                <a href="/Laurent/FRONT/STATIQUE/HTML/categorie.html" class="btn btn-success btn-lg" id="bouton-precedent">Précédent</a>
            </div>
            <div class="col-6">
                <a href="#" class="btn btn-success btn-lg" id="bouton-suivant">Suivant</a>

            </div>
        </div>
    </div>
    <br>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<br>
<?php
require("footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>