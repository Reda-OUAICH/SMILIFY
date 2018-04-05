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

//Check the password
if (!isset($_POST['password']) || !password_verify($_POST['password'], $admin['password'])) {
    header('Location: ../index.php?error=nop');
    exit;
} else {
    session_start();
    $_SESSION['admin'] = 'yes';
    header('Location: index.php?message=Welcome');
    exit;
}