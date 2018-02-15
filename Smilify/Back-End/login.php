<?php
/**
 * Created by PhpStorm.
 * User: theodoreyip
 * Date: 14/02/2018
 * Time: 06:23
 */
require 'adminUnset.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Front-End/css/reset.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="../Front-End/css/style.css" type="text/css" charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,800" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<div class="formContainer">
<form class="form" action="dologin.php" method="post">

    <h1 class="adminLoginTitle">Please enter the admin password</h1>
    <input id="password" autocomplete="off" type="password" name="password" value="" placeholder="Password" autofocus>

    <input type="submit" name="" value="Submit">

</form>
</div>

</body>
</html>