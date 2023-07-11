// Fonction pour générer un nombre aléatoire entre 1 et 100
function generateRandomNumber() {
    return Math.floor(Math.random() * 100) + 1;
  }
  
  // Fonction pour vérifier la proposition de l'utilisateur
  function verif() {
    // Récupérer la valeur saisie par l'utilisateur
    var userInput = parseInt(document.getElementById("textBox1").value);
  
    // Générer le nombre magique
    var magicNumber = generateRandomNumber();
  
    // Vérifier la proposition de l'utilisateur
    if (userInput === magicNumber) {
      document.getElementById("label1").textContent = "Félicitations ! Vous avez trouvé le nombre magique.";
    } else if (userInput < magicNumber) {
      document.getElementById("label1").textContent = "Trop petit. Essayez encore.";
    } else {
      document.getElementById("label1").textContent = "Trop grand. Essayez encore. Le nombre magique était " + magicNumber + ".";
    }
  }
  
  // Ajouter un écouteur d'événement au bouton de vérification
  document.getElementById("button1").addEventListener("click", verif);
4  