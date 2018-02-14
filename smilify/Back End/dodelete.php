<?php
require_once "checkAdmin.php";

if (!isset($_GET['id'])) {
    header('Location: index.php?error=nopostdatadelete');
    exit;
}
require_once "connexion.php";
$requete = "DELETE FROM 
`Gifs` 
WHERE 
id = :id;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
header('Location: index.php');
