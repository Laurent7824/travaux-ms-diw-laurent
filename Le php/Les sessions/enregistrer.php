<?php
// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$motDePasse = $_POST['mot_de_passe'];

// Vérification si l'utilisateur existe déjà
$dataFolder = "data/";
$filename = $dataFolder . $email . ".txt";

if (file_exists($filename)) {
    echo "Cette adresse e-mail est déjà utilisée.";
} else {
    // Générer un login à partir du nom et du prénom
    $login = strtolower(substr($prenom, 0, 1) . $nom);

    // Générer un mot de passe aléatoire
    $longueurMotDePasse = 10; // Vous pouvez ajuster la longueur du mot de passe selon vos besoins
    $caracteresPossibles = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $motDePasseAleatoire = '';
    for ($i = 0; $i < $longueurMotDePasse; $i++) {
        $motDePasseAleatoire .= $caracteresPossibles[rand(0, strlen($caracteresPossibles) - 1)];
    }

    // Hashage du mot de passe
    $motDePasseHash = password_hash($motDePasseAleatoire, PASSWORD_DEFAULT);

    // Enregistrement dans un fichier
    $userData = "Login: " . $login . "\n";
    $userData .= "Nom: " . $nom . "\n";
    $userData .= "Prénom: " . $prenom . "\n";
    $userData .= "Adresse e-mail: " . $email . "\n";
    $userData .= "Mot de passe: " . $motDePasseHash . "\n";

    file_put_contents($filename, $userData);

    echo "Inscription réussie.";
    header("Location: authentification.php");
    exit();
}
