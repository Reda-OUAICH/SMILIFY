<?php

require_once 'Back-End/adminUnset.php';


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
endwhile;
?>




<a href="Back-End/login.php">login</a>
