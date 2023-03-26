<?php

$dsn = "mysql:host=localhost; dbname=zippyusedautos";
$username = 'root';
$password ='';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = "Database Error: ";
    $error_message .= $e->getMessage();
    include('view/error.php');
    exit();
}


?>