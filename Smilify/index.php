<?php

require 'Back-End/adminUnset.php';


if (isset($_GET['error'])) {
    ?>
    <div style="color: red; font-size: 35px"><?=$_GET['error']?></div>
    <?php
}

require_once "Back-End/connexion.php";
$requete = "SELECT 
  `id`,
  `title`, 
  `category`, 
  `displayable`,
  `src`
FROM 
  `Gifs`
ORDER BY RAND()
LIMIT 1
;";
$stmt = $conn->prepare($requete);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Front-End/css/reset.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="Front-End/css/style.css" type="text/css" charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,800" rel="stylesheet">

    <title>Smilify</title>
    <style>
        body{
            cursor: url("/Front-End/css/image/cursor.png") 22 22, auto;}
    </style>
</head>

<body>

<header class="header">
    <img class="header-navLogoImg" src="./Front-End/css/logo/logo.svg" alt="">
    <ul class="header-navListItem">
        <li class="header-navItem">
            <a href="Front-End/category.php?category=Animals" class="header-navItemLink"><span class="blueHashtag">#</span>Animals</a>
        </li>
        <li class="header-navItem">
            <a href="Front-End/category.php?category=Trump" class="header-navItemLink"><span class="blueHashtag">#</span>Trump</a>
        </li>
        <li class="header-navItem">
            <a href="Front-End/category.php?category=Creepy" class="header-navItemLink"><span class="blueHashtag">#</span>Creepy</a>
        </li>
        <li class="header-navItem">
            <a href="Front-End/category.php?category=Anime" class="header-navItemLink"><span class="blueHashtag">#</span>Anime</a>
        </li>
        <li class="header-navItem">
            <a href="Front-End/category.php?category=All" class="header-navItemLink"><span class="blueHashtag">#</span>All</a>
        </li>
        <li class="header-navItem">
            <a href="Front-End/add.php" class="header-navItemLink-Plus">
                <img class="header-navItemPlus" src="./Front-End/css/image/add-button.svg" alt="">
            </a>
        </li>
    </ul>
</header>

<div class="sectionContainer">
    <h1 class="section-gifTitle"><?=$row["title"]?></h1>
    <div class="section-gif">
        <?php
        if (substr($row["src"], 0, 5) == 'https') { ?>
            <img class="gif" src="<?=$row["src"]?>" alt="">
        <?php } else {?>
            <img class="gif" src="Front-End/<?=$row["src"]?>.gif" alt="">
        <?php } ?>

    </div>
</div>

<script>
    window.addEventListener('click', function() {
        document.location.reload()
    })


    var saucisse = 0;

    window.addEventListener('keyup', function(event) {
        if (saucisse != 8) {
            switch (event.which) {
                case 83: if (saucisse==0 || saucisse==5 || saucisse==6) {saucisse++; break;} else {saucisse=0;}
                case 65: if (saucisse==1) {saucisse++; break;} else {saucisse=0;}
                case 85: if (saucisse==2) {saucisse++; break;} else {saucisse=0;}
                case 67: if (saucisse==3) {saucisse++; break;} else {saucisse=0;}
                case 73: if (saucisse==4) {saucisse++; break;} else {saucisse=0;}
                case 69: if (saucisse==7) {saucisse++;
                    login()
                    saucisse=0
                    break;} else {saucisse=0;}
                default: saucisse=0;
            }
        }
    })

    function login() {
        window.location.replace('Back-End/login.php')
    }




</script>


</body>

</html>