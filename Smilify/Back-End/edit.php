<?php
require_once "checkAdmin.php";

if (!isset($_GET['id'])) {
    header('Location: index.php?error=noidprovidededit');
    exit;
}
require_once "connexion.php";
$requete = "SELECT 
  `id`, 
  `title`, 
  `category`,
  `displayable`,
  `src`
FROM 
  `Gifs`
WHERE
  `id` = :id
;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style media="screen">
        label {
            margin-left: 20px;
        }
    </style>
</head>
<body>



<form class="form" action="doedit.php" method="post">
    <input type="hidden" name="id" value="<?=$row['id']?>">

    <label for="title">Title: </label>
    <input id="title" type="text" name="title" value="<?=$row["title"]?>">

    <?php require_once 'optionGen.php' ?>

    <label for="src">Src: </label>
    <input id="src" type="src" name="src" value="<?=$row["src"]?>">

    <input type="submit" name="" value="Edit">

</form>
<a href="index.php"><button><-</button></a>

</body>
</html>



