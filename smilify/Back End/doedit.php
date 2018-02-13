<?php
/**
 * Created by PhpStorm.
 * User: TomTom
 * Date: 13/02/2018
 * Time: 16:19
 */
if (!isset($_POST['id']) || ($_POST['title']==='') || ($_POST['category']==='- -') || ($_POST['displayable']==='- -') ) {
    header('Location: index.php?error=not accepted :\'(');
    exit;
}
require_once "connexion.php";
$requete = "UPDATE 
  `Gifs` 
SET 
  `title` = :title, 
  `category` = :category, 
  `displayable` = :displayable
WHERE 
id = :id
;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':category', $_POST['category']);
$stmt->bindValue(':displayable', $_POST['displayable']);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
header('Location: index.php?error=OK');
