
// Supprimer un produit du panier
const removeButtons = document.querySelectorAll('.btn-remove');
removeButtons.forEach(button => {
    button.addEventListener('click', () => {
        button.closest('tr').remove();
        updateTotalPrice();
    });
});

// Mettre à jour le prix total en fonction de la quantité
const quantityInputs = document.querySelectorAll('input[type="number"]');
quantityInputs.forEach(input => {
    input.addEventListener('input', () => {
        updateTotalPrice();
    });
});

function updateTotalPrice() {
    let totalPrice = 0;
    const rows = document.querySelectorAll('tbody tr');
    rows.forEach(row => {
        const quantity = parseInt(row.querySelector('input[type="number"]').value);
        const price = parseFloat(row.querySelector('td:nth-child(4)').textContent);
        const total = quantity * price;
        row.querySelector('td:nth-child(5)').textContent = total.toFixed(2) + '€';
        totalPrice += total;
    });
    document.getElementById('total-price').textContent = totalPrice.toFixed(2);
}

function validerCommande() {
    // Vérifier si le panier est valide (par exemple, s'il contient au moins un produit)
    const rows = document.querySelectorAll('tbody tr');
    if (rows.length > 0) {
        // Panier valide, afficher une fenêtre de dialogue avec un message de succès
        alert("Commande envoyée avec succès !");
        document.getElementById('error-message').textContent = "";
    } else {
        // Panier invalide, afficher un message d'erreur
        document.getElementById('error-message').textContent = "Le panier est vide. Veuillez ajouter des produits avant de valider la commande !!!";
    }
}


