<?php
require_once "checkAdmin.php";

if ( ($_POST['title']==='') || ($_POST['category']==='- -') || ($_POST['displayable']==='- -')) {
    header('Location: index.php?error=Missing field');
    exit;
}
require_once "connexion.php";
$requete = "INSERT INTO 
`Gifs` 
( `title`, `category`, `displayable` )
VALUES 
(:title, :category, :displayable)
;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':category', $_POST['category']);
$stmt->bindValue(':displayable', $_POST['displayable']);
$stmt->execute();
header('Location: index.php');