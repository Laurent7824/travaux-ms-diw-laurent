<?php
// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse_mail = $_POST['adresse_mail'];
$mot_de_passe = $_POST['mot_de_passe'];

// Vérifier si l'adresse mail est déjà utilisée
$users = file('users.txt');
foreach ($users as $user) {
    $user_data = explode('|', $user);
    if ($user_data[2] === $adresse_mail) {
        die("Cette adresse mail est déjà enregistrée.");
    }
}

// Hasher le mot de passe avant de l'enregistrer
$mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

// Afficher le mot de passe haché et sa longueur
echo "Mot de passe haché : $mot_de_passe_hash<br>";
echo "Nombre de caractères : " . strlen($mot_de_passe_hash) . "<br>";

// Enregistrer les données dans le fichier des utilisateurs
$user_data = "$nom|$prenom|$adresse_mail|$mot_de_passe_hash\n";
file_put_contents('users.txt', $user_data, FILE_APPEND);

echo "Inscription réussie !";
