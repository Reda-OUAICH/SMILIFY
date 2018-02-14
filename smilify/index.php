<?php

require_once 'Back End/adminUnset.php';


if (isset($_GET['error'])) {
    ?>
    <div style="color: red; font-size: 35px"><?=$_GET['error']?></div>
    <?php
}

require_once "Back End/connexion.php";
$requete = "SELECT 
  `id`,
  `title`, 
  `category`, 
  `displayable` 
FROM 
  `Gifs`
WHERE
  `displayable` = :id
ORDER BY RAND()
LIMIT 1
;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':id', 'Yes');
$stmt->execute();


while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
    <?php //var_dump($row); ?>
    <img src="Front End/css/image/<?=$row["title"]?>.gif" alt="">
<?php endwhile;?>

<a href="Back%20End/login.php">login</a>
<a href="Back%20End/index.php">le back</a>