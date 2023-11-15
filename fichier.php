<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $adresse = $_POST["adresse"];
    $produit = $_POST["produit"];
    $prix = $_POST["prix"];

    // Créer une chaîne de texte avec les données séparées par des virgules
    $commande_texte = "$nom, $adresse, $produit, $prix";

    // Chemin du fichier où stocker les données de commande
    $fichier_commande = "commandes.txt";

    // Chemin du dossier de sauvegarde
    $dossier_sauvegarde = "sauvegarde/";

    // Écrire les données de commande dans le fichier
    if (file_put_contents($fichier_commande, $commande_texte . PHP_EOL, FILE_APPEND | LOCK_EX)) {
        // Créer une copie de sauvegarde dans le dossier spécifié
        if (!is_dir($dossier_sauvegarde)) {
            mkdir($dossier_sauvegarde, 0777, true);
        }
        $fichier_sauvegarde = $dossier_sauvegarde . date("Y-m-d_H-i-s") . "_commande.txt";
        copy($fichier_commande, $fichier_sauvegarde);

        echo "Commande enregistrée avec succès. Une copie de sauvegarde a été créée.";
    } else {
        echo "Erreur lors de l'enregistrement de la commande.";
    }
}
?>