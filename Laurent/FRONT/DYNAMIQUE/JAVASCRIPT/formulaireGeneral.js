const form = document.getElementById("myForm");
const emailInput = document.getElementById("email");
const emailError = document.getElementById("emailError");
const telephoneInput = document.getElementById("telephone");
const telephoneError = document.getElementById("telephoneError");

form.addEventListener("submit", function (event) {
    event.preventDefault();
    if (validateForm()) {
        alert("Formulaire envoyé avec succès !!!");
        // Ici, vous pouvez ajouter le code pour envoyer le formulaire
    }
});

function validateForm() {
    const inputs = form.querySelectorAll("input, textarea");
    let isValid = true;

    inputs.forEach(input => {
        if (input.value.trim() === "") {
            input.classList.add("error");
            isValid = false;
        } else {
            input.classList.remove("error");
        }
    });

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(emailInput.value.trim())) {
        emailInput.classList.add("error");
        emailError.classList.remove("d-none");
        isValid = false;
    } else {
        emailInput.classList.remove("error");
        emailError.classList.add("d-none");
    }

    const telephoneRegex = /^\d{10}$/;
    if (!telephoneRegex.test(telephoneInput.value.trim())) {
        telephoneInput.classList.add("error");
        telephoneError.classList.remove("d-none");
        isValid = false;
    } else {
        telephoneInput.classList.remove("error");
        telephoneError.classList.add("d-none");
    }

    return isValid;
}