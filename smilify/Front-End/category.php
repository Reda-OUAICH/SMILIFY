<?php

require_once '../Back-End/adminUnset.php';

if (!isset($_GET['category'])) {
    header('Location: index.php?error=missing data');
    exit;
}

require_once "../Back-End/connexion.php";

if ($_GET['category'] === 'All') {
    $requete = "SELECT 
      `src`
    FROM 
      `Gifs`
    ORDER BY RAND()
    ;";
    $stmt = $conn->prepare($requete);
    $stmt->execute();
} else {
    $requete = "SELECT 
      `src`
    FROM 
      `Gifs`
    WHERE
    `category` = :category
    ORDER BY RAND()
    ;";
    $stmt = $conn->prepare($requete);
    $stmt->bindValue(':category', $_GET['category']);
    $stmt->execute();
}



$cols = [[], [], []];
$i = 0;
?>

<?php
while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $cols[$i][] = $row;
    if ($i < 2) {
        $i ++;
    } else {
        $i = 0;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css" type="text/css" charset="utf-8">
  <link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,800" rel="stylesheet">
  <title>Smilify - Animals</title>
</head>

<body>
<section class="mainSection">
  <a class="backBtn" href="../index.php">
    BACK
  </a>
  <h1 class="titles"><span class="blueHashtag">#</span><?= $_GET['category'] ?></h1>

  <div class="gifContainer">
      <?php foreach ($cols as $col) { ?>
          <div class="boxLeft">
              <?php foreach ($col as $img) { ?>
                  <?php
                  if (substr($img["src"], 0, 5) == 'https') { ?>
                      <img class="img" src="<?=$img["src"]?>" alt="">
                  <?php } else {?>
                      <img class="img" src="<?=$img["src"]?>.gif" alt="">
                  <?php } ?>
              <?php } ?>
          </div>
      <?php } ?>
  </div>




</body>

</html>

<?php
