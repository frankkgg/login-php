<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'login';

try {
    $cone = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    } catch (PDOException $e) {
        die('Connection failed: '.$e->getMessage());

    }


?>