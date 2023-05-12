<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>
</head>
<body>


<?php require "assets/partials/header.php" ?>


    <h1>Login</h1>
    <span>or
    <a href="signup.php">SignUp</a>
     </span>


    <form action="login.php" method="post">
        <input type="text" email="email" placeholder="Enter your email">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="submit" value="Send">
    </form>
</body>
</html>