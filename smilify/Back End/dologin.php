<?php

require_once "connexion.php";
$requete = "SELECT 
  `password`
FROM 
  `Admin`
;";
$stmt = $conn->prepare($requete);
$stmt->execute();
$admin = $stmt->fetch(PDO::FETCH_ASSOC);


if (!isset($_POST['password']) || ($_POST['password'])!==$admin['password']) {
    session_start();
    unset($_SESSION['admin']);
    header('Location: ../index.php?error=nop');
    exit;
} else {
    session_start();
    $_SESSION['admin'] = 'yes';
    header('Location: index.php?error=Welcome');
    exit;
}