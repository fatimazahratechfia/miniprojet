<?php

require_once 'db.php';

if(isset($_POST['id_produit'])) {
    $id_produit = $_POST['id_produit'];
} elseif(isset($_GET['id_produit'])) {
    $id_produit = $_GET['id_produit'];
} else {
    echo "Erreur : ID du produit non spécifié.";
    exit;
}

$sql = "DELETE FROM produits WHERE id = $id_produit";

if (mysqli_query($conn, $sql)) {
    echo "Le produit a été supprimé avec succès.";
} else {
    echo "Erreur lors de la suppression du produit : " . mysqli_error($conn);
}

mysqli_close($conn);
?>