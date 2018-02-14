<?php
/**
 * Created by PhpStorm.
 * User: theodoreyip
 * Date: 14/02/2018
 * Time: 06:42
 */

session_start();
//var_dump($_SESSION['admin']);
if (!isset($_SESSION['admin']) || ($_SESSION['admin'])!=='yes') {
    header('Location: ../index.php?error=not permitted');
    exit;
}