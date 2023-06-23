const form = document.getElementById('myForm');
        const successMessage = document.getElementById('successMessage');

        form.addEventListener('submit', function (event) {
            event.preventDefault();
            if (validateForm()) {
                alert(successMessage.textContent = "Formulaire soumis avec succès !!!");
                form.reset();
            } else {
                successMessage.textContent = "";
            }
        });

        function validateForm() {
            let isValid = true;
            const nameInput = document.getElementById('name');
            const telInput = document.getElementById('tel');
            const emailInput = document.getElementById('email');
            const addressInput = document.getElementById('address');

            const nameError = document.getElementById('nameError');
            const telError = document.getElementById('telError');
            const emailError = document.getElementById('emailError');
            const addressError = document.getElementById('addressError');

            nameError.textContent = "";
            telError.textContent = "";
            emailError.textContent = "";
            addressError.textContent = "";

            if (nameInput.value.trim() === "") {
                nameError.textContent = "Veuillez saisir votre nom et prénom valide";
                isValid = false;
            }

            if (telInput.value.trim() === "") {
                telError.textContent = "Veuillez saisir votre numéro de téléphone valide";
                isValid = false;
            }

            if (emailInput.value.trim() === "") {
                emailError.textContent = "Veuillez saisir votre adresse email valide";
                isValid = false;
            } else if (!isValidEmail(emailInput.value.trim())) {
                emailError.textContent = "Veuillez saisir une adresse email valide";
                isValid = false;
            }

            if (addressInput.value.trim() === "") {
                addressError.textContent = "Veuillez saisir votre adresse valide";
                isValid = false;
            }

            return isValid;
        }

        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }