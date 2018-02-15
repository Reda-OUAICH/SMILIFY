<?php
require_once "checkAdmin.php";

if (!isset($_POST['id']) || ($_POST['title']==='') || ($_POST['category']==='- -') || ($_POST['displayable']==='- -') || ($_POST['src']==='- -')) {
    header('Location: index.php?error=not accepted :\'(');
    exit;
}
require_once "connexion.php";
$requete = "UPDATE 
  `Gifs` 
SET 
  `title` = :title, 
  `category` = :category, 
  `displayable` = :displayable,
  `src` = :src
WHERE 
id = :id
;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':title', htmlentities($_POST['title']));
$stmt->bindValue(':category', $_POST['category']);
$stmt->bindValue(':displayable', $_POST['displayable']);
$stmt->bindValue(':src', htmlentities($_POST['src']));
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
header('Location: index.php?message=OK');
exit;
