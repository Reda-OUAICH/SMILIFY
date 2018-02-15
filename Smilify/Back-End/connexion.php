<?php
try {
    $conn = new PDO('mysql:dbname=Smilify;host=127.0.0.1', 'root', 'root');
} catch (PDOException $exception) {
    die($exception->getMessage());
}


