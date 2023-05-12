<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'login';

try {
    $cone = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    } catch (PDOException $e) {
        //die('Connection failed: '.$e->getMessage());
        $message = 'Sorry there must have been an exception creating your account';

         header("Location:signup.php?message=" . $message);


    }


?>