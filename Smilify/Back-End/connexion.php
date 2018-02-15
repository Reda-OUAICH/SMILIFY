<?php
//Connect the DB with the Back Office
try {
    $conn = new PDO('mysql:dbname=Smilify;host=127.0.0.1', 'root', 'root');
} catch (PDOException $exception) {
    die($exception->getMessage());
}


