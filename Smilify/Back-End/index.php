<?php
/**
 * Created by PhpStorm.
 * User: TomTom
 * Date: 12/02/2018
 * Time: 16:30
 */

require_once "checkAdmin.php";

require_once "connexion.php";


$sql = "
SELECT
id,
title,
category,
displayable,
src
FROM
Gifs
;";
$stmt = $conn->prepare($sql);
$stmt->execute();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smilify</title>
    <style>
        h1{
            text-align: center;
        }

        th{
            font-size: 23px;
        }

        td {
            border: 1px solid black;
            font-size: 20px;
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

<h1>Smilify</h1>
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
<a href="../index.php">le Front</a>
</body>
</html>
