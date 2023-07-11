// Fonctionement du formulaire de commande

document.getElementById('myForm').addEventListener('submit', function (event) {
    var nomPrenom = document.getElementById('nomPrenom');
    var telephone = document.getElementById('telephone');
    var email = document.getElementById('email');
    var adresse = document.getElementById('adresse');

    var nomPrenomError = document.getElementById('nomPrenomError');
    var telephoneError = document.getElementById('telephoneError');
    var emailError = document.getElementById('emailError');
    var adresseError = document.getElementById('adresseError');

    var formIsValid = true; // Ajout de cette variable pour vérifier si le formulaire est valide

    var nomPrenomRegex = /^[a-zA-Z]+\s[a-zA-Z]+$/; // Format : Lettres + Espace + Lettres
    var telephoneRegex = /^\d{10}$/; // Format : 10 chiffres
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Format : Email valide

    if (nomPrenom.value.trim() === '') {
        nomPrenomError.innerText = 'Veuillez saisir votre Nom et Prénom valide.';
        formIsValid = false; // Le formulaire n'est pas valide
    } else if (!nomPrenomRegex.test(nomPrenom.value.trim())) {
        nomPrenomError.innerText = 'Le format du Nom et Prénom est invalide.';
        formIsValid = false; // Le formulaire n'est pas valide
    } else {
        nomPrenomError.innerText = '';
    }

    if (telephone.value.trim() === '') {
        telephoneError.innerText = 'Veuillez saisir votre numéro de téléphone valide.';
        formIsValid = false; // Le formulaire n'est pas valide
    } else if (!telephoneRegex.test(telephone.value.trim())) {
        telephoneError.innerText = 'Le format du Téléphone est invalide.';
        formIsValid = false; // Le formulaire n'est pas valide
    } else {
        telephoneError.innerText = '';
    }

    if (email.value.trim() === '') {
        emailError.innerText = 'Veuillez rentrer votre Email valide.';
        formIsValid = false; // Le formulaire n'est pas valide
    } else if (!emailRegex.test(email.value.trim())) {
        emailError.innerText = 'Le format de l\'Email est invalide.';
        formIsValid = false; // Le formulaire n'est pas valide
    } else {
        emailError.innerText = '';
    }

    if (adresse.value.trim() === '') {
        adresseError.innerText = 'Veuillez rentrer votre adresse valide.';
        formIsValid = false; // Le formulaire n'est pas valide
    } else {
        adresseError.innerText = '';
    }

    if (formIsValid) {
        // Tous les champs sont valides, afficher une fenêtre de dialogue
        alert('Formulaire soumis avec succès !!!');
    } else {
        event.preventDefault(); // Empêche l'envoi du formulaire si des champs sont vides ou au mauvais format
    }
});

//Fonctionement du Carrousel

var myCarousel = document.getElementById('#carouselCategorieControls');
var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 1000, // Temps de défilement entre les images (en millisecondes)
    wrap: true // Permet de boucler le carrousel
});



