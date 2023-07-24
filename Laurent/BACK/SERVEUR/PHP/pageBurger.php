<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Burger</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="/Laurent/FRONT/STATIQUE/CSS/style.css">
</head>

<body>
    <?php
    require("header.php");
    ?>
    <br>
    <div class="container">
        <h1>Types de Burger</h1>
        <br>
        <div class="container d-flex justify-content-center" style="margin-left: 80px";>
            <div class="row">
                <div class="col-md-4">
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageCommandebu1.html"><img src="/Laurent/FRONT/STATIQUE/HTML/Img/menu-burger.jpg" alt="Burger 1"
                        class="img-fluid square-image zoom-effect"></a>
                    <h3>Burger 1</h3>
                    <p>Description du Burger 1.</p>
                </div>
                <div class="col-md-4">
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageCommandebu2.html"><img src="/Laurent/FRONT/STATIQUE/HTML/Img/Nom_Burger/Burger 2.jpeg" alt="Burger 2"
                        class="img-fluid square-image zoom-effect"></a>
                    <h3>Burger 2</h3>
                    <p>Description du Burger 2.</p>
                </div>
                <div class="col-md-4">
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageCommandebu3.html"><img src="/Laurent/FRONT/STATIQUE/HTML/Img/Nom_Burger/Burger 3.jpeg" alt="Burger 3"
                        class="img-fluid square-image zoom-effect"></a>
                    <h3>Burger 3</h3>
                    <p>Description du Burger 3.</p>
                </div>
                <div class="col-md-4">
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageCommandebu4.html"><img src="/Laurent/FRONT/STATIQUE/HTML/Img/Nom_Burger/Burger 4.jpeg" alt="Burger 4"
                        class="img-fluid square-image zoom-effect"></a>
                    <h3>Burger 4</h3>
                    <p>Description du Burger 4.</p>
                </div>
                <div class="col-md-4">
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageCommandebu5.html"><img src="/Laurent/FRONT/STATIQUE/HTML/Img/Nom_Burger/Burger 5.jpeg" alt="Burger 5"
                        class="img-fluid square-image zoom-effect"></a>
                    <h3>Burger 5</h3>
                    <p>Description du Burger 5.</p>
                </div>
                <div class="col-md-4">
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageCommandebu6.html"><img src="/Laurent/FRONT/STATIQUE/HTML/Img/Nom_Burger/Burger 6.jpeg" alt="Burger 6"
                        class="img-fluid square-image zoom-effect"></a>
                    <h3>Burger 6</h3>
                    <p>Description du Burger 6.</p>
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