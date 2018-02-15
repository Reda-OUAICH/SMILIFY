<?php
require_once "checkAdmin.php";

if ( ($_POST['title']==='') || ($_POST['category']==='- -') || ($_POST['displayable']==='- -') || ($_POST['src']==='- -')) {
    header('Location: index.php?error=Missing field');
    exit;
}
require_once "connexion.php";
$requete = "INSERT INTO 
`Gifs` 
( `title`, `category`, `displayable`, `src`)
VALUES 
(:title, :category, :displayable, :src)
;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':title', htmlentities($_POST['title']));
$stmt->bindValue(':category', $_POST['category']);
$stmt->bindValue(':displayable', $_POST['displayable']);
$stmt->bindValue(':src', $_POST['src']);
$stmt->execute();

header('Location: index.php');
exit;

