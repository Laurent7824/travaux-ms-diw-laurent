<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="/Laurent/FRONT/STATIQUE/CSS/style.css">
</head>

<body>
    <?php
    require("header.php");
    ?>
    <h1 class="blinking-title">Bienvenue dans votre Restaurant The District...</h1>
    <div class="parallax-container">
        <video autoplay muted loop>
            <source src="/Laurent/FRONT/STATIQUE/HTML/vidéo/vecteezy_hot-pizza-just-from-oven-in-the-pizzeria-restaurant-of_5355517_863.mp4" type="video/mp4">
        </video>
    </div>
    <div class="content">
        <div class="container text-center ">
            <div class="row justify-content-center ">
                <div class=" col-justify-content  col-sm-6 col-md-4 my-4 ">
                    <img src="/Laurent/FRONT/STATIQUE/HTML/Img/category/asian_food_cat.jpg" class="img-fluid img-cat" alt="asie">
                </div>
                <div class="col-justify-content  col-sm-6 col-md-4 my-4  ">
                    <a href="#"><img src="/Laurent/FRONT/STATIQUE/HTML/Img/category/burger_cat.jpg" class="img-fluid img-cat" alt="burger"></a>
                </div>
                <div class="col-justify-content  col-sm-6 col-md-4 my-4  ">
                    <img src="/Laurent/FRONT/STATIQUE/HTML/Img/category/pasta_cat.jpg" class="img-fluid img-cat" alt="pasta">
                </div>
                <div class="col-justify-content  col-sm-6 col-md-4 my-4  ">
                    <img src="/Laurent/FRONT/STATIQUE/HTML/Img/category/pizza_cat.jpg" class="img-fluid img-cat" alt="pizza">
                </div>
                <div class="col-justify-content  col-sm-6 col-md-4 my-4 ">
                    <img src="/Laurent/FRONT/STATIQUE/HTML/Img/category/salade_cat.jpg" class="img-fluid img-cat" alt="salade">
                </div>
                <div class="col-justify-content  col-sm-6 col-md-4 my-4  ">
                    <img src="/Laurent/FRONT/STATIQUE/HTML/Img/category/sandwich_cat.jpg" class="img-fluid img-cat" alt="sandwich">
                </div>
                <div class="col-justify-content  col-sm-6 col-md-4 my-4 ">
                    <img src="/Laurent/FRONT/STATIQUE/HTML/Img/food/cesar_salad.jpg" class="img-fluid img-plat" alt="cesar_salad">
                </div>
                <div class="col-justify-content  col-sm-6 col-md-4 my-4 ">
                    <img src="/Laurent/FRONT/STATIQUE/HTML/Img/food/lasagnes_viande.jpg" class="img-fluid img-plat" alt="lasagnes_viande">
                </div>
                <div class="col-justify-content  col-sm-6 col-md-4 my-4 ">
                    <img src="/Laurent/FRONT/STATIQUE/HTML/Img/food/courgettes_farcies.jpg" class="img-fluid img-plat" alt="courgettes_farcies">
                </div>
            </div>
        </div>
        <br>
        <br>
        <?php
        require("footer.php");
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>