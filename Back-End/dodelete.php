<?php
require_once "checkAdmin.php";

//If the id doesn't exist redirection to ERROR
if (!isset($_GET['id'])) {
    header('Location: index.php?error=nopostdatadelete');
    exit;
}
require_once "connexion.php";

//Select the line which need to be deleted
$requete = "DELETE FROM 
`Gifs` 
WHERE 
id = :id;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
header('Location: index.php');
exit;