// Récupération des éléments du formulaire
const form = document.getElementById("myForm"); // Le formulaire
const emailInput = document.getElementById("email"); // Champ d'entrée pour l'adresse e-mail
const emailError = document.getElementById("emailError"); // Élément pour afficher l'erreur de l'adresse e-mail
const telephoneInput = document.getElementById("telephone"); // Champ d'entrée pour le numéro de téléphone
const telephoneError = document.getElementById("telephoneError"); // Élément pour afficher l'erreur du numéro de téléphone
const inputs = form.querySelectorAll("input, textarea"); // Sélection de tous les champs de saisie et zones de texte du formulaire
let isValid = true; // Variable pour suivre la validité globale du formulaire

// Ajout d'un écouteur d'événement sur la soumission du formulaire
form.addEventListener("submit", validateForm);
 
    // Vérification de la validité du formulaire
    // if (validateForm()) {
    //     alert("Formulaire envoyé avec succès !!!");
        // Ici, vous pouvez ajouter le code pour envoyer le formulaire à votre serveur ou autre traitement.
    // }


// Fonction pour valider le formulaire
function validateForm(e) {
    e.preventDefault(); // Empêche l'envoi du formulaire par défaut
  
        // Parcourir chaque champ de saisie pour vérifier s'il est vide ou non
        inputs.forEach(input => {
            if (input.value.trim() === "") { // Si le champ est vide (après suppression des espaces avant et après)
                input.classList.add("error"); // Ajout de la classe "error" pour appliquer un style d'erreur
                isValid = false; // Le formulaire n'est pas valide car il y a au moins un champ vide
            } else {
                input.classList.remove("error"); // Suppression de la classe "error" si le champ n'est pas vide
            }
        });
    
    
    // if (validateForm()) {
    //     alert("Formulaire envoyé avec succès !!!");
        // Ici, vous pouvez ajouter le code pour envoyer le formulaire à votre serveur ou autre traitement.
    // }


    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Expression régulière pour vérifier le format de l'adresse e-mail

    // Vérification du champ d'adresse e-mail avec l'expression régulière
    if (!emailRegex.test(emailInput.value.trim())) {
        emailInput.classList.add("error"); // Ajout de la classe "error" pour indiquer une erreur dans le champ d'e-mail
        emailError.classList.remove("d-none"); // Affichage de l'élément d'erreur lié à l'adresse e-mail
        isValid = false; // Le formulaire n'est pas valide car l'adresse e-mail est incorrecte
    } else {
        emailInput.classList.remove("error"); // Suppression de la classe "error" si l'adresse e-mail est valide
        emailError.classList.add("d-none"); // Masquage de l'élément d'erreur lié à l'adresse e-mail
    }

    const telephoneRegex = /^\d{10}$/; // Expression régulière pour vérifier le format du numéro de téléphone (10 chiffres)

    // Vérification du champ de numéro de téléphone avec l'expression régulière
    if (!telephoneRegex.test(telephoneInput.value.trim())) {
        telephoneInput.classList.add("error"); // Ajout de la classe "error" pour indiquer une erreur dans le champ de téléphone
        telephoneError.classList.remove("d-none"); // Affichage de l'élément d'erreur lié au numéro de téléphone
        isValid = false; // Le formulaire n'est pas valide car le numéro de téléphone est incorrect
    } else {
        telephoneInput.classList.remove("error"); // Suppression de la classe "error" si le numéro de téléphone est valide
        telephoneError.classList.add("d-none"); // Masquage de l'élément d'erreur lié au numéro de téléphone
    }
    alert("Formulaire envoyé avec succès !!!");

    return isValid; // Renvoie true si le formulaire est valide, sinon false
}

