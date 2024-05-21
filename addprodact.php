<?php

require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom_produit = $_POST['nom_produit'];
    $prix_produit = $_POST['prix_produit'];
    $description_produit = $_POST['description_produit'];

    $sql = "INSERT INTO produits (nom, prix, description) VALUES ('$nom_produit', '$prix_produit', '$description_produit')";

    if (mysqli_query($conn, $sql)) {
        echo "Le produit a été ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout du produit : " . mysqli_error($conn);
    }
} else {
    echo "Erreur : veuillez soumettre le formulaire.";
}

mysqli_close($conn);
?>
