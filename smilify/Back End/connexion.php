<?php
try {
    $conn = new PDO('mysql:dbname=Smilify;host=127.0.0.1', 'root', 'rootroot1');
} catch (PDOException $exception) {
    die($exception->getMessage());
}


