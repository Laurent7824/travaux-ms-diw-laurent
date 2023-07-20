<?php
// Récupération des données du formulaire
$email = $_POST['email'];
$motDePasse = $_POST['mot_de_passe'];

// Chemin vers le fichier utilisateur
$dataFolder = "data/";
$filename = $dataFolder . $email . ".txt";

if (file_exists($filename)) {
    // Lecture du fichier utilisateur
    $userData = file_get_contents($filename);
    $lines = explode("\n", $userData);

    // Extraction du mot de passe hashé
    $motDePasseHash = "";
    foreach ($lines as $line) {
        if (strpos($line, $motDePasse) !== false) {
            $motDePasseHash = trim(str_replace("Mot de passe:", "", $line));
            break;
        }
    }

    if (password_verify($motDePasse, $motDePasseHash)) {
        echo "Authentification réussie.";
    } else {
        echo "Identifiants incorrects.";
    }
} else {
    echo "Utilisateur non trouvé. <a href='inscription.php'>Réessayer</a>";
}
?>