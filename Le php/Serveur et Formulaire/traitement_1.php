<!DOCTYPE html>
<html>
<head>
    <title>Données du formulaire</title>
    <!-- Inclure les fichiers CSS de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Données du formulaire</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $societe = $_POST["societe"];
            $personne = $_POST["personne"];
            $codepostal = $_POST["codepostal"];
            $ville = $_POST["ville"];
            $email = $_POST["email"];
            $telephone = $_POST["telephone"];

            // Afficher les données dans un tableau HTML
            echo '<table class="table">';
            echo '<tr><th class="table-primary">Société</th ><th class="table-primary">Personne</th><th class="table-primary">codepostal</th class="table-primary"><th class="table-primary">ville</th><th class="table-primary">email</th><th class="table-primary">telephone</th></tr>';
            echo '<tr><td class="table-success">' . $societe . '</td><td class="table-success">' . $personne . '</td><td class="table-success">' . $codepostal . '</td><td class="table-success">' . $ville . '</td><td class="table-success">' . $email .'</td><td class="table-success">' . $telephone . '</td></tr>';
            echo '</table>';
        } else {
            echo "<p>Aucune donnée soumise</p>";
        }
        ?>
    </div>

    <!-- Inclure le fichier JS de Bootstrap (jQuery requis) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
