<?php
require_once "checkAdmin.php";

//Check if you filled up all the fields
if ( ($_POST['title']==='') || ($_POST['category']==='- -') || ($_POST['displayable']==='- -') || ($_POST['src']==='- -')) {
    header('Location: index.php?error=Missing field');
    exit;
}
require_once "connexion.php";

//Select the fields which need to be fill up
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

