<!DOCTYPE html>
<html>

<head>
    <title>Panier de commande</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Styles personnalisés */
        .table-primary>thead>tr>th,
        .table-primary>tbody>tr>th,
        .table-primary>tfoot>tr>th,
        .table-primary>thead>tr>td,
        .table-primary>tbody>tr>td,
        .table-primary>tfoot>tr>td {
            background-color: #007bff;
            color: #fff;
        }

        .table-success>thead>tr>th,
        .table-success>tbody>tr>th,
        .table-success>tfoot>tr>th,
        .table-success>thead>tr>td,
        .table-success>tbody>tr>td,
        .table-success>tfoot>tr>td {
            background-color: #28a745;
            color: #fff;
        }
    </style>
</head>

<body>
    <?php
    // Définition des produits
    $products = [
        [
            'name' => 'Pizzas',
            'price' => 10.99,
            'quantity' => 1
        ],
        [
            'name' => 'Saveur Asie',
            'price' => 8.99,
            'quantity' => 3
        ],
        [
            'name' => 'Pâtes',
            'price' => 7.99,
            'quantity' => 4
        ],
        [
            'name' => 'Sandwich',
            'price' => 5.99,
            'quantity' => 1
        ],
        [
            'name' => 'Salades',
            'price' => 6.99,
            'quantity' => 1
        ],
        [
            'name' => 'Burger',
            'price' => 12,
            'quantity' => 2
        ],

    ];
    ?>

    <div class="container">
        <h1>Panier de commande</h1>
        <br>
        <table class="table">
            <thead>
                <tr class="table-primary">
                    <th>Produit</th>
                    <th>Prix unitaire</th>
                    <th>Quantité</th>
                    <th>Prix total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;

                foreach ($products as $product) {
                    $name = $product['name'];
                    $price = $product['price'];
                    $quantity = $product['quantity'];
                    $totalProduct = $price * $quantity;
                    $total += $totalProduct;

                    // Appliquer une classe de couleur différente en fonction du produit
                    $colorClass = $name == 'Pizzas' ? 'table-success' : '';

                ?>

                    <tr class="<?php echo $colorClass; ?>">
                        <td><?php echo $name; ?></td>
                        <td><?php echo $price; ?> €</td>
                        <td><?php echo $quantity; ?></td>
                        <td><?php echo $totalProduct; ?> €</td>
                    </tr>

                <?php
                }
                ?>

                <tr>
                    <td colspan="3"><strong>Total</strong></td>
                    <td><strong><?php echo $total; ?> €</strong></td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>