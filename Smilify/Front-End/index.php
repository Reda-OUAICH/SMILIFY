<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css" type="text/css" charset="utf-8">
  <link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,800" rel="stylesheet">
  <title>Smilify</title>
</head>

<body>

  <header class="header">
    <img class="header-navLogoImg" src="./css/logo/logo.svg" alt="">
    <ul class="header-navListItem">
      <li class="header-navItem">
        <a href="animals.html" class="header-navItemLink">#Animals</a>
      </li>
      <li class="header-navItem">
        <a href="trump.html" class="header-navItemLink">#Trump</a>
      </li>
      <li class="header-navItem">
        <a href="creepy.html" class="header-navItemLink">#Creepy</a>
      </li>
      <li class="header-navItem">
        <a href="anime.html" class="header-navItemLink">#Anime</a>
      </li>
      <li class="header-navItem">
        <a href="all.html" class="header-navItemLink">#All</a>
      </li>
      <li class="header-navItem">
        <img class="header-navItemPlus" src="./css/image/add-button.svg" alt="">
        <a href="+" class="header-navItemLink-Plus"></a>
      </li>
    </ul>
  </header>


  <h1 class="section-gifTitle">Titre</h1>


  <div class="section-gif">
    <?php

require_once '../Back-End/adminUnset.php';


if (isset($_GET['error'])) {
    ?>
    <div style="color: red; font-size: 35px"><?=$_GET['error']?></div>
    <?php
}

require_once "../Back-End/connexion.php";
$requete = "SELECT 
  `id`,
  `title`, 
  `category`, 
  `displayable` 
FROM 
  `Gifs`
WHERE
  `displayable` = :displayable
ORDER BY RAND()
;";
$stmt = $conn->prepare($requete);
    $stmt->bindValue(':displayable', 'Yes');
    $stmt->execute();



    $gifs = [];
    $gifIndex = 0;

    while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):
    $gifs[] = $row;
    endwhile;?>

      <img class="gif" src="css/image/<?=$gifs[$gifIndex]["title"]?>.gif" alt="">
  </div>


</body>

</html>