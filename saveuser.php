<?php require
    'database.php';

$message = '';


$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
$stmt = $cone->prepare($sql);

$stmt->bindParam(':email', $email);
$password_hashed = password_hash($password, PASSWORD_BCRYPT);
$stmt->bindParam(':password', $password_hashed);

if ($stmt->execute()) {

    $message = 'Succesfully created new user please login';

        header("Location:login.php?message=" . $message);

} else {
    $message = 'Sorry there must have been an issue creating your account';

         header("Location:signup.php?message=" . $message);

}

?>