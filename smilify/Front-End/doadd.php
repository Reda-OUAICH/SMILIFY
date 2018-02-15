<?php


if ( ($_POST['title']==='') || ($_POST['category']==='- -') || ($_POST['displayable']==='- -') || ($_POST['src']==='- -')) {
    header('Location: ../index.php?error=Missing field');
    exit;
}
require_once "../Back-End/connexion.php";
$requete = "INSERT INTO 
`NewGifs` 
( `title`, `category`, `displayable`, `src`)
VALUES 
(:title, :category, :displayable, :src)
;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':category', $_POST['category']);
$stmt->bindValue(':displayable', $_POST['displayable']);
$stmt->bindValue(':src', $_POST['src']);
$stmt->execute();
header('Location: ../index.php?error=Thanks :)');
exit;

