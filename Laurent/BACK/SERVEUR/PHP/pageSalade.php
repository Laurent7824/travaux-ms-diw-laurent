<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Salade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="/Laurent/FRONT/STATIQUE/CSS/style.css">
</head>

<body>
    <?php
    require("header.php");
    ?>
    <br>
    <div class="container">
        <h1>Types de Salade</h1>
        <br>
        <div class="container d-flex justify-content-center" style="margin-left: 80px" ;>
            <div class="row">
                <div class="col-md-4">
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageCommandesal1.html"><img src="/Laurent/FRONT/STATIQUE/HTML/Img/Nom_Salade/salade 1.jpg" alt="Salade 1" class="img-fluid square-image zoom-effect"></a>
                    <h3>Salade 1</h3>
                    <p>Laitue romaine</p>
                </div>
                <div class="col-md-4">
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageCommandesal2.html"><img src="/Laurent/FRONT/STATIQUE/HTML/Img/Nom_Salade/salade 2.jpeg" alt="Salade 2" class="img-fluid square-image zoom-effect"></a>
                    <h3>Salade 2</h3>
                    <p>Salade Tomate et Concombre</p>
                </div>
                <div class="col-md-4">
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageCommandesal3.html"><img src="/Laurent/FRONT/STATIQUE/HTML/Img/Nom_Salade/Salade 3.jpeg" alt="Salade 3" class="img-fluid square-image zoom-effect"></a>
                    <h3>Salade 3</h3>
                    <p>Salade César</p>
                </div>
                <div class="col-md-4">
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageCommandesal4.html"><img src="/Laurent/FRONT/STATIQUE/HTML/Img/Nom_Salade/Salade 4.jpeg" alt="Salade 4" class="img-fluid square-image zoom-effect"></a>
                    <h3>Salade 4</h3>
                    <p>Salade pomme de terre et oeuf</p>
                </div>
                <div class="col-md-4">
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageCommandesal5.html"><img src="/Laurent/FRONT/STATIQUE/HTML/Img/Nom_Salade/Salade 5.jpeg" alt="Salade 5" class="img-fluid square-image zoom-effect"></a>
                    <h3>Salade 5</h3>
                    <p>Salade Grecque</p>
                </div>
                <div class="col-md-4">
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageCommandesal6.html"><img src="/Laurent/FRONT/STATIQUE/HTML/Img/Nom_Salade/Salade 6.jpeg" alt="Salade 6" class="img-fluid square-image zoom-effect"></a>
                    <h3>Salade 6</h3>
                    <p>Salade Végétarienne</p>
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