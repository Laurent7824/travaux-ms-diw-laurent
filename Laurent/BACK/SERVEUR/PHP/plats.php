<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plats</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="/Laurent/FRONT/STATIQUE/CSS/style.css">
</head>

<body>
    <?php
    require("header.php");
    ?>
    <br>
    <h1>Bienvenue dans votre Restaurant The District !!!</h1> <br>
    <br>
    <div class="container text-center ">
        <div class="row justify-content-center ">
            <div class=" col-justify-content  col-sm-6 col-md-4 my-4 ">
                <img src="/Laurent/FRONT/STATIQUE/HTML/Img/category/veggie_cat.jpg" class="img-fluid img-cat" alt="">
            </div>
            <div class="col-justify-content  col-sm-6 col-md-4 my-4  ">
                <img src="/Laurent/FRONT/STATIQUE/HTML/Img/category/pizza_cat.jpg" class="img-fluid img-cat" alt="">
            </div>
            <div class="col-justify-content  col-sm-6 col-md-4 my-4  ">
                <img src="/Laurent/FRONT/STATIQUE/HTML/Img/category/sandwich_cat.jpg" class="img-fluid img-cat" alt="">
            </div>
            <div class="col-justify-content  col-sm-6 col-md-4 my-4  ">
                <img src="/Laurent/FRONT/STATIQUE/HTML/Img/category/pizza_cat.jpg" class="img-fluid img-cat" alt="">
            </div>
            <div class="col-justify-content  col-sm-6 col-md-4 my-4 ">
                <img src="/Laurent/FRONT/STATIQUE/HTML/Img/category/burger_cat.jpg" class="img-fluid img-cat" alt="">
            </div>
            <div class="col-justify-content  col-sm-6 col-md-4 my-4  ">
                <img src="/Laurent/FRONT/STATIQUE/HTML/Img/category/pasta_cat.jpg" class="img-fluid img-cat" alt="">
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row text-center">
            <div class="col-6">
                <button type="button" class="btn btn-success btn-lg">Précédent</button>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-success btn-lg">Suivant</button>
            </div>
        </div>
    </div>
    <br>
    <br>
    <?php
    require("footer.php");
    ?>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>