<?php

require_once 'db.php';

$sql = "SELECT * FROM produits";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Erreur lors de la récupération des produits : " . mysqli_error($conn));
}

$products = array();

while ($row = mysqli_fetch_assoc($result)) {
    $products[] = $row;
}

echo json_encode($products);

mysqli_close($conn);
?>
