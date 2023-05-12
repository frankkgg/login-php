<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Document</title>
</head>
<body>
 
<?php require "assets/partials/header.php" ?>


     <h1>SignUp</h1>
     <?php
 if(!empty($_GET['message'])): ?>
    <h2><?= $_GET['message'] ?></h2>
 <?php endif; ?>

     <span>or <a href="signup.php">Login</a>
     </span>
        
    <form action="saveuser.php" method="post">

    <input type="text" name="email" placeholder="Enter your email">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="password" name="confirm_password" placeholder="Confirm your password">

        <input type="submit" value="Send">
    
    </form>    

    
</body>
</html>