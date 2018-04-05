<?php
/**
 * Created by PhpStorm.
 * User: theodoreyip
 * Date: 14/02/2018
 * Time: 06:42
 */


//Check if you are the admin and allow you to use the CRUD
session_start();

if (!isset($_SESSION['admin']) || ($_SESSION['admin'])!=='yes') {
    header('Location: ../index.php?error=not permitted');
    exit;
}