<?php

$host = "localhost";
$user = 'root';
$password = 'root';
$database = 'botique';

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}
?>