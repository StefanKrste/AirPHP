<?php
$dsn = 'mysql:host=localhost;dbname=air_php;charset=utf8';
$usernameDb = 'root';
$passwordDb = 'root';

try {
    $db = new PDO($dsn, $usernameDb, $passwordDb);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo $error_message;
    exit();
}
?>