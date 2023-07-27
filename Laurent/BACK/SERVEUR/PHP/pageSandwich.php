<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Sandwich</title>
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
        <h1>La Sandwicherie</h1>
        <br>
        <div class="container d-flex justify-content-center" style="margin-left: 80px" ;>
            <div class="row">
                <div class="col-md-4">
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageCommandesand1.html"><img
                            src="/Laurent/FRONT/STATIQUE/HTML/Img/Sandwich/Sand 1.jpg" alt="Sandwich 1"
                            class="img-fluid square-image zoom-effect"></a>
                        <h3>Sandwich 1</h3>
                        <p></p>
                </div>
                <div class="col-md-4">
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageCommandesand2.html"><img src="/Laurent/FRONT/STATIQUE/HTML/Img/Sandwich/Sand 2.jpeg" alt="Sandwich 2"
                        class="img-fluid square-image zoom-effect"></a>
                    <h3>Sandwich 2</h3>
                    <p></p>
                </div>
                <div class="col-md-4">
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageCommandesand3.html"><img src="/Laurent/FRONT/STATIQUE/HTML/Img/Sandwich/Sand 3.jpeg" alt="Sandwich 3"
                        class="img-fluid square-image zoom-effect"></a>
                    <h3>Sandwich 3</h3>
                    <p></p>
                </div>
                <div class="col-md-4">
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageCommandesand4.html"><img src="/Laurent/FRONT/STATIQUE/HTML/Img/Sandwich/Sand 4.jpeg" alt="Sandwich 4"
                        class="img-fluid square-image zoom-effect"></a>
                    <h3>Sandwich 4</h3>
                    <p></p>
                </div>
                <div class="col-md-4">
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageCommandesand5.html"><img src="/Laurent/FRONT/STATIQUE/HTML/Img/Sandwich/Sand 5.jpeg" alt="Sandwich 5"
                        class="img-fluid square-image zoom-effect"></a>
                    <h3>Sandwich 5</h3>
                    <p></p>
                </div>
                <div class="col-md-4">
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageCommandesand6.html"><img src="/Laurent/FRONT/STATIQUE/HTML/Img/Sandwich/sand 6.jpeg" alt="Sandwich 6"
                        class="img-fluid square-image zoom-effect"></a>
                    <h3>Sandwich 6</h3>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row text-center">
            <div class="col-6">
                <a href="/Laurent/FRONT/STATIQUE/HTML/categorie.html" class="btn btn-success btn-lg"
                    id="bouton-precedent">Précédent</a>
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