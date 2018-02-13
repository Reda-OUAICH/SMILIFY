<?php
/**
 * Created by PhpStorm.
 * User: TomTom
 * Date: 12/02/2018
 * Time: 16:30
 */

require_once "connexion.php";


$sql = "
SELECT
id,
title,
category,
displayable
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
            border: 2px solid black;
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

<table>
    <h1>Smilify</h1>
    <table>
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Category</th>
            <th>Displayable</th>
            <th>Options</th>
        </tr>
    <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
        <tr>
            <td><?=$row["id"]?></td>
            <td><?=$row["title"]?></td>
            <td><?=$row["category"]?></td>
            <td><?=$row["displayable"]?></td>
            <td>
                <a href="update.php?id=<?=$row["id"]?>">Update</a>
                <a href="dodelete.php?id=<?=$row["id"]?>">Delete</a>
            </td>
        </tr>
     <?php endwhile;?>
    </table>
    <a href="add.php" class="btn"><button>Add</button></a>
</body>
</html>
