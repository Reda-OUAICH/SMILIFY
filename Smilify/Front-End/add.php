<?php
require_once '../Back-End/adminUnset.php';
require_once "../Back-End/connexion.php";
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Front-End/css/reset.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="../Front-End/css/style.css" type="text/css" charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,800" rel="stylesheet">
    <title>Document</title>
    <style media="screen">
        label {
            margin-left: 20px;
        }
    </style>
</head>
<body>


<div class="formContainer" style="margin-top: 400px">
<form class="form" action="doadd.php" method="post">

    <input id="title" type="text" name="title" value="" placeholder="Title">

    <label for="category">Category: </label>
    <select id="category" class="" name="category">
        <option value="- -">- -</option>
        <option value="Animals">Animals</option>
        <option value="Trump">Trump</option>
        <option value="Creepy">Creepy</option>
        <option value="Anime">Anime</option>
        <option value="-">-</option>
    </select>

    <label for="displayable">Displayable: </label>
    <select id="displayable" class="" name="displayable">
        <option value="- -">- -</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>

    <input id="src" type="text" name="src" value="" placeholder="URL" style="margin-left: 20px">

    <input type="submit" name="" value="Submit">

</form><a href="../index.php" style="margin-top: 50px"><button>BACK</button></a>
</div>

</body>
</html>
