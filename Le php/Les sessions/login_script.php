<?php
session_start();

// Vérifier les identifiants
$login = $_POST['login'];
$password = $_POST['password'];

// Vérification basique (à personnaliser selon les besoins)
if ($login === 'pruvot.laurent80@orange.fr' && $password === 'afpa') {
    // Authentification réussie
    $_SESSION['auth'] = 'ok';
} else {
    // Authentification échouée
    unset($_SESSION['auth']);
}

// Redirection vers la page appropriée
if (isset($_SESSION['auth']) && $_SESSION['auth'] === 'ok') {
    header('Location: page_protegee.php');
} else {
    header('Location: login_form.php');
}
?>
