<?php
require_once "checkAdmin.php";
require_once "connexion.php";
?>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style media="screen">
    label {
      margin-left: 20px;
    }
  </style>
</head>
<body>
  <form class="form" action="doadd.php" method="post">


    <label for="title">Title: </label>
    <input id="title" type="text" name="title" value="">

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

      <label for="src">SRC: </label>
      <input id="src" type="text" name="src" value="">

    <input type="submit" name="" value="Submit">

  </form>
  <a href="index.php"><button><-</button></a>

</body>
</html>
