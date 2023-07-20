<?php
// Vérifiez si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenez les données du formulaire et assainissez-les
    $societe = isset($_POST["societe"]) ? htmlspecialchars($_POST["societe"]) : "";
    $personne = isset($_POST["personne"]) ? htmlspecialchars($_POST["personne"]) : "";
    $codepostal = isset($_POST["codepostal"]) ? htmlspecialchars($_POST["codepostal"]) : "";
    $ville = isset($_POST["ville"]) ? htmlspecialchars($_POST["ville"]) : "";
    $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "";
    $telephone = isset($_POST["telephone"]) ? htmlspecialchars($_POST["telephone"]) : "";
    $selection = isset($_POST["selection"]) ? htmlspecialchars($_POST["selection"]) : "";
    $environnement = isset($_POST["environnement"]) ? htmlspecialchars($_POST["environnement"]) : "";

    // Vous pouvez effectuer d'autres validations ou opérations sur la base de données ici

    // Pour cet exemple, affichons simplement les données soumises
    echo "Société : " . $societe . "<br>";
    echo "Personne à contacter : " . $personne . "<br>";
    echo "Code postal : " . $codepostal . "<br>";
    echo "Ville : " . $ville . "<br>";
    echo "Email : " . $email . "<br>";
    echo "Téléphone : " . $telephone . "<br>";
    echo "Sélection environnement technique : " . $selection . "<br>";
    echo "Environnement technique du projet : " . $environnement . "<br>";
}
?>
