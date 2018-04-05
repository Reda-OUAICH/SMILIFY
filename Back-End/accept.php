<?php
require_once "checkAdmin.php";

if (!isset($_GET['action'])) {
    header('Location: index.php?error=Missing field');
    exit;
}
require_once "connexion.php";

if ($_GET['action'] === 'accept') {

    if (!isset($_GET['id']) || ($_GET['title']==='') || ($_GET['category']==='- -') || ($_GET['displayable']==='- -') || ($_GET['src']==='- -')) {
        header('Location: index.php?error=Missing field');
        exit;
    }

    $requete = "INSERT INTO 
    `Gifs` 
    ( `title`, `category`, `displayable`, `src`)
    VALUES 
    (:title, :category, :displayable, :src)
    ;";
    $stmt = $conn->prepare($requete);
    $stmt->bindValue(':title', htmlentities($_GET['title']));
    $stmt->bindValue(':category', $_GET['category']);
    $stmt->bindValue(':displayable', $_GET['displayable']);
    $stmt->bindValue(':src', htmlentities($_GET['src']));
    $stmt->execute();
}

$requete2 = "DELETE FROM 
`NewGifs` 
WHERE 
id = :id;";
$stmt2 = $conn->prepare($requete2);
$stmt2->bindValue(':id', $_GET['id']);
$stmt2->execute();

header('Location: index.php?message=Done');
exit;