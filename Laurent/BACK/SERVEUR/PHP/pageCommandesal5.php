<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Page de commande</title>
    <link rel="stylesheet" href="/Laurent/FRONT/STATIQUE/CSS/style.css">
</head>

<body>
    <?php
    require("header.php");
    ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <img src="/Laurent/FRONT/STATIQUE/HTML/Img/Nom_Salade/Salade 5.jpeg" class="img-fluid rounded" alt="Photo du produit">
            </div>
            <div class="col-md-6 ">
                <h2>Salade Grecque</h2>
                <p>Prix: 9,75 €</p>
                <form action="/Laurent/FRONT/STATIQUE/HTML/ficheCommande.html" method="post">
                    <div class="mb-3">
                        <label for="quantite" class="form-label">Quantité</label>
                        <input type="number" class="form-control" id="quantite" min="1" max="10" value="1">
                    </div>
                    <button type="submit" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-basket2-fill me-2 cart-icon" viewBox="0 0 16 16">
                            <path d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1z" />
                        </svg>Passer la commande</button>
                    <a href="/Laurent/FRONT/STATIQUE/HTML/pageSalade.html" class="btn btn-primary">Continuer les
                        achats</a>
                </form>
            </div>
        </div>
    </div>
    <br>
    <?php
    require("footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>