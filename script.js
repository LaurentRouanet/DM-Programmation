document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const identifiantInput = document.getElementById("identifiant");
    const passwordInput = document.getElementById("password");
    const emailInput = document.getElementById("email");
    const emailConfirmInput = document.getElementById("email-confirm");
  
    form.addEventListener("submit", function (e) {
      // Vérification de l'identifiant
      const identifiant = identifiantInput.value.trim();
      if (identifiant === "") {
        e.preventDefault(); // Empêche la soumission du formulaire
        alert("L'identifiant est obligatoire.");
        return;
      }
  
      // Vérification du mot de passe (au moins 6 caractères)
      const password = passwordInput.value;
      if (password.length < 6) {
        e.preventDefault();
        alert("Le mot de passe doit comporter au moins 6 caractères.");
        return;
      }
  
      // Vérification des adresses email (identiques)
      const email = emailInput.value.trim();
      const emailConfirm = emailConfirmInput.value.trim();
      if (email === "" || emailConfirm === "") {
        e.preventDefault();
        alert("Les adresses email doivent être remplies.");
        return;
      }
      if (email !== emailConfirm) {
        e.preventDefault();
        alert("Les adresses email ne correspondent pas.");
      }
    });
  });
  "Ce code ajoute des écouteurs d événements pour intercepter la soumission du formulaire. Il effectue des vérifications côté client pour l'identifiant, le mot de passe et l'email. Si l'une de ces vérifications échoue, il empêche la soumission du formulaire et affiche une alerte pour informer l'utilisateur des problèmes."
  "N'oubliez pas que la validation côté client nest que la première étape de la sécurité d'un formulaire. Vous devrez également effectuer des vérifications côté serveur pour garantir la sécurité des données, car la validation côté client peut être contournée par des utilisateurs malveillants."
  
  
  
  
  