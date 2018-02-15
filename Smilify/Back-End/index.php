<?php
/**
 * Created by PhpStorm.
 * User: TomTom
 * Date: 12/02/2018
 * Time: 16:30
 */

require "checkAdmin.php";

require_once "connexion.php";

//select the columns from 'Gifs'

$sql = "SELECT
    `id`,
    `title`,
    `category`,
    `displayable`,
    `src`
  FROM
  `Gifs`
;";

$stmt = $conn->prepare($sql);
$stmt->execute();

$sql2 = "SELECT
    `id`,
    `title`,
    `category`,
    `displayable`,
    `src`
  FROM
  `NewGifs`
;";

$stmt2 = $conn->prepare($sql2);
$stmt2->execute();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smilify</title>
    <link rel="stylesheet" href="../Front-End/css/reset.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="../Front-End/css/style.css" type="text/css" charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,800" rel="stylesheet">
    <style>
        h1{
            text-align: center;
        }

        th{
            font-size: 23px;
        }

        td {
            border: 1px solid black;
            font-size: 18px;
        }

        table {
            width: 100%;
        }

        a {
            margin-left: 10px;
        }


        button{
            width: 70px;
            height: 40px;
            font-size: 22px;
            border: 1px solid black;
            border-radius: 5px;
            margin-top: 40px;
            margin-left: 46%;
        }

        .secText{
           margin-top:  50px;
        }

        .secTab{
            margin-bottom:40px;
            margin-top: 40px;
        }

    </style>
</head>
<body>

<?php
if (isset($_GET['error'])) {
    ?>
    <div style="color: red; font-size: 35px"><?=$_GET['error']?></div>
    <?php
}
?>
<?php
if (isset($_GET['message'])) {
    ?>
    <div style="color: green; font-size: 35px"><?=$_GET['message']?></div>
    <?php
}
?>

<h1 class="mainTitle">Smilify<span class="littleText">administration</span></h1>
<table border="1"  cellspacing="0" cellpadding="0">
    <tr>
        <th>id</th>
        <th>Title</th>
        <th>Category</th>
        <th>Displayable</th>
        <th>SRC</th>
    </tr>
    <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
        <tr>
            <td><?=$row["id"]?></td>
            <td><?=$row["title"]?></td>
            <td><?=$row["category"]?></td>
            <td><?=$row["displayable"]?></td>
            <td><?=$row["src"]?></td>
            <td>
                <a href="edit.php?id=<?=$row["id"]?>">Edit</a>
                <a href="dodelete.php?id=<?=$row["id"]?>">Delete</a>
            </td>
        </tr>
    <?php endwhile;?>
</table>

<a href="add.php" class="btn"><button>Add</button></a>
<a href="../index.php">RETURN TO FRONT</a>

<h1 class="secText"><span class="littleText">Waiting List</span</h1>
<table class="secTab" border="1"  cellspacing="0" cellpadding="0">
    <tr>
        <th>id</th>
        <th>Title</th>
        <th>Category</th>
        <th>Displayable</th>
        <th>SRC</th>
    </tr>
    <?php while (false !== $row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) :?>
        <tr>
            <td><?=$row2["id"]?></td>
            <td><?=$row2["title"]?></td>
            <td><?=$row2["category"]?></td>
            <td><?=$row2["displayable"]?></td>
            <td><?=$row2["src"]?></td>
            <td>
                <a href="accept.php?action=accept&id=<?=$row2["id"]?>&title=<?=$row2["title"]?>&category=<?=$row2["category"]?>&displayable=<?=$row2["displayable"]?>&src=<?=$row2["src"]?>">Accept</a>
                <a href="accept.php?action=refuse&id=<?=$row2["id"]?>">Refuse</a>
            </td>
        </tr>
    <?php endwhile;?>
</table>
</body>
</html>
