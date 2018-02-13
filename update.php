<?php
require_once "connexion.php";
$requete = "SELECT 
  `id`, 
  `nom`, 
  `marque` 
FROM 
  `garage`
WHERE
  `id` = :id
;";
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
<form class="form" action="doadd.php" method="post">


    <label for="title">Title: </label>
    <input type="text" name="title" value="<?=$_GET['id']?>">

    <label for="category">Category: </label>
    <select class="" name="category">
        <option value="- -">- -</option>
        <option value="Animals">Animals</option>
        <option value="Trump">Trump</option>
        <option value="Creepy">Creepy</option>
        <option value="Anime">Anime</option>
        <option value="-">-</option>
    </select>

    <label for="displayable">Displayable: </label>
    <select class="" name="displayable">
        <option value="- -">- -</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>

    <input type="submit" name="" value="Submit">

</form>
<a href="index.php"><button><-</button></a>

</body>
</html>





<?php
if (!isset($_GET['id'])) {
    header('Location: index.php?error=noidprovidededit');
    exit;
}
require_once "connexion.php";
$requete = "SELECT 
  `id`, 
  `nom`, 
  `marque` 
FROM 
  `garage`
WHERE
  `id` = :id
;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un garage</title>
</head>
<body>
<?php
require "header.php";
?>
<form action="doedit.php" method="post">
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
    <label for="nom">Nom</label> <input type="text" name="nom" value="<?=$row['nom']?>"><br>
    <label for="marque">Marque</label> <input type="text" name="marque" value="<?=$row['marque']?>"><br>
    <input type="submit" value="Ajouter">
</form>
</body>
</html>