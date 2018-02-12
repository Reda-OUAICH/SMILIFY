<?php
try {
    $conn = new PDO('mysql:dbname=Smilify;host=localhost', 'root', 'root');
} catch (PDOException $exception) {
    die('Oups');
}


